<?php
App::uses('AppController', 'Controller');
/**
 * SoDets Controller
 *
 * @property SoDet $SoDet
 */
class SoDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SoDet->recursive = 0;
		$this->set('soDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SoDet->exists($id)) {
			throw new NotFoundException(__('Invalid so det'));
		}
		$options = array('conditions' => array('SoDet.' . $this->SoDet->primaryKey => $id));
		$this->set('soDet', $this->SoDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SoDet->create();
			if ($this->SoDet->save($this->request->data)) {
				$this->Session->setFlash(__('The so det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The so det could not be saved. Please, try again.'));
			}
		}
		$salesOrders = $this->SoDet->SalesOrder->find('list');
		$itemCodes = $this->SoDet->ItemCode->find('list');
		$uoms = $this->SoDet->Uom->find('list');
		$approvalRegisters = $this->SoDet->ApprovalRegister->find('list');
		$taxCombs = $this->SoDet->TaxComb->find('list');
		$this->set(compact('salesOrders', 'itemCodes', 'uoms', 'approvalRegisters', 'taxCombs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SoDet->exists($id)) {
			throw new NotFoundException(__('Invalid so det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SoDet->save($this->request->data)) {
				$this->Session->setFlash(__('The so det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The so det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SoDet.' . $this->SoDet->primaryKey => $id));
			$this->request->data = $this->SoDet->find('first', $options);
		}
		$salesOrders = $this->SoDet->SalesOrder->find('list');
		$itemCodes = $this->SoDet->ItemCode->find('list');
		$uoms = $this->SoDet->Uom->find('list');
		$approvalRegisters = $this->SoDet->ApprovalRegister->find('list');
		$taxCombs = $this->SoDet->TaxComb->find('list');
		$this->set(compact('salesOrders', 'itemCodes', 'uoms', 'approvalRegisters', 'taxCombs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SoDet->id = $id;
		if (!$this->SoDet->exists()) {
			throw new NotFoundException(__('Invalid so det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SoDet->delete()) {
			$this->Session->setFlash(__('So det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('So det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
