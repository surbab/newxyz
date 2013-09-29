<?php
App::uses('AppController', 'Controller');
/**
 * EstiminationDets Controller
 *
 * @property EstiminationDet $EstiminationDet
 */
class EstiminationDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EstiminationDet->recursive = 0;
		$this->set('estiminationDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EstiminationDet->exists($id)) {
			throw new NotFoundException(__('Invalid estimination det'));
		}
		$options = array('conditions' => array('EstiminationDet.' . $this->EstiminationDet->primaryKey => $id));
		$this->set('estiminationDet', $this->EstiminationDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EstiminationDet->create();
			if ($this->EstiminationDet->save($this->request->data)) {
				$this->Session->setFlash(__('The estimination det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estimination det could not be saved. Please, try again.'));
			}
		}
		$estimations = $this->EstiminationDet->Estimation->find('list');
		$estimClasses = $this->EstiminationDet->EstimClass->find('list');
		$uoms = $this->EstiminationDet->Uom->find('list');
		$this->set(compact('estimations', 'estimClasses', 'uoms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EstiminationDet->exists($id)) {
			throw new NotFoundException(__('Invalid estimination det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EstiminationDet->save($this->request->data)) {
				$this->Session->setFlash(__('The estimination det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estimination det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EstiminationDet.' . $this->EstiminationDet->primaryKey => $id));
			$this->request->data = $this->EstiminationDet->find('first', $options);
		}
		$estimations = $this->EstiminationDet->Estimation->find('list');
		$estimClasses = $this->EstiminationDet->EstimClass->find('list');
		$uoms = $this->EstiminationDet->Uom->find('list');
		$this->set(compact('estimations', 'estimClasses', 'uoms'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EstiminationDet->id = $id;
		if (!$this->EstiminationDet->exists()) {
			throw new NotFoundException(__('Invalid estimination det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EstiminationDet->delete()) {
			$this->Session->setFlash(__('Estimination det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Estimination det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
