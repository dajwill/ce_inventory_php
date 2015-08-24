<?php
App::uses('AppController', 'Controller');
/**
 * CheckOuts Controller
 *
 * @property CheckOut $CheckOut
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CheckOutsController extends AppController {

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
		$this->CheckOut->recursive = 0;
		$this->set('checkOuts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CheckOut->exists($id)) {
			throw new NotFoundException(__('Invalid check out'));
		}
		$options = array('conditions' => array('CheckOut.' . $this->CheckOut->primaryKey => $id));
		$this->set('checkOut', $this->CheckOut->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$item_id = $this->params['pass'][0];
		if ($this->request->is('post')) {
			$this->CheckOut->create();
			$this->request->data['CheckOut']['item_id'] = $item_id;
			if ($this->CheckOut->save($this->request->data)) {
				$this->CheckOut->Item->check_out($item_id);
				$this->Session->setFlash(__('The check out has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The check out could not be saved. Please, try again.'));
			}
		}
		$users = $this->CheckOut->User->find('list');
		$this->set(compact('users', 'items'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CheckOut->exists($id)) {
			throw new NotFoundException(__('Invalid check out'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CheckOut->save($this->request->data)) {
				$this->Session->setFlash(__('The check out has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The check out could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CheckOut.' . $this->CheckOut->primaryKey => $id));
			$this->request->data = $this->CheckOut->find('first', $options);
		}
		$users = $this->CheckOut->User->find('list');
		$items = $this->CheckOut->Item->find('list');
		$this->set(compact('users', 'items'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CheckOut->id = $id;
		if (!$this->CheckOut->exists()) {
			throw new NotFoundException(__('Invalid check out'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CheckOut->delete()) {
			$this->Session->setFlash(__('The check out has been deleted.'));
		} else {
			$this->Session->setFlash(__('The check out could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CheckOut->recursive = 0;
		$this->set('checkOuts', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CheckOut->exists($id)) {
			throw new NotFoundException(__('Invalid check out'));
		}
		$options = array('conditions' => array('CheckOut.' . $this->CheckOut->primaryKey => $id));
		$this->set('checkOut', $this->CheckOut->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CheckOut->create();
			if ($this->CheckOut->save($this->request->data)) {
				$this->Session->setFlash(__('The check out has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The check out could not be saved. Please, try again.'));
			}
		}
		$users = $this->CheckOut->User->find('list');
		$items = $this->CheckOut->Item->find('list');
		$this->set(compact('users', 'items'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->CheckOut->exists($id)) {
			throw new NotFoundException(__('Invalid check out'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CheckOut->save($this->request->data)) {
				$this->Session->setFlash(__('The check out has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The check out could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CheckOut.' . $this->CheckOut->primaryKey => $id));
			$this->request->data = $this->CheckOut->find('first', $options);
		}
		$users = $this->CheckOut->User->find('list');
		$items = $this->CheckOut->Item->find('list');
		$this->set(compact('users', 'items'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->CheckOut->id = $id;
		if (!$this->CheckOut->exists()) {
			throw new NotFoundException(__('Invalid check out'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CheckOut->delete()) {
			$this->Session->setFlash(__('The check out has been deleted.'));
		} else {
			$this->Session->setFlash(__('The check out could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
