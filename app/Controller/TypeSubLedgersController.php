<?php
App::uses('AppController', 'Controller');
/**
 * TypeSubLedgers Controller
 *
 * @property TypeSubLedger $TypeSubLedger
 */
class TypeSubLedgersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TypeSubLedger->recursive = 0;
		$this->set('typeSubLedgers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TypeSubLedger->exists($id)) {
			throw new NotFoundException(__('Invalid type sub ledger'));
		}
		$options = array('conditions' => array('TypeSubLedger.' . $this->TypeSubLedger->primaryKey => $id));
		$this->set('typeSubLedger', $this->TypeSubLedger->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TypeSubLedger->create();
			if ($this->TypeSubLedger->save($this->request->data)) {
				$this->Session->setFlash(__('The type sub ledger has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type sub ledger could not be saved. Please, try again.'));
			}
		}
		$typeLedgers = $this->TypeSubLedger->TypeLedger->find('list');
		$this->set(compact('typeLedgers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TypeSubLedger->exists($id)) {
			throw new NotFoundException(__('Invalid type sub ledger'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TypeSubLedger->save($this->request->data)) {
				$this->Session->setFlash(__('The type sub ledger has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type sub ledger could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TypeSubLedger.' . $this->TypeSubLedger->primaryKey => $id));
			$this->request->data = $this->TypeSubLedger->find('first', $options);
		}
		$typeLedgers = $this->TypeSubLedger->TypeLedger->find('list');
		$this->set(compact('typeLedgers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TypeSubLedger->id = $id;
		if (!$this->TypeSubLedger->exists()) {
			throw new NotFoundException(__('Invalid type sub ledger'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TypeSubLedger->delete()) {
			$this->Session->setFlash(__('Type sub ledger deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Type sub ledger was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
