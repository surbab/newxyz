<?php
App::uses('AppController', 'Controller');
/**
 * PayTerms Controller
 *
 * @property PayTerm $PayTerm
 */
class PayTermsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PayTerm->recursive = 0;
		$this->set('payTerms', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PayTerm->exists($id)) {
			throw new NotFoundException(__('Invalid pay term'));
		}
		$options = array('conditions' => array('PayTerm.' . $this->PayTerm->primaryKey => $id));
		$this->set('payTerm', $this->PayTerm->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PayTerm->create();
			if ($this->PayTerm->save($this->request->data)) {
				$this->Session->setFlash(__('The pay term has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pay term could not be saved. Please, try again.'));
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
		if (!$this->PayTerm->exists($id)) {
			throw new NotFoundException(__('Invalid pay term'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PayTerm->save($this->request->data)) {
				$this->Session->setFlash(__('The pay term has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pay term could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PayTerm.' . $this->PayTerm->primaryKey => $id));
			$this->request->data = $this->PayTerm->find('first', $options);
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
		$this->PayTerm->id = $id;
		if (!$this->PayTerm->exists()) {
			throw new NotFoundException(__('Invalid pay term'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PayTerm->delete()) {
			$this->Session->setFlash(__('Pay term deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pay term was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
