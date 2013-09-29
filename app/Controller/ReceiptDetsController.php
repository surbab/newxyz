<?php
App::uses('AppController', 'Controller');
/**
 * ReceiptDets Controller
 *
 * @property ReceiptDet $ReceiptDet
 */
class ReceiptDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ReceiptDet->recursive = 0;
		$this->set('ReceiptDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ReceiptDet->exists($id)) {
			throw new NotFoundException(__('Invalid Receipt det'));
		}
		$options = array('conditions' => array('ReceiptDet.' . $this->ReceiptDet->primaryKey => $id));
		$this->set('ReceiptDet', $this->ReceiptDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ReceiptDet->create();
			if ($this->ReceiptDet->save($this->request->data)) {
				$this->Session->setFlash(__('The Receipt det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Receipt det could not be saved. Please, try again.'));
			}
		}
		$Receipts = $this->ReceiptDet->Receipt->find('list');
		$this->set(compact('Receipts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ReceiptDet->exists($id)) {
			throw new NotFoundException(__('Invalid Receipt det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ReceiptDet->save($this->request->data)) {
				$this->Session->setFlash(__('The Receipt det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Receipt det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReceiptDet.' . $this->ReceiptDet->primaryKey => $id));
			$this->request->data = $this->ReceiptDet->find('first', $options);
		}
		$Receipts = $this->ReceiptDet->Receipt->find('list');
		$this->set(compact('Receipts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ReceiptDet->id = $id;
		if (!$this->ReceiptDet->exists()) {
			throw new NotFoundException(__('Invalid Receipt det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ReceiptDet->delete()) {
			$this->Session->setFlash(__('Receipt det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Receipt det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
