<?php
App::uses('AppController', 'Controller');
/**
 * BankAccs Controller
 *
 * @property BankAcc $BankAcc
 */
class BankAccsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BankAcc->recursive = 0;
		$this->set('bankAccs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BankAcc->exists($id)) {
			throw new NotFoundException(__('Invalid bank acc'));
		}
		$options = array('conditions' => array('BankAcc.' . $this->BankAcc->primaryKey => $id));
		$this->set('bankAcc', $this->BankAcc->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BankAcc->create();
			if ($this->BankAcc->save($this->request->data)) {
				$this->Session->setFlash(__('The bank acc has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bank acc could not be saved. Please, try again.'));
			}
		}
		$locations = $this->BankAcc->Location->find('list');
		$finYears = $this->BankAcc->FinYear->find('list');
		$this->set(compact('locations', 'finYears'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BankAcc->exists($id)) {
			throw new NotFoundException(__('Invalid bank acc'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BankAcc->save($this->request->data)) {
				$this->Session->setFlash(__('The bank acc has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bank acc could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BankAcc.' . $this->BankAcc->primaryKey => $id));
			$this->request->data = $this->BankAcc->find('first', $options);
		}
		$locations = $this->BankAcc->Location->find('list');
		$finYears = $this->BankAcc->FinYear->find('list');
		$this->set(compact('locations', 'finYears'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->BankAcc->id = $id;
		if (!$this->BankAcc->exists()) {
			throw new NotFoundException(__('Invalid bank acc'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BankAcc->delete()) {
			$this->Session->setFlash(__('Bank acc deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bank acc was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
