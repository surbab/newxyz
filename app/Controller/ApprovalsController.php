<?php
App::uses('AppController', 'Controller');
/**
 * Approvals Controller
 *
 * @property Approval $Approval
 */
class ApprovalsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Approval->recursive = 0;
		$this->set('approvals', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Approval->exists($id)) {
			throw new NotFoundException(__('Invalid approval'));
		}
		$options = array('conditions' => array('Approval.' . $this->Approval->primaryKey => $id));
		$this->set('approval', $this->Approval->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Approval->create();
			if ($this->Approval->save($this->request->data)) {
				$this->Session->setFlash(__('The approval has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The approval could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Approval->exists($id)) {
			throw new NotFoundException(__('Invalid approval'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Approval->save($this->request->data)) {
				$this->Session->setFlash(__('The approval has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The approval could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Approval.' . $this->Approval->primaryKey => $id));
			$this->request->data = $this->Approval->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Approval->id = $id;
		if (!$this->Approval->exists()) {
			throw new NotFoundException(__('Invalid approval'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Approval->delete()) {
			$this->Session->setFlash(__('Approval deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Approval was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
