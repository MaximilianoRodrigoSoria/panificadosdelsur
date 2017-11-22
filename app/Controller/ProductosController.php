<?php
App::uses('AppController', 'Controller');
/**
 * Productos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 */
class ProductosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('RequestHandler','Session');
	public $helpers = array('Html','Form','Time','Js');

	public $paginate = array(
		'limit'=>5,
		'order'=>array(
			'Producto.id'=>'asc'));


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Producto->recursive = 0;
		$this->paginate['Producto']['limit']=5;
		$this->paginate['Producto']['order']=array('Producto.id'=>'asc');
		//$this->paginate['Producto']['conditions'] =>('Producto.nombre' => '')
		$this->set('productos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('producto', $this->Producto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Producto->create();
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash('El Producto ha sido creado correctamente', 'default',array('class'=>'container alert alert-success text-center'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Producto no pudo crearse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
			}
		}
		$estados = $this->Producto->Estado->find('list');
		$formulas = $this->Producto->Formula->find('list');
		$this->set(compact('estados', 'formulas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash('El Producto ha sido modificado correctamente', 'default',array('class'=>'container alert alert-success text-center'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Producto no pudo modificarse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
		}
		$estados = $this->Producto->Estado->find('list');
		$formulas = $this->Producto->Formula->find('list');
		$this->set(compact('estados', 'formulas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Producto->id = $id;
		if (!$this->Producto->exists()) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Producto->delete()) {
			$this->Session->setFlash('El Producto ha sido eliminado correctamente', 'default',array('class'=>'container alert alert-success text-center'));
		} else {
			$this->Session->setFlash('El Producto no pudo eliminarse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function searchJson(){

		$term = null;
		if(!empty($this->request->query['term'])){

			$term = $this->request->query['term'];
			$terms = explode(' ',trim($term));
			$terms = array_diff($terms, array(''));
			foreach ($terms as $term){
				
				$conditions[]=array('Producto.nombre LIKE' => '%' . $term . '%');
			}

			$productos = $this->Producto->find('all',array('recursive' => -1, 'fields' => array('Producto.id','Producto.nombre'), 'conditions' => $conditions, 'limit' => 20));

		}

		echo json_encode($productos);
		$this->autoRender = false;
	}

	public function search(){

		$search=null;
		if(!empty($this->request->query['search'])){

			$search=$this->request->query['search'];
			$search=preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $search);
			$terms = explode(' ',trim($search));
			$terms = array_diff($terms, array(''));

			foreach ($terms as $term) {
				
				$terms1[]=preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $term);
				$conditions[]=array("Producto.nombre LIKE" => '%'. $term . '%');
			}

			$productos= $this->Producto->find('all', array('recursive' => -1, 'conditions' => $conditions, 'limit' => 200));
			if(count($productos) == 1){

				return $this->redirect(array('controller' => 'productos', 'action' => 'view' ,$productos[0]['Producto']['id']));
			}

			$terms1=array_diff($terms1, array(''));
			$this->set(compact('productos','terms1'));

		}

		$this->set(compact('search'));

		if($this->request->is('ajax')){

			$this->layout = false;
			$this->set('ajax', 1);
		}

		else{

			$this->set('ajax',0);
		}

	}

	public function isAuthorized($user)
        { if(isset($user['Role']) && $user['Role']['tipo']==='Encargado de Produccion')
            {if(in_array($this->action, array('index','edit','view')))
            	{return true;}
            else
            	{if($this->Auth->user('id'))
            		{$this->Session->setFlash('No tiene acceso','default', array('class'=>'alert alert-danger'));
            		$this->redirect($this->Auth->redirect());


            		}

        }

        }
        return parent::isAuthorized($user);
           
    }
}
