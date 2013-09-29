<?php
App::uses('AppController', 'Controller');
/**
 * SaleRfqs Controller
 *
 * @property SaleRfq $SaleRfq
 */
class SaleRfqsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SaleRfq->recursive = 0;
		$this->set('saleRfqs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SaleRfq->exists($id)) {
			throw new NotFoundException(__('Invalid sale rfq'));
		}
		$options = array('conditions' => array('SaleRfq.' . $this->SaleRfq->primaryKey => $id));
		$this->set('saleRfq', $this->SaleRfq->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SaleRfq->create();
			if ($this->SaleRfq->save($this->request->data)) {
				$this->Session->setFlash(__('The sale rfq has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale rfq could not be saved. Please, try again.'));
			}
		}
		$locations = $this->SaleRfq->Location->find('list');
		$partners = $this->SaleRfq->Partner->find('list');
		$finYears = $this->SaleRfq->FinYear->find('list');
		$approvalRegisters = $this->SaleRfq->ApprovalRegister->find('list');
		$this->set(compact('locations', 'partners', 'finYears', 'approvalRegisters'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SaleRfq->exists($id)) {
			throw new NotFoundException(__('Invalid sale rfq'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SaleRfq->save($this->request->data)) {
				$this->Session->setFlash(__('The sale rfq has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale rfq could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SaleRfq.' . $this->SaleRfq->primaryKey => $id));
			$this->request->data = $this->SaleRfq->find('first', $options);
		}
		$locations = $this->SaleRfq->Location->find('list');
		$partners = $this->SaleRfq->Partner->find('list');
		$finYears = $this->SaleRfq->FinYear->find('list');
		$approvalRegisters = $this->SaleRfq->ApprovalRegister->find('list');
		$this->set(compact('locations', 'partners', 'finYears', 'approvalRegisters'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SaleRfq->id = $id;
		if (!$this->SaleRfq->exists()) {
			throw new NotFoundException(__('Invalid sale rfq'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SaleRfq->delete()) {
			$this->Session->setFlash(__('Sale rfq deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sale rfq was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
