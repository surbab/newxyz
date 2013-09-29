<?php
App::uses('AppController', 'Controller');
/**
 * Grns Controller
 *
 * @property Grn $Grn
 */
class GrnsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Grn->recursive = 0;
		$this->set('grns', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Grn->exists($id)) {
			throw new NotFoundException(__('Invalid grn'));
		}
		$options = array('conditions' => array('Grn.' . $this->Grn->primaryKey => $id));
		$this->set('grn', $this->Grn->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Grn->create();
			if ($this->Grn->save($this->request->data)) {
				$this->Session->setFlash(__('The grn has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grn could not be saved. Please, try again.'));
			}
		}
		$locations = $this->Grn->Location->find('list');
		$purchaseOrders = $this->Grn->PurchaseOrder->find('list');
		$finYears = $this->Grn->FinYear->find('list');
		$this->set(compact('locations', 'purchaseOrders', 'finYears'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Grn->exists($id)) {
			throw new NotFoundException(__('Invalid grn'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Grn->save($this->request->data)) {
				$this->Session->setFlash(__('The grn has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grn could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Grn.' . $this->Grn->primaryKey => $id));
			$this->request->data = $this->Grn->find('first', $options);
		}
		$locations = $this->Grn->Location->find('list');
		$purchaseOrders = $this->Grn->PurchaseOrder->find('list');
		$finYears = $this->Grn->FinYear->find('list');
		$this->set(compact('locations', 'purchaseOrders', 'finYears'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Grn->id = $id;
		if (!$this->Grn->exists()) {
			throw new NotFoundException(__('Invalid grn'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Grn->delete()) {
			$this->Session->setFlash(__('Grn deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Grn was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
