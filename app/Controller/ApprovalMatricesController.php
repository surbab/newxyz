<?php
App::uses('AppController', 'Controller');
/**
 * ApprovalMatrices Controller
 *
 * @property ApprovalMatrix $ApprovalMatrix
 */
class ApprovalMatricesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ApprovalMatrix->recursive = 0;
		$this->set('approvalMatrices', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ApprovalMatrix->exists($id)) {
			throw new NotFoundException(__('Invalid approval matrix'));
		}
		$options = array('conditions' => array('ApprovalMatrix.' . $this->ApprovalMatrix->primaryKey => $id));
		$this->set('approvalMatrix', $this->ApprovalMatrix->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ApprovalMatrix->create();
			if ($this->ApprovalMatrix->save($this->request->data)) {
				$this->Session->setFlash(__('The approval matrix has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The approval matrix could not be saved. Please, try again.'));
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
		if (!$this->ApprovalMatrix->exists($id)) {
			throw new NotFoundException(__('Invalid approval matrix'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ApprovalMatrix->save($this->request->data)) {
				$this->Session->setFlash(__('The approval matrix has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The approval matrix could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ApprovalMatrix.' . $this->ApprovalMatrix->primaryKey => $id));
			$this->request->data = $this->ApprovalMatrix->find('first', $options);
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
		$this->ApprovalMatrix->id = $id;
		if (!$this->ApprovalMatrix->exists()) {
			throw new NotFoundException(__('Invalid approval matrix'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ApprovalMatrix->delete()) {
			$this->Session->setFlash(__('Approval matrix deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Approval matrix was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
