<?php
App::uses('AppController', 'Controller');
/**
 * SaleAgents Controller
 *
 * @property SaleAgent $SaleAgent
 */
class SaleAgentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SaleAgent->recursive = 0;
		$this->set('saleAgents', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SaleAgent->exists($id)) {
			throw new NotFoundException(__('Invalid sale agent'));
		}
		$options = array('conditions' => array('SaleAgent.' . $this->SaleAgent->primaryKey => $id));
		$this->set('saleAgent', $this->SaleAgent->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SaleAgent->create();
			if ($this->SaleAgent->save($this->request->data)) {
				$this->Session->setFlash(__('The sale agent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale agent could not be saved. Please, try again.'));
			}
		}
		$partners = $this->SaleAgent->Partner->find('list');
		$saleRegions = $this->SaleAgent->SaleRegion->find('list');
		$saleComms = $this->SaleAgent->SaleComm->find('list');
		$this->set(compact('partners', 'saleRegions', 'saleComms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SaleAgent->exists($id)) {
			throw new NotFoundException(__('Invalid sale agent'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SaleAgent->save($this->request->data)) {
				$this->Session->setFlash(__('The sale agent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale agent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SaleAgent.' . $this->SaleAgent->primaryKey => $id));
			$this->request->data = $this->SaleAgent->find('first', $options);
		}
		$partners = $this->SaleAgent->Partner->find('list');
		$saleRegions = $this->SaleAgent->SaleRegion->find('list');
		$saleComms = $this->SaleAgent->SaleComm->find('list');
		$this->set(compact('partners', 'saleRegions', 'saleComms'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SaleAgent->id = $id;
		if (!$this->SaleAgent->exists()) {
			throw new NotFoundException(__('Invalid sale agent'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SaleAgent->delete()) {
			$this->Session->setFlash(__('Sale agent deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sale agent was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
