<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

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
			'User.id'=>'asc'));

	public function beforeFilter() {
    parent::beforeFilter();
    // Se puede ir a ADD y a logout.
    //$this->Auth->allow('add', 'logout');
}

public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Session->setFlash('El Usuario y/o la Contraseña son incorrectos', 'default',array('class'=>'container alert alert-danger'));
    }
}

public function logout() {
    return $this->redirect($this->Auth->logout());
}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->paginate['User']['limit']=5;
		$this->paginate['User']['order']=array('User.id'=>'asc');
		//$this->paginate['User']['conditions'] =>('User.nombre' => '')
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('El Usuario ha sido creado correctamente', 'default',array('class'=>'container alert alert-success text-center'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Usuario no pudo crearse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
			}
		}
		$roles = $this->User->Role->find('list');
		$estados = $this->User->Estado->find('list');
		$this->set(compact('roles', 'estados'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('El Usuario ha sido modificado correctamente', 'default',array('class'=>'container alert alert-success text-center'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El Usuario no pudo modificarse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$roles = $this->User->Role->find('list');
		$estados = $this->User->Estado->find('list');
		$this->set(compact('roles', 'estados'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash('El Usuario ha sido eliminado correctamente', 'default',array('class'=>'container alert alert-success text-center'));
		} else {
			$this->Session->setFlash('El Usuario no pudo eliminarse, intentelo nuevamente', 'default',array('class'=>'container alert alert-danger text-center'));
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
				
				$conditions[]=array('User.username LIKE' => '%' . $term . '%');
			}

			$users = $this->User->find('all',array('recursive' => -1, 'fields' => array('User.id','User.username'), 'conditions' => $conditions, 'limit' => 20));

		}

		echo json_encode($users);
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
				$conditions[]=array("User.username LIKE" => '%'. $term . '%');
			}

			$users= $this->User->find('all', array('recursive' => -1, 'conditions' => $conditions, 'limit' => 200));
			if(count($users) == 1){

				return $this->redirect(array('controller' => 'users', 'action' => 'view' ,$users[0]['User']['id']));
			}

			$terms1=array_diff($terms1, array(''));
			$this->set(compact('users','terms1'));

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
        { if(isset($user['Role']) && $user['Role']['tipo']==='Administrador')
            {if(in_array($this->action, array('index','add','edit','view','delete')))
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
