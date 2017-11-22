<?php
App::uses('AppController', 'Controller');
/**
 * Subestados Controller
 *
 * @property Subestado $Subestado
 * @property PaginatorComponent $Paginator
 */
class SubestadosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Subestado->recursive = 0;
		$this->set('subestados', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Subestado->exists($id)) {
			throw new NotFoundException(__('Invalid subestado'));
		}
		$options = array('conditions' => array('Subestado.' . $this->Subestado->primaryKey => $id));
		$this->set('subestado', $this->Subestado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subestado->create();
			if ($this->Subestado->save($this->request->data)) {
				$this->Session->setFlash(__('The subestado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subestado could not be saved. Please, try again.'));
			}
		}
		$estados = $this->Subestado->Estado->find('list');
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
		if (!$this->Subestado->exists($id)) {
			throw new NotFoundException(__('Invalid subestado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Subestado->save($this->request->data)) {
				$this->Session->setFlash(__('The subestado has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subestado could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Subestado.' . $this->Subestado->primaryKey => $id));
			$this->request->data = $this->Subestado->find('first', $options);
		}
		$estados = $this->Subestado->Estado->find('list');
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
		$this->Subestado->id = $id;
		if (!$this->Subestado->exists()) {
			throw new NotFoundException(__('Invalid subestado'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Subestado->delete()) {
			$this->Session->setFlash(__('The subestado has been deleted.'));
		} else {
			$this->Session->setFlash(__('The subestado could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
