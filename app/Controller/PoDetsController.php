<?php
App::uses('AppController', 'Controller');
/**
 * PoDets Controller
 *
 * @property PoDet $PoDet
 */
class PoDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PoDet->recursive = 0;
		$this->set('poDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PoDet->exists($id)) {
			throw new NotFoundException(__('Invalid po det'));
		}
		$options = array('conditions' => array('PoDet.' . $this->PoDet->primaryKey => $id));
		$this->set('poDet', $this->PoDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PoDet->create();
			if ($this->PoDet->save($this->request->data)) {
				$this->Session->setFlash(__('The po det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The po det could not be saved. Please, try again.'));
			}
		}
		$purchaseOrders = $this->PoDet->PurchaseOrder->find('list');
		$itemCodes = $this->PoDet->ItemCode->find('list');
		$uoms = $this->PoDet->Uom->find('list');
		$taxCombs = $this->PoDet->TaxComb->find('list');
		$this->set(compact('purchaseOrders', 'itemCodes', 'uoms', 'taxCombs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PoDet->exists($id)) {
			throw new NotFoundException(__('Invalid po det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PoDet->save($this->request->data)) {
				$this->Session->setFlash(__('The po det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The po det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PoDet.' . $this->PoDet->primaryKey => $id));
			$this->request->data = $this->PoDet->find('first', $options);
		}
		$purchaseOrders = $this->PoDet->PurchaseOrder->find('list');
		$itemCodes = $this->PoDet->ItemCode->find('list');
		$uoms = $this->PoDet->Uom->find('list');
		$taxCombs = $this->PoDet->TaxComb->find('list');
		$this->set(compact('purchaseOrders', 'itemCodes', 'uoms', 'taxCombs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PoDet->id = $id;
		if (!$this->PoDet->exists()) {
			throw new NotFoundException(__('Invalid po det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PoDet->delete()) {
			$this->Session->setFlash(__('Po det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Po det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
