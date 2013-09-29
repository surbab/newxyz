<?php
App::uses('AppController', 'Controller');
/**
 * TaxCombDets Controller
 *
 * @property TaxCombDet $TaxCombDet
 */
class TaxCombDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TaxCombDet->recursive = 0;
		$this->set('taxCombDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TaxCombDet->exists($id)) {
			throw new NotFoundException(__('Invalid tax comb det'));
		}
		$options = array('conditions' => array('TaxCombDet.' . $this->TaxCombDet->primaryKey => $id));
		$this->set('taxCombDet', $this->TaxCombDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TaxCombDet->create();
			if ($this->TaxCombDet->save($this->request->data)) {
				$this->Session->setFlash(__('The tax comb det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tax comb det could not be saved. Please, try again.'));
			}
		}
		$taxCombs = $this->TaxCombDet->TaxComb->find('list');
		$taxTypes = $this->TaxCombDet->TaxType->find('list');
		$this->set(compact('taxCombs', 'taxTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TaxCombDet->exists($id)) {
			throw new NotFoundException(__('Invalid tax comb det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TaxCombDet->save($this->request->data)) {
				$this->Session->setFlash(__('The tax comb det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tax comb det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TaxCombDet.' . $this->TaxCombDet->primaryKey => $id));
			$this->request->data = $this->TaxCombDet->find('first', $options);
		}
		$taxCombs = $this->TaxCombDet->TaxComb->find('list');
		$taxTypes = $this->TaxCombDet->TaxType->find('list');
		$this->set(compact('taxCombs', 'taxTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TaxCombDet->id = $id;
		if (!$this->TaxCombDet->exists()) {
			throw new NotFoundException(__('Invalid tax comb det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TaxCombDet->delete()) {
			$this->Session->setFlash(__('Tax comb det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tax comb det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
