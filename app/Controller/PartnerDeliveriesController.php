<?php
App::uses('AppController', 'Controller');
/**
 * PartnerDeliveries Controller
 *
 * @property PartnerDelivery $PartnerDelivery
 */
class PartnerDeliveriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PartnerDelivery->recursive = 0;
		$this->set('partnerDeliveries', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PartnerDelivery->exists($id)) {
			throw new NotFoundException(__('Invalid partner delivery'));
		}
		$options = array('conditions' => array('PartnerDelivery.' . $this->PartnerDelivery->primaryKey => $id));
		$this->set('partnerDelivery', $this->PartnerDelivery->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PartnerDelivery->create();
			if ($this->PartnerDelivery->save($this->request->data)) {
				$this->Session->setFlash(__('The partner delivery has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partner delivery could not be saved. Please, try again.'));
			}
		}
		$partners = $this->PartnerDelivery->Partner->find('list');
		$states = $this->PartnerDelivery->State->find('list');
		$countries = $this->PartnerDelivery->Country->find('list');
		$this->set(compact('partners', 'states', 'countries'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PartnerDelivery->exists($id)) {
			throw new NotFoundException(__('Invalid partner delivery'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PartnerDelivery->save($this->request->data)) {
				$this->Session->setFlash(__('The partner delivery has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partner delivery could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PartnerDelivery.' . $this->PartnerDelivery->primaryKey => $id));
			$this->request->data = $this->PartnerDelivery->find('first', $options);
		}
		$partners = $this->PartnerDelivery->Partner->find('list');
		$states = $this->PartnerDelivery->State->find('list');
		$countries = $this->PartnerDelivery->Country->find('list');
		$this->set(compact('partners', 'states', 'countries'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PartnerDelivery->id = $id;
		if (!$this->PartnerDelivery->exists()) {
			throw new NotFoundException(__('Invalid partner delivery'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PartnerDelivery->delete()) {
			$this->Session->setFlash(__('Partner delivery deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Partner delivery was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
