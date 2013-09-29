<?php
App::uses('AppController', 'Controller');
/**
 * EngBoms Controller
 *
 * @property EngBom $EngBom
 */
class EngBomsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EngBom->recursive = 0;
		$this->set('engBoms', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EngBom->exists($id)) {
			throw new NotFoundException(__('Invalid eng bom'));
		}
		$options = array('conditions' => array('EngBom.' . $this->EngBom->primaryKey => $id));
		$this->set('engBom', $this->EngBom->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EngBom->create();
			if ($this->EngBom->save($this->request->data)) {
				$this->Session->setFlash(__('The eng bom has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eng bom could not be saved. Please, try again.'));
			}
		}
		$itemCodes = $this->EngBom->ItemCode->find('list');
		$approvalRegisters = $this->EngBom->ApprovalRegister->find('list');
		$this->set(compact('itemCodes', 'approvalRegisters'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EngBom->exists($id)) {
			throw new NotFoundException(__('Invalid eng bom'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EngBom->save($this->request->data)) {
				$this->Session->setFlash(__('The eng bom has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eng bom could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EngBom.' . $this->EngBom->primaryKey => $id));
			$this->request->data = $this->EngBom->find('first', $options);
		}
		$itemCodes = $this->EngBom->ItemCode->find('list');
		$approvalRegisters = $this->EngBom->ApprovalRegister->find('list');
		$this->set(compact('itemCodes', 'approvalRegisters'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EngBom->id = $id;
		if (!$this->EngBom->exists()) {
			throw new NotFoundException(__('Invalid eng bom'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EngBom->delete()) {
			$this->Session->setFlash(__('Eng bom deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Eng bom was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
