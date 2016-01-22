<?php
App::uses('AppController', 'Controller');
/**
 * Attrs Controller
 *
 * @property Attr $Attr
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AttrsController extends AppController {

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
		$this->layout = 'kind_home';
		$this->Attr->recursive = 0;
		$this->set('attrs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout = 'kind_home';
		if (!$this->Attr->exists($id)) {
			throw new NotFoundException(__('Invalid attr'));
		}
		$options = array('conditions' => array('Attr.' . $this->Attr->primaryKey => $id));
		$this->set('attr', $this->Attr->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'kind_home';
		if ($this->request->is('post')) {
			$this->Attr->create();
			if ($this->Attr->save($this->request->data)) {
				$this->Session->setFlash(__('The attr has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attr could not be saved. Please, try again.'));
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
		$this->layout = 'kind_home';
		if (!$this->Attr->exists($id)) {
			throw new NotFoundException(__('Invalid attr'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Attr->save($this->request->data)) {
				$this->Session->setFlash(__('The attr has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attr could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Attr.' . $this->Attr->primaryKey => $id));
			$this->request->data = $this->Attr->find('first', $options);
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
		$this->layout = 'kind_home';
		$this->Attr->id = $id;
		if (!$this->Attr->exists()) {
			throw new NotFoundException(__('Invalid attr'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Attr->delete()) {
			$this->Session->setFlash(__('The attr has been deleted.'));
		} else {
			$this->Session->setFlash(__('The attr could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
