<?php
App::uses('AppController', 'Controller');
/**
 * TaxCombs Controller
 *
 * @property TaxComb $TaxComb
 */
class TaxCombsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TaxComb->recursive = 0;
		$this->set('taxCombs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TaxComb->exists($id)) {
			throw new NotFoundException(__('Invalid tax comb'));
		}
		$options = array('conditions' => array('TaxComb.' . $this->TaxComb->primaryKey => $id));
		$this->set('taxComb', $this->TaxComb->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TaxComb->create();
			if ($this->TaxComb->save($this->request->data)) {
				$this->Session->setFlash(__('The tax comb has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tax comb could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TaxComb->exists($id)) {
			throw new NotFoundException(__('Invalid tax comb'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TaxComb->save($this->request->data)) {
				$this->Session->setFlash(__('The tax comb has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tax comb could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TaxComb.' . $this->TaxComb->primaryKey => $id));
			$this->request->data = $this->TaxComb->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TaxComb->id = $id;
		if (!$this->TaxComb->exists()) {
			throw new NotFoundException(__('Invalid tax comb'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TaxComb->delete()) {
			$this->Session->setFlash(__('Tax comb deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tax comb was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
