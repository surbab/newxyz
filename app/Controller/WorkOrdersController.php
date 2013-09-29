<?php
App::uses('AppController', 'Controller');
/**
 * WorkOrders Controller
 *
 * @property WorkOrder $WorkOrder
 */
class WorkOrdersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->WorkOrder->recursive = 0;
		$this->set('workOrders', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WorkOrder->exists($id)) {
			throw new NotFoundException(__('Invalid work order'));
		}
		$options = array('conditions' => array('WorkOrder.' . $this->WorkOrder->primaryKey => $id));
		$this->set('workOrder', $this->WorkOrder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WorkOrder->create();
			if ($this->WorkOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The work order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The work order could not be saved. Please, try again.'));
			}
		}
		$locations = $this->WorkOrder->Location->find('list');
		$salesOrders = $this->WorkOrder->SalesOrder->find('list');
		$itemCodes = $this->WorkOrder->ItemCode->find('list');
		$mouldDets = $this->WorkOrder->MouldDet->find('list');
		$soDets = $this->WorkOrder->SoDet->find('list');
		$finYears = $this->WorkOrder->FinYear->find('list');
		$approvalRegisters = $this->WorkOrder->ApprovalRegister->find('list');
		$this->set(compact('locations', 'salesOrders', 'itemCodes', 'mouldDets', 'soDets', 'finYears', 'approvalRegisters'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->WorkOrder->exists($id)) {
			throw new NotFoundException(__('Invalid work order'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->WorkOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The work order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The work order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WorkOrder.' . $this->WorkOrder->primaryKey => $id));
			$this->request->data = $this->WorkOrder->find('first', $options);
		}
		$locations = $this->WorkOrder->Location->find('list');
		$salesOrders = $this->WorkOrder->SalesOrder->find('list');
		$itemCodes = $this->WorkOrder->ItemCode->find('list');
		$mouldDets = $this->WorkOrder->MouldDet->find('list');
		$soDets = $this->WorkOrder->SoDet->find('list');
		$finYears = $this->WorkOrder->FinYear->find('list');
		$approvalRegisters = $this->WorkOrder->ApprovalRegister->find('list');
		$this->set(compact('locations', 'salesOrders', 'itemCodes', 'mouldDets', 'soDets', 'finYears', 'approvalRegisters'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->WorkOrder->id = $id;
		if (!$this->WorkOrder->exists()) {
			throw new NotFoundException(__('Invalid work order'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->WorkOrder->delete()) {
			$this->Session->setFlash(__('Work order deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Work order was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
