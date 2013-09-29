<?php
App::uses('AppController', 'Controller');
/**
 * EstimClasses Controller
 *
 * @property EstimClass $EstimClass
 */
class EstimClassesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EstimClass->recursive = 0;
		$this->set('estimClasses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EstimClass->exists($id)) {
			throw new NotFoundException(__('Invalid estim class'));
		}
		$options = array('conditions' => array('EstimClass.' . $this->EstimClass->primaryKey => $id));
		$this->set('estimClass', $this->EstimClass->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EstimClass->create();
			if ($this->EstimClass->save($this->request->data)) {
				$this->Session->setFlash(__('The estim class has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estim class could not be saved. Please, try again.'));
			}
		}
		$uoms = $this->EstimClass->Uom->find('list');
		$this->set(compact('uoms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EstimClass->exists($id)) {
			throw new NotFoundException(__('Invalid estim class'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EstimClass->save($this->request->data)) {
				$this->Session->setFlash(__('The estim class has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estim class could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EstimClass.' . $this->EstimClass->primaryKey => $id));
			$this->request->data = $this->EstimClass->find('first', $options);
		}
		$uoms = $this->EstimClass->Uom->find('list');
		$this->set(compact('uoms'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EstimClass->id = $id;
		if (!$this->EstimClass->exists()) {
			throw new NotFoundException(__('Invalid estim class'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EstimClass->delete()) {
			$this->Session->setFlash(__('Estim class deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Estim class was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
