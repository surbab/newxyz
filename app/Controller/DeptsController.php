<?php
App::uses('AppController', 'Controller');
/**
 * Depts Controller
 *
 * @property Dept $Dept
 */
class DeptsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Dept->recursive = 0;
		$this->set('depts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dept->exists($id)) {
			throw new NotFoundException(__('Invalid dept'));
		}
		$options = array('conditions' => array('Dept.' . $this->Dept->primaryKey => $id));
		$this->set('dept', $this->Dept->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dept->create();
			if ($this->Dept->save($this->request->data)) {
				$this->Session->setFlash(__('The dept has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dept could not be saved. Please, try again.'));
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
		if (!$this->Dept->exists($id)) {
			throw new NotFoundException(__('Invalid dept'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Dept->save($this->request->data)) {
				$this->Session->setFlash(__('The dept has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dept could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dept.' . $this->Dept->primaryKey => $id));
			$this->request->data = $this->Dept->find('first', $options);
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
		$this->Dept->id = $id;
		if (!$this->Dept->exists()) {
			throw new NotFoundException(__('Invalid dept'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Dept->delete()) {
			$this->Session->setFlash(__('Dept deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Dept was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
