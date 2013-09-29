<?php
App::uses('AppController', 'Controller');
/**
 * QuoteDets Controller
 *
 * @property QuoteDet $QuoteDet
 */
class QuoteDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->QuoteDet->recursive = 0;
		$this->set('quoteDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QuoteDet->exists($id)) {
			throw new NotFoundException(__('Invalid quote det'));
		}
		$options = array('conditions' => array('QuoteDet.' . $this->QuoteDet->primaryKey => $id));
		$this->set('quoteDet', $this->QuoteDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QuoteDet->create();
			if ($this->QuoteDet->save($this->request->data)) {
				$this->Session->setFlash(__('The quote det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quote det could not be saved. Please, try again.'));
			}
		}
		$quotations = $this->QuoteDet->Quotation->find('list');
		$itemCodes = $this->QuoteDet->ItemCode->find('list');
		$uoms = $this->QuoteDet->Uom->find('list');
		$this->set(compact('quotations', 'itemCodes', 'uoms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->QuoteDet->exists($id)) {
			throw new NotFoundException(__('Invalid quote det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->QuoteDet->save($this->request->data)) {
				$this->Session->setFlash(__('The quote det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quote det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QuoteDet.' . $this->QuoteDet->primaryKey => $id));
			$this->request->data = $this->QuoteDet->find('first', $options);
		}
		$quotations = $this->QuoteDet->Quotation->find('list');
		$itemCodes = $this->QuoteDet->ItemCode->find('list');
		$uoms = $this->QuoteDet->Uom->find('list');
		$this->set(compact('quotations', 'itemCodes', 'uoms'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->QuoteDet->id = $id;
		if (!$this->QuoteDet->exists()) {
			throw new NotFoundException(__('Invalid quote det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->QuoteDet->delete()) {
			$this->Session->setFlash(__('Quote det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Quote det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
