<?php
App::uses('AppController', 'Controller');
/**
 * DelChalans Controller
 *
 * @property DelChalan $DelChalan
 */
class DelChalansController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DelChalan->recursive = 0;
		$this->set('delChalans', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DelChalan->exists($id)) {
			throw new NotFoundException(__('Invalid del chalan'));
		}
		$options = array('conditions' => array('DelChalan.' . $this->DelChalan->primaryKey => $id));
		$this->set('delChalan', $this->DelChalan->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DelChalan->create();
			if ($this->DelChalan->save($this->request->data)) {
				$this->Session->setFlash(__('The del chalan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The del chalan could not be saved. Please, try again.'));
			}
		}
		$locations = $this->DelChalan->Location->find('list');
		$partners = $this->DelChalan->Partner->find('list');
		$salesOrders = $this->DelChalan->SalesOrder->find('list');
		$finYears = $this->DelChalan->FinYear->find('list');
		$this->set(compact('locations', 'partners', 'salesOrders', 'finYears'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DelChalan->exists($id)) {
			throw new NotFoundException(__('Invalid del chalan'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DelChalan->save($this->request->data)) {
				$this->Session->setFlash(__('The del chalan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The del chalan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DelChalan.' . $this->DelChalan->primaryKey => $id));
			$this->request->data = $this->DelChalan->find('first', $options);
		}
		$locations = $this->DelChalan->Location->find('list');
		$partners = $this->DelChalan->Partner->find('list');
		$salesOrders = $this->DelChalan->SalesOrder->find('list');
		$finYears = $this->DelChalan->FinYear->find('list');
		$this->set(compact('locations', 'partners', 'salesOrders', 'finYears'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DelChalan->id = $id;
		if (!$this->DelChalan->exists()) {
			throw new NotFoundException(__('Invalid del chalan'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DelChalan->delete()) {
			$this->Session->setFlash(__('Del chalan deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Del chalan was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
