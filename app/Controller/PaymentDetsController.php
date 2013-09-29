<?php
App::uses('AppController', 'Controller');
/**
 * PaymentDets Controller
 *
 * @property PaymentDet $PaymentDet
 */
class PaymentDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PaymentDet->recursive = 0;
		$this->set('paymentDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PaymentDet->exists($id)) {
			throw new NotFoundException(__('Invalid payment det'));
		}
		$options = array('conditions' => array('PaymentDet.' . $this->PaymentDet->primaryKey => $id));
		$this->set('paymentDet', $this->PaymentDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PaymentDet->create();
			if ($this->PaymentDet->save($this->request->data)) {
				$this->Session->setFlash(__('The payment det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment det could not be saved. Please, try again.'));
			}
		}
		$payments = $this->PaymentDet->Payment->find('list');
		$this->set(compact('payments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PaymentDet->exists($id)) {
			throw new NotFoundException(__('Invalid payment det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PaymentDet->save($this->request->data)) {
				$this->Session->setFlash(__('The payment det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PaymentDet.' . $this->PaymentDet->primaryKey => $id));
			$this->request->data = $this->PaymentDet->find('first', $options);
		}
		$payments = $this->PaymentDet->Payment->find('list');
		$this->set(compact('payments'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PaymentDet->id = $id;
		if (!$this->PaymentDet->exists()) {
			throw new NotFoundException(__('Invalid payment det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PaymentDet->delete()) {
			$this->Session->setFlash(__('Payment det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Payment det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
