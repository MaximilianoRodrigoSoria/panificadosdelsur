<?php
App::uses('AppController', 'Controller');
/**
 * Epedidos Controller
 *
 * @property Epedido $Epedido
 * @property PaginatorComponent $Paginator
 */
class EpedidosController extends AppController {

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
			'Epedido.id'=>'asc'));

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Epedido->recursive = 0;
		$this->paginate['Epedido']['limit']=5;
		$this->paginate['Epedido']['order']=array('Epedido.id'=>'asc');
		$this->paginate['Epedido']['conditions']=array('Epedido.subestado_id' => '1');
		$this->set('epedidos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Epedido->exists($id)) {
			throw new NotFoundException(__('Invalid epedido'));
		}
		$options = array('conditions' => array('Epedido.' . $this->Epedido->primaryKey => $id));
		$this->set('epedido', $this->Epedido->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Epedido->create();
			if ($this->Epedido->save($this->request->data)) {
				$this->Session->setFlash('El Pedido ha sido creado correctamente', 'default',array('class'=>'container alert alert-success text-center'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Pedido no pudo crearse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
			}
		}
		$users = $this->Epedido->User->find('list');
		$estados = $this->Epedido->Estado->find('list');
		$subestados = $this->Epedido->Subestado->find('list');
		$productos = $this->Epedido->Producto->find('list');
		$tipos = $this->Epedido->Tipo->find('list');
		$this->set(compact('users', 'estados', 'subestados', 'productos', 'tipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Epedido->exists($id)) {
			throw new NotFoundException(__('Invalid epedido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Epedido->save($this->request->data)) {
				$this->Session->setFlash('El Pedido ha sido modificado correctamente', 'default',array('class'=>'container alert alert-success text-center'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Pedido no pudo modificarse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
			}
		} else {
			$options = array('conditions' => array('Epedido.' . $this->Epedido->primaryKey => $id));
			$this->request->data = $this->Epedido->find('first', $options);
		}
		$users = $this->Epedido->User->find('list');
		$estados = $this->Epedido->Estado->find('list');
		$subestados = $this->Epedido->Subestado->find('list');
		$productos = $this->Epedido->Producto->find('list');
		$tipos = $this->Epedido->Tipo->find('list');
		$this->set(compact('users', 'estados', 'subestados', 'productos', 'tipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Epedido->id = $id;
		if (!$this->Epedido->exists()) {
			throw new NotFoundException(__('Invalid epedido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Epedido->delete()) {
			$this->Session->setFlash('El Pedido ha sido eliminado correctamente', 'default',array('class'=>'container alert alert-success text-center'));
		} else {
			$this->Session->setFlash('El Pedido no pudo eliminarse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function isAuthorized($user)
        { if(isset($user['Role']) && $user['Role']['tipo']==='Empleado de Produccion')
            {if(in_array($this->action, array('index','add','edit','view', 'delete')))
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
