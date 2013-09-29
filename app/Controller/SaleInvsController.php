<?php
App::uses('AppController', 'Controller');
/**
 * SaleInvs Controller
 *
 * @property SaleInv $SaleInv
 */
class SaleInvsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SaleInv->recursive = 0;
		$this->set('saleInvs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SaleInv->exists($id)) {
			throw new NotFoundException(__('Invalid sale inv'));
		}
		$options = array('conditions' => array('SaleInv.' . $this->SaleInv->primaryKey => $id));
		$this->set('saleInv', $this->SaleInv->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SaleInv->create();
			if ($this->SaleInv->save($this->request->data)) {
				$this->Session->setFlash(__('The sale inv has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale inv could not be saved. Please, try again.'));
			}
		}
		$locations = $this->SaleInv->Location->find('list');
		$partners = $this->SaleInv->Partner->find('list');
		$salesOrders = $this->SaleInv->SalesOrder->find('list');
		$delChalans = $this->SaleInv->DelChalan->find('list');
		$finYears = $this->SaleInv->FinYear->find('list');
		$this->set(compact('locations', 'partners', 'salesOrders', 'delChalans', 'finYears'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SaleInv->exists($id)) {
			throw new NotFoundException(__('Invalid sale inv'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SaleInv->save($this->request->data)) {
				$this->Session->setFlash(__('The sale inv has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale inv could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SaleInv.' . $this->SaleInv->primaryKey => $id));
			$this->request->data = $this->SaleInv->find('first', $options);
		}
		$locations = $this->SaleInv->Location->find('list');
		$partners = $this->SaleInv->Partner->find('list');
		$salesOrders = $this->SaleInv->SalesOrder->find('list');
		$delChalans = $this->SaleInv->DelChalan->find('list');
		$finYears = $this->SaleInv->FinYear->find('list');
		$this->set(compact('locations', 'partners', 'salesOrders', 'delChalans', 'finYears'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SaleInv->id = $id;
		if (!$this->SaleInv->exists()) {
			throw new NotFoundException(__('Invalid sale inv'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SaleInv->delete()) {
			$this->Session->setFlash(__('Sale inv deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sale inv was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
