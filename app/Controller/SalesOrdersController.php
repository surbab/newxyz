<?php
App::uses('AppController', 'Controller');
/**
 * SalesOrders Controller
 *
 * @property SalesOrder $SalesOrder
 */
class SalesOrdersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SalesOrder->recursive = 0;
		$this->set('salesOrders', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SalesOrder->exists($id)) {
			throw new NotFoundException(__('Invalid sales order'));
		}
		$options = array('conditions' => array('SalesOrder.' . $this->SalesOrder->primaryKey => $id));
		$this->set('salesOrder', $this->SalesOrder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SalesOrder->create();
			if ($this->SalesOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The sales order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sales order could not be saved. Please, try again.'));
			}
		}
		$locations = $this->SalesOrder->Location->find('list');
		$partners = $this->SalesOrder->Partner->find('list');
		$quotations = $this->SalesOrder->Quotation->find('list');
		$terms = $this->SalesOrder->Term->find('list');
		$payTerms = $this->SalesOrder->PayTerm->find('list');
		$saleEngs = $this->SalesOrder->SaleEng->find('list');
		$finYears = $this->SalesOrder->FinYear->find('list');
		$approvalRegisters = $this->SalesOrder->ApprovalRegister->find('list');
		$this->set(compact('locations', 'partners', 'quotations', 'terms', 'payTerms', 'saleEngs', 'finYears', 'approvalRegisters'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SalesOrder->exists($id)) {
			throw new NotFoundException(__('Invalid sales order'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SalesOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The sales order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sales order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SalesOrder.' . $this->SalesOrder->primaryKey => $id));
			$this->request->data = $this->SalesOrder->find('first', $options);
		}
		$locations = $this->SalesOrder->Location->find('list');
		$partners = $this->SalesOrder->Partner->find('list');
		$quotations = $this->SalesOrder->Quotation->find('list');
		$terms = $this->SalesOrder->Term->find('list');
		$payTerms = $this->SalesOrder->PayTerm->find('list');
		$saleEngs = $this->SalesOrder->SaleEng->find('list');
		$finYears = $this->SalesOrder->FinYear->find('list');
		$approvalRegisters = $this->SalesOrder->ApprovalRegister->find('list');
		$this->set(compact('locations', 'partners', 'quotations', 'terms', 'payTerms', 'saleEngs', 'finYears', 'approvalRegisters'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SalesOrder->id = $id;
		if (!$this->SalesOrder->exists()) {
			throw new NotFoundException(__('Invalid sales order'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SalesOrder->delete()) {
			$this->Session->setFlash(__('Sales order deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sales order was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
