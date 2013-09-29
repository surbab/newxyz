<?php
App::uses('AppController', 'Controller');
/**
 * TypeLedgers Controller
 *
 * @property TypeLedger $TypeLedger
 */
class TypeLedgersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TypeLedger->recursive = 0;
		$this->set('typeLedgers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TypeLedger->exists($id)) {
			throw new NotFoundException(__('Invalid type ledger'));
		}
		$options = array('conditions' => array('TypeLedger.' . $this->TypeLedger->primaryKey => $id));
		$this->set('typeLedger', $this->TypeLedger->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TypeLedger->create();
			if ($this->TypeLedger->save($this->request->data)) {
				$this->Session->setFlash(__('The type ledger has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type ledger could not be saved. Please, try again.'));
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
		if (!$this->TypeLedger->exists($id)) {
			throw new NotFoundException(__('Invalid type ledger'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TypeLedger->save($this->request->data)) {
				$this->Session->setFlash(__('The type ledger has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type ledger could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TypeLedger.' . $this->TypeLedger->primaryKey => $id));
			$this->request->data = $this->TypeLedger->find('first', $options);
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
		$this->TypeLedger->id = $id;
		if (!$this->TypeLedger->exists()) {
			throw new NotFoundException(__('Invalid type ledger'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TypeLedger->delete()) {
			$this->Session->setFlash(__('Type ledger deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Type ledger was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
