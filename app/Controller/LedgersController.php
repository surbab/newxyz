<?php
App::uses('AppController', 'Controller');
/**
 * Ledgers Controller
 *
 * @property Ledger $Ledger
 */
class LedgersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Ledger->recursive = 0;
		$this->set('ledgers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ledger->exists($id)) {
			throw new NotFoundException(__('Invalid ledger'));
		}
		$options = array('conditions' => array('Ledger.' . $this->Ledger->primaryKey => $id));
		$this->set('ledger', $this->Ledger->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ledger->create();
			if ($this->Ledger->save($this->request->data)) {
				$this->Session->setFlash(__('The ledger has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ledger could not be saved. Please, try again.'));
			}
		}
		$ledgerGroups = $this->Ledger->LedgerGroup->find('list');
		$typeSubLedgers = $this->Ledger->TypeSubLedger->find('list');
		$typeLedgers = $this->Ledger->TypeLedger->find('list');
		$this->set(compact('ledgerGroups', 'typeSubLedgers', 'typeLedgers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Ledger->exists($id)) {
			throw new NotFoundException(__('Invalid ledger'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Ledger->save($this->request->data)) {
				$this->Session->setFlash(__('The ledger has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ledger could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ledger.' . $this->Ledger->primaryKey => $id));
			$this->request->data = $this->Ledger->find('first', $options);
		}
		$ledgerGroups = $this->Ledger->LedgerGroup->find('list');
		$typeSubLedgers = $this->Ledger->TypeSubLedger->find('list');
		$typeLedgers = $this->Ledger->TypeLedger->find('list');
		$this->set(compact('ledgerGroups', 'typeSubLedgers', 'typeLedgers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Ledger->id = $id;
		if (!$this->Ledger->exists()) {
			throw new NotFoundException(__('Invalid ledger'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ledger->delete()) {
			$this->Session->setFlash(__('Ledger deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ledger was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
