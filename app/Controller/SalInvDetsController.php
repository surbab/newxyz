<?php
App::uses('AppController', 'Controller');
/**
 * SalInvDets Controller
 *
 * @property SalInvDet $SalInvDet
 */
class SalInvDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SalInvDet->recursive = 0;
		$this->set('salInvDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SalInvDet->exists($id)) {
			throw new NotFoundException(__('Invalid sal inv det'));
		}
		$options = array('conditions' => array('SalInvDet.' . $this->SalInvDet->primaryKey => $id));
		$this->set('salInvDet', $this->SalInvDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SalInvDet->create();
			if ($this->SalInvDet->save($this->request->data)) {
				$this->Session->setFlash(__('The sal inv det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sal inv det could not be saved. Please, try again.'));
			}
		}
		$saleInvs = $this->SalInvDet->SaleInv->find('list');
		$itemCodes = $this->SalInvDet->ItemCode->find('list');
		$taxCombs = $this->SalInvDet->TaxComb->find('list');
		$this->set(compact('saleInvs', 'itemCodes', 'taxCombs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SalInvDet->exists($id)) {
			throw new NotFoundException(__('Invalid sal inv det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SalInvDet->save($this->request->data)) {
				$this->Session->setFlash(__('The sal inv det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sal inv det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SalInvDet.' . $this->SalInvDet->primaryKey => $id));
			$this->request->data = $this->SalInvDet->find('first', $options);
		}
		$saleInvs = $this->SalInvDet->SaleInv->find('list');
		$itemCodes = $this->SalInvDet->ItemCode->find('list');
		$taxCombs = $this->SalInvDet->TaxComb->find('list');
		$this->set(compact('saleInvs', 'itemCodes', 'taxCombs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SalInvDet->id = $id;
		if (!$this->SalInvDet->exists()) {
			throw new NotFoundException(__('Invalid sal inv det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SalInvDet->delete()) {
			$this->Session->setFlash(__('Sal inv det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sal inv det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
