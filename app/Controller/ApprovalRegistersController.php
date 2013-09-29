<?php
App::uses('AppController', 'Controller');
/**
 * ApprovalRegisters Controller
 *
 * @property ApprovalRegister $ApprovalRegister
 */
class ApprovalRegistersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ApprovalRegister->recursive = 0;
		$this->set('approvalRegisters', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ApprovalRegister->exists($id)) {
			throw new NotFoundException(__('Invalid approval register'));
		}
		$options = array('conditions' => array('ApprovalRegister.' . $this->ApprovalRegister->primaryKey => $id));
		$this->set('approvalRegister', $this->ApprovalRegister->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ApprovalRegister->create();
			if ($this->ApprovalRegister->save($this->request->data)) {
				$this->Session->setFlash(__('The approval register has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The approval register could not be saved. Please, try again.'));
			}
		}
		$users = $this->ApprovalRegister->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ApprovalRegister->exists($id)) {
			throw new NotFoundException(__('Invalid approval register'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ApprovalRegister->save($this->request->data)) {
				$this->Session->setFlash(__('The approval register has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The approval register could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ApprovalRegister.' . $this->ApprovalRegister->primaryKey => $id));
			$this->request->data = $this->ApprovalRegister->find('first', $options);
		}
		$users = $this->ApprovalRegister->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ApprovalRegister->id = $id;
		if (!$this->ApprovalRegister->exists()) {
			throw new NotFoundException(__('Invalid approval register'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ApprovalRegister->delete()) {
			$this->Session->setFlash(__('Approval register deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Approval register was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
