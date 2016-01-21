<?php
App::uses('AppController', 'Controller');
/**
 * Kinds Controller
 *
 * @property Kind $Kind
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class KindsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Kind->recursive = 0;
		$this->set('kinds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Kind->exists($id)) {
			throw new NotFoundException(__('Invalid kind'));
		}
		$options = array('conditions' => array('Kind.' . $this->Kind->primaryKey => $id));
		$this->set('kind', $this->Kind->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Kind->create();
			if ($this->Kind->save($this->request->data)) {
				$this->Session->setFlash(__('The kind has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kind could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Kind->exists($id)) {
			throw new NotFoundException(__('Invalid kind'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Kind->save($this->request->data)) {
				$this->Session->setFlash(__('The kind has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kind could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Kind.' . $this->Kind->primaryKey => $id));
			$this->request->data = $this->Kind->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Kind->id = $id;
		if (!$this->Kind->exists()) {
			throw new NotFoundException(__('Invalid kind'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Kind->delete()) {
			$this->Session->setFlash(__('The kind has been deleted.'));
		} else {
			$this->Session->setFlash(__('The kind could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
