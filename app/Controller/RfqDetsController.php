<?php
App::uses('AppController', 'Controller');
/**
 * RfqDets Controller
 *
 * @property RfqDet $RfqDet
 */
class RfqDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->RfqDet->recursive = 0;
		$this->set('rfqDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RfqDet->exists($id)) {
			throw new NotFoundException(__('Invalid rfq det'));
		}
		$options = array('conditions' => array('RfqDet.' . $this->RfqDet->primaryKey => $id));
		$this->set('rfqDet', $this->RfqDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RfqDet->create();
			if ($this->RfqDet->save($this->request->data)) {
				$this->Session->setFlash(__('The rfq det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rfq det could not be saved. Please, try again.'));
			}
		}
		$rfqs = $this->RfqDet->Rfq->find('list');
		$estimations = $this->RfqDet->Estimation->find('list');
		$this->set(compact('rfqs', 'estimations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RfqDet->exists($id)) {
			throw new NotFoundException(__('Invalid rfq det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->RfqDet->save($this->request->data)) {
				$this->Session->setFlash(__('The rfq det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rfq det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RfqDet.' . $this->RfqDet->primaryKey => $id));
			$this->request->data = $this->RfqDet->find('first', $options);
		}
		$rfqs = $this->RfqDet->Rfq->find('list');
		$estimations = $this->RfqDet->Estimation->find('list');
		$this->set(compact('rfqs', 'estimations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RfqDet->id = $id;
		if (!$this->RfqDet->exists()) {
			throw new NotFoundException(__('Invalid rfq det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RfqDet->delete()) {
			$this->Session->setFlash(__('Rfq det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rfq det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
