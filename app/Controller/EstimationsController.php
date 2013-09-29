<?php
App::uses('AppController', 'Controller');
/**
 * Estimations Controller
 *
 * @property Estimation $Estimation
 */
class EstimationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Estimation->recursive = 0;
		$this->set('estimations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Estimation->exists($id)) {
			throw new NotFoundException(__('Invalid estimation'));
		}
		$options = array('conditions' => array('Estimation.' . $this->Estimation->primaryKey => $id));
		$this->set('estimation', $this->Estimation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Estimation->create();
			if ($this->Estimation->save($this->request->data)) {
				$this->Session->setFlash(__('The estimation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estimation could not be saved. Please, try again.'));
			}
		}
		$locations = $this->Estimation->Location->find('list');
		$itemCodes = $this->Estimation->ItemCode->find('list');
		$saleRfqs = $this->Estimation->SaleRfq->find('list');
		$saleRfqDets = $this->Estimation->SaleRfqDet->find('list');
		$finYears = $this->Estimation->FinYear->find('list');
		$approvalRegisters = $this->Estimation->ApprovalRegister->find('list');
		$this->set(compact('locations', 'itemCodes', 'saleRfqs', 'saleRfqDets', 'finYears', 'approvalRegisters'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Estimation->exists($id)) {
			throw new NotFoundException(__('Invalid estimation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Estimation->save($this->request->data)) {
				$this->Session->setFlash(__('The estimation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estimation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Estimation.' . $this->Estimation->primaryKey => $id));
			$this->request->data = $this->Estimation->find('first', $options);
		}
		$locations = $this->Estimation->Location->find('list');
		$itemCodes = $this->Estimation->ItemCode->find('list');
		$saleRfqs = $this->Estimation->SaleRfq->find('list');
		$saleRfqDets = $this->Estimation->SaleRfqDet->find('list');
		$finYears = $this->Estimation->FinYear->find('list');
		$approvalRegisters = $this->Estimation->ApprovalRegister->find('list');
		$this->set(compact('locations', 'itemCodes', 'saleRfqs', 'saleRfqDets', 'finYears', 'approvalRegisters'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Estimation->id = $id;
		if (!$this->Estimation->exists()) {
			throw new NotFoundException(__('Invalid estimation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Estimation->delete()) {
			$this->Session->setFlash(__('Estimation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Estimation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
