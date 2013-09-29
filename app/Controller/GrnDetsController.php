<?php
App::uses('AppController', 'Controller');
/**
 * GrnDets Controller
 *
 * @property GrnDet $GrnDet
 */
class GrnDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GrnDet->recursive = 0;
		$this->set('grnDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GrnDet->exists($id)) {
			throw new NotFoundException(__('Invalid grn det'));
		}
		$options = array('conditions' => array('GrnDet.' . $this->GrnDet->primaryKey => $id));
		$this->set('grnDet', $this->GrnDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GrnDet->create();
			if ($this->GrnDet->save($this->request->data)) {
				$this->Session->setFlash(__('The grn det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grn det could not be saved. Please, try again.'));
			}
		}
		$grns = $this->GrnDet->Grn->find('list');
		$poDets = $this->GrnDet->PoDet->find('list');
		$taxCombs = $this->GrnDet->TaxComb->find('list');
		$approvalRegisters = $this->GrnDet->ApprovalRegister->find('list');
		$this->set(compact('grns', 'poDets', 'taxCombs', 'approvalRegisters'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GrnDet->exists($id)) {
			throw new NotFoundException(__('Invalid grn det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GrnDet->save($this->request->data)) {
				$this->Session->setFlash(__('The grn det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grn det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GrnDet.' . $this->GrnDet->primaryKey => $id));
			$this->request->data = $this->GrnDet->find('first', $options);
		}
		$grns = $this->GrnDet->Grn->find('list');
		$poDets = $this->GrnDet->PoDet->find('list');
		$taxCombs = $this->GrnDet->TaxComb->find('list');
		$approvalRegisters = $this->GrnDet->ApprovalRegister->find('list');
		$this->set(compact('grns', 'poDets', 'taxCombs', 'approvalRegisters'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->GrnDet->id = $id;
		if (!$this->GrnDet->exists()) {
			throw new NotFoundException(__('Invalid grn det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GrnDet->delete()) {
			$this->Session->setFlash(__('Grn det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Grn det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
