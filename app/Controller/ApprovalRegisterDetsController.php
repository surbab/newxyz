<?php
App::uses('AppController', 'Controller');
/**
 * ApprovalRegisterDets Controller
 *
 * @property ApprovalRegisterDet $ApprovalRegisterDet
 */
class ApprovalRegisterDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ApprovalRegisterDet->recursive = 0;
		$this->set('approvalRegisterDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ApprovalRegisterDet->exists($id)) {
			throw new NotFoundException(__('Invalid approval register det'));
		}
		$options = array('conditions' => array('ApprovalRegisterDet.' . $this->ApprovalRegisterDet->primaryKey => $id));
		$this->set('approvalRegisterDet', $this->ApprovalRegisterDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ApprovalRegisterDet->create();
			if ($this->ApprovalRegisterDet->save($this->request->data)) {
				$this->Session->setFlash(__('The approval register det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The approval register det could not be saved. Please, try again.'));
			}
		}
		$approvalRegisters = $this->ApprovalRegisterDet->ApprovalRegister->find('list');
		$employees = $this->ApprovalRegisterDet->Employee->find('list');
		$this->set(compact('approvalRegisters', 'employees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ApprovalRegisterDet->exists($id)) {
			throw new NotFoundException(__('Invalid approval register det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ApprovalRegisterDet->save($this->request->data)) {
				$this->Session->setFlash(__('The approval register det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The approval register det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ApprovalRegisterDet.' . $this->ApprovalRegisterDet->primaryKey => $id));
			$this->request->data = $this->ApprovalRegisterDet->find('first', $options);
		}
		$approvalRegisters = $this->ApprovalRegisterDet->ApprovalRegister->find('list');
		$employees = $this->ApprovalRegisterDet->Employee->find('list');
		$this->set(compact('approvalRegisters', 'employees'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ApprovalRegisterDet->id = $id;
		if (!$this->ApprovalRegisterDet->exists()) {
			throw new NotFoundException(__('Invalid approval register det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ApprovalRegisterDet->delete()) {
			$this->Session->setFlash(__('Approval register det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Approval register det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
