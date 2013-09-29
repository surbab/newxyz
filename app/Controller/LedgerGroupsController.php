<?php
App::uses('AppController', 'Controller');
/**
 * LedgerGroups Controller
 *
 * @property LedgerGroup $LedgerGroup
 */
class LedgerGroupsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LedgerGroup->recursive = 0;
		$this->set('ledgerGroups', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LedgerGroup->exists($id)) {
			throw new NotFoundException(__('Invalid ledger group'));
		}
		$options = array('conditions' => array('LedgerGroup.' . $this->LedgerGroup->primaryKey => $id));
		$this->set('ledgerGroup', $this->LedgerGroup->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LedgerGroup->create();
			if ($this->LedgerGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The ledger group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ledger group could not be saved. Please, try again.'));
			}
		}
		$typeSubLedgers = $this->LedgerGroup->TypeSubLedger->find('list');
		$this->set(compact('typeSubLedgers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LedgerGroup->exists($id)) {
			throw new NotFoundException(__('Invalid ledger group'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LedgerGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The ledger group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ledger group could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LedgerGroup.' . $this->LedgerGroup->primaryKey => $id));
			$this->request->data = $this->LedgerGroup->find('first', $options);
		}
		$typeSubLedgers = $this->LedgerGroup->TypeSubLedger->find('list');
		$this->set(compact('typeSubLedgers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LedgerGroup->id = $id;
		if (!$this->LedgerGroup->exists()) {
			throw new NotFoundException(__('Invalid ledger group'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LedgerGroup->delete()) {
			$this->Session->setFlash(__('Ledger group deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ledger group was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
