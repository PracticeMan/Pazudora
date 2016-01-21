<?php
App::uses('AppController', 'Controller');
/**
 * Monsters Controller
 *
 * @property Monster $Monster
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MonstersController extends AppController {

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
		$this->layout = 'home';
		$this->Monster->recursive = 0;
		$this->set('monsters', $this->Paginator->paginate());
	}

	public function monsterpage() {
		$this->layout = 'homemonster';
		$this->Monster->recursive = 0;
		$this->set('monsters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Monster->exists($id)) {
			throw new NotFoundException(__('Invalid monster'));
		}
		$options = array('conditions' => array('Monster.' . $this->Monster->primaryKey => $id));
		$this->set('monster', $this->Monster->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Monster->create();
			if ($this->Monster->save($this->request->data)) {
				$this->Session->setFlash(__('The monster has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The monster could not be saved. Please, try again.'));
			}
		}
		$attrs = $this->Monster->Attr->find('list');
		$kinds = $this->Monster->Kind->find('list');
		$this->set(compact('attrs', 'kinds'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Monster->exists($id)) {
			throw new NotFoundException(__('Invalid monster'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Monster->save($this->request->data)) {
				$this->Session->setFlash(__('The monster has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The monster could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Monster.' . $this->Monster->primaryKey => $id));
			$this->request->data = $this->Monster->find('first', $options);
		}
		$attrs = $this->Monster->Attr->find('list');
		$kinds = $this->Monster->Kind->find('list');
		$this->set(compact('attrs', 'kinds'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Monster->id = $id;
		if (!$this->Monster->exists()) {
			throw new NotFoundException(__('Invalid monster'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Monster->delete()) {
			$this->Session->setFlash(__('The monster has been deleted.'));
		} else {
			$this->Session->setFlash(__('The monster could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
