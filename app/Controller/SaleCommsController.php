<?php
App::uses('AppController', 'Controller');
/**
 * SaleComms Controller
 *
 * @property SaleComm $SaleComm
 */
class SaleCommsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SaleComm->recursive = 0;
		$this->set('saleComms', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SaleComm->exists($id)) {
			throw new NotFoundException(__('Invalid sale comm'));
		}
		$options = array('conditions' => array('SaleComm.' . $this->SaleComm->primaryKey => $id));
		$this->set('saleComm', $this->SaleComm->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SaleComm->create();
			if ($this->SaleComm->save($this->request->data)) {
				$this->Session->setFlash(__('The sale comm has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale comm could not be saved. Please, try again.'));
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
		if (!$this->SaleComm->exists($id)) {
			throw new NotFoundException(__('Invalid sale comm'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SaleComm->save($this->request->data)) {
				$this->Session->setFlash(__('The sale comm has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale comm could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SaleComm.' . $this->SaleComm->primaryKey => $id));
			$this->request->data = $this->SaleComm->find('first', $options);
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
		$this->SaleComm->id = $id;
		if (!$this->SaleComm->exists()) {
			throw new NotFoundException(__('Invalid sale comm'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SaleComm->delete()) {
			$this->Session->setFlash(__('Sale comm deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sale comm was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
