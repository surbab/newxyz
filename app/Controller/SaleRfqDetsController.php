<?php
App::uses('AppController', 'Controller');
/**
 * SaleRfqDets Controller
 *
 * @property SaleRfqDet $SaleRfqDet
 */
class SaleRfqDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SaleRfqDet->recursive = 0;
		$this->set('saleRfqDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SaleRfqDet->exists($id)) {
			throw new NotFoundException(__('Invalid sale rfq det'));
		}
		$options = array('conditions' => array('SaleRfqDet.' . $this->SaleRfqDet->primaryKey => $id));
		$this->set('saleRfqDet', $this->SaleRfqDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SaleRfqDet->create();
			if ($this->SaleRfqDet->save($this->request->data)) {
				$this->Session->setFlash(__('The sale rfq det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale rfq det could not be saved. Please, try again.'));
			}
		}
		$saleRfqs = $this->SaleRfqDet->SaleRfq->find('list');
		$estimations = $this->SaleRfqDet->Estimation->find('list');
		$this->set(compact('saleRfqs', 'estimations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SaleRfqDet->exists($id)) {
			throw new NotFoundException(__('Invalid sale rfq det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SaleRfqDet->save($this->request->data)) {
				$this->Session->setFlash(__('The sale rfq det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale rfq det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SaleRfqDet.' . $this->SaleRfqDet->primaryKey => $id));
			$this->request->data = $this->SaleRfqDet->find('first', $options);
		}
		$saleRfqs = $this->SaleRfqDet->SaleRfq->find('list');
		$estimations = $this->SaleRfqDet->Estimation->find('list');
		$this->set(compact('saleRfqs', 'estimations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SaleRfqDet->id = $id;
		if (!$this->SaleRfqDet->exists()) {
			throw new NotFoundException(__('Invalid sale rfq det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SaleRfqDet->delete()) {
			$this->Session->setFlash(__('Sale rfq det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sale rfq det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
