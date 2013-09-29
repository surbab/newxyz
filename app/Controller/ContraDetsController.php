<?php
App::uses('AppController', 'Controller');
/**
 * ContraDets Controller
 *
 * @property ContraDet $ContraDet
 */
class ContraDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ContraDet->recursive = 0;
		$this->set('contraDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContraDet->exists($id)) {
			throw new NotFoundException(__('Invalid contra det'));
		}
		$options = array('conditions' => array('ContraDet.' . $this->ContraDet->primaryKey => $id));
		$this->set('contraDet', $this->ContraDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContraDet->create();
			if ($this->ContraDet->save($this->request->data)) {
				$this->Session->setFlash(__('The contra det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contra det could not be saved. Please, try again.'));
			}
		}
		$contras = $this->ContraDet->Contra->find('list');
		$this->set(compact('contras'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ContraDet->exists($id)) {
			throw new NotFoundException(__('Invalid contra det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContraDet->save($this->request->data)) {
				$this->Session->setFlash(__('The contra det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contra det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContraDet.' . $this->ContraDet->primaryKey => $id));
			$this->request->data = $this->ContraDet->find('first', $options);
		}
		$contras = $this->ContraDet->Contra->find('list');
		$this->set(compact('contras'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ContraDet->id = $id;
		if (!$this->ContraDet->exists()) {
			throw new NotFoundException(__('Invalid contra det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ContraDet->delete()) {
			$this->Session->setFlash(__('Contra det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contra det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
