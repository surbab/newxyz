<?php
App::uses('AppController', 'Controller');
/**
 * PurInvEntries Controller
 *
 * @property PurInvEntry $PurInvEntry
 */
class PurInvEntriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PurInvEntry->recursive = 0;
		$this->set('purInvEntries', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PurInvEntry->exists($id)) {
			throw new NotFoundException(__('Invalid pur inv entry'));
		}
		$options = array('conditions' => array('PurInvEntry.' . $this->PurInvEntry->primaryKey => $id));
		$this->set('purInvEntry', $this->PurInvEntry->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PurInvEntry->create();
			if ($this->PurInvEntry->save($this->request->data)) {
				$this->Session->setFlash(__('The pur inv entry has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pur inv entry could not be saved. Please, try again.'));
			}
		}
		$locations = $this->PurInvEntry->Location->find('list');
		$grns = $this->PurInvEntry->Grn->find('list');
		$purchaseOrders = $this->PurInvEntry->PurchaseOrder->find('list');
		$finYears = $this->PurInvEntry->FinYear->find('list');
		$approvalRegisters = $this->PurInvEntry->ApprovalRegister->find('list');
		$this->set(compact('locations', 'grns', 'purchaseOrders', 'finYears', 'approvalRegisters'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PurInvEntry->exists($id)) {
			throw new NotFoundException(__('Invalid pur inv entry'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PurInvEntry->save($this->request->data)) {
				$this->Session->setFlash(__('The pur inv entry has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pur inv entry could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PurInvEntry.' . $this->PurInvEntry->primaryKey => $id));
			$this->request->data = $this->PurInvEntry->find('first', $options);
		}
		$locations = $this->PurInvEntry->Location->find('list');
		$grns = $this->PurInvEntry->Grn->find('list');
		$purchaseOrders = $this->PurInvEntry->PurchaseOrder->find('list');
		$finYears = $this->PurInvEntry->FinYear->find('list');
		$approvalRegisters = $this->PurInvEntry->ApprovalRegister->find('list');
		$this->set(compact('locations', 'grns', 'purchaseOrders', 'finYears', 'approvalRegisters'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PurInvEntry->id = $id;
		if (!$this->PurInvEntry->exists()) {
			throw new NotFoundException(__('Invalid pur inv entry'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PurInvEntry->delete()) {
			$this->Session->setFlash(__('Pur inv entry deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pur inv entry was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
