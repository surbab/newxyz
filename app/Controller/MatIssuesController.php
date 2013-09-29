<?php
App::uses('AppController', 'Controller');
/**
 * MatIssues Controller
 *
 * @property MatIssue $MatIssue
 */
class MatIssuesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MatIssue->recursive = 0;
		$this->set('matIssues', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MatIssue->exists($id)) {
			throw new NotFoundException(__('Invalid mat issue'));
		}
		$options = array('conditions' => array('MatIssue.' . $this->MatIssue->primaryKey => $id));
		$this->set('matIssue', $this->MatIssue->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MatIssue->create();
			if ($this->MatIssue->save($this->request->data)) {
				$this->Session->setFlash(__('The mat issue has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mat issue could not be saved. Please, try again.'));
			}
		}
		$locations = $this->MatIssue->Location->find('list');
		$workOrders = $this->MatIssue->WorkOrder->find('list');
		$approvalRegisters = $this->MatIssue->ApprovalRegister->find('list');
		$finYears = $this->MatIssue->FinYear->find('list');
		$this->set(compact('locations', 'workOrders', 'approvalRegisters', 'finYears'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MatIssue->exists($id)) {
			throw new NotFoundException(__('Invalid mat issue'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MatIssue->save($this->request->data)) {
				$this->Session->setFlash(__('The mat issue has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mat issue could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MatIssue.' . $this->MatIssue->primaryKey => $id));
			$this->request->data = $this->MatIssue->find('first', $options);
		}
		$locations = $this->MatIssue->Location->find('list');
		$workOrders = $this->MatIssue->WorkOrder->find('list');
		$approvalRegisters = $this->MatIssue->ApprovalRegister->find('list');
		$finYears = $this->MatIssue->FinYear->find('list');
		$this->set(compact('locations', 'workOrders', 'approvalRegisters', 'finYears'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MatIssue->id = $id;
		if (!$this->MatIssue->exists()) {
			throw new NotFoundException(__('Invalid mat issue'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MatIssue->delete()) {
			$this->Session->setFlash(__('Mat issue deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mat issue was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
