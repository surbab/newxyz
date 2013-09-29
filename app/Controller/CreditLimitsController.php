<?php
App::uses('AppController', 'Controller');
/**
 * CreditLimits Controller
 *
 * @property CreditLimit $CreditLimit
 */
class CreditLimitsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CreditLimit->recursive = 0;
		$this->set('creditLimits', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CreditLimit->exists($id)) {
			throw new NotFoundException(__('Invalid credit limit'));
		}
		$options = array('conditions' => array('CreditLimit.' . $this->CreditLimit->primaryKey => $id));
		$this->set('creditLimit', $this->CreditLimit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CreditLimit->create();
			if ($this->CreditLimit->save($this->request->data)) {
				$this->Session->setFlash(__('The credit limit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The credit limit could not be saved. Please, try again.'));
			}
		}
		$partners = $this->CreditLimit->Partner->find('list');
		$approvalRegisters = $this->CreditLimit->ApprovalRegister->find('list');
		$this->set(compact('partners', 'approvalRegisters'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CreditLimit->exists($id)) {
			throw new NotFoundException(__('Invalid credit limit'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CreditLimit->save($this->request->data)) {
				$this->Session->setFlash(__('The credit limit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The credit limit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CreditLimit.' . $this->CreditLimit->primaryKey => $id));
			$this->request->data = $this->CreditLimit->find('first', $options);
		}
		$partners = $this->CreditLimit->Partner->find('list');
		$approvalRegisters = $this->CreditLimit->ApprovalRegister->find('list');
		$this->set(compact('partners', 'approvalRegisters'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CreditLimit->id = $id;
		if (!$this->CreditLimit->exists()) {
			throw new NotFoundException(__('Invalid credit limit'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CreditLimit->delete()) {
			$this->Session->setFlash(__('Credit limit deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Credit limit was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
