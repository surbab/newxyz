<?php
App::uses('AppController', 'Controller');
/**
 * TaxTypes Controller
 *
 * @property TaxType $TaxType
 */
class TaxTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TaxType->recursive = 0;
		$this->set('taxTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TaxType->exists($id)) {
			throw new NotFoundException(__('Invalid tax type'));
		}
		$options = array('conditions' => array('TaxType.' . $this->TaxType->primaryKey => $id));
		$this->set('taxType', $this->TaxType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TaxType->create();
			if ($this->TaxType->save($this->request->data)) {
				$this->Session->setFlash(__('The tax type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tax type could not be saved. Please, try again.'));
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
		if (!$this->TaxType->exists($id)) {
			throw new NotFoundException(__('Invalid tax type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TaxType->save($this->request->data)) {
				$this->Session->setFlash(__('The tax type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tax type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TaxType.' . $this->TaxType->primaryKey => $id));
			$this->request->data = $this->TaxType->find('first', $options);
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
		$this->TaxType->id = $id;
		if (!$this->TaxType->exists()) {
			throw new NotFoundException(__('Invalid tax type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TaxType->delete()) {
			$this->Session->setFlash(__('Tax type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tax type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
