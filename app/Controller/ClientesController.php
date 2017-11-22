<?php
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 *
 * @property Cliente $Cliente
 * @property PaginatorComponent $Paginator
 */
class ClientesController extends AppController {

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
			'Cliente.id'=>'asc'));
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cliente->recursive = 0;
		$this->paginate['Cliente']['limit']=5;
		$this->paginate['Cliente']['order']=array('Cliente.id'=>'asc');
		//$this->paginate['Cliente']['conditions'] =>('Cliente.nombre' => '')
		$this->set('clientes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
		$this->set('cliente', $this->Cliente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cliente->create();
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash('El Cliente ha sido creado correctamente', 'default',array('class'=>'container alert alert-success text-center'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Cliente no pudo crearse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
			}
		}
		$estados = $this->Cliente->Estado->find('list');
		$this->set(compact('estados'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash('El Cliente ha sido modificado correctamente', 'default',array('class'=>'container alert alert-success text-center'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Cliente no pudo modificarse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
			}
		} else {
			$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
			$this->request->data = $this->Cliente->find('first', $options);
		}
		$estados = $this->Cliente->Estado->find('list');
		$this->set(compact('estados'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cliente->id = $id;
		if (!$this->Cliente->exists()) {
			throw new NotFoundException(__('Invalid cliente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cliente->delete()) {
			$this->Session->setFlash('El Cliente ha sido eliminado correctamente', 'default',array('class'=>'container alert alert-success text-center'));
		} else {
			$this->Session->setFlash('El Cliente no pudo eliminarse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
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
				
				$conditions[]=array('Cliente.nombre LIKE' => '%' . $term . '%');
			}

			$clientes = $this->Cliente->find('all',array('recursive' => -1, 'fields' => array('Cliente.id','Cliente.nombre'), 'conditions' => $conditions, 'limit' => 20));

		}

		echo json_encode($clientes);
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
				$conditions[]=array("Cliente.nombre LIKE" => '%'. $term . '%');
			}

			$clientes= $this->Cliente->find('all', array('recursive' => -1, 'conditions' => $conditions, 'limit' => 200));
			if(count($clientes) == 1){

				return $this->redirect(array('controller' => 'clientes', 'action' => 'view' ,$clientes[0]['Cliente']['id']));
			}

			$terms1=array_diff($terms1, array(''));
			$this->set(compact('clientes','terms1'));

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
        { if(isset($user['Role']) && $user['Role']['tipo']==='Empleado de Ventas')
            {if(in_array($this->action, array('index','add','edit','view')))
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
