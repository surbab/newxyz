<?php
App::uses('AppController', 'Controller');
/**
 * ResourceMen Controller
 *
 * @property ResourceMan $ResourceMan
 */
class ResourceMenController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ResourceMan->recursive = 0;
		$this->set('resourceMen', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ResourceMan->exists($id)) {
			throw new NotFoundException(__('Invalid resource man'));
		}
		$options = array('conditions' => array('ResourceMan.' . $this->ResourceMan->primaryKey => $id));
		$this->set('resourceMan', $this->ResourceMan->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ResourceMan->create();
			if ($this->ResourceMan->save($this->request->data)) {
				$this->Session->setFlash(__('The resource man has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resource man could not be saved. Please, try again.'));
			}
		}
		$depts = $this->ResourceMan->Dept->find('list');
		$employees = $this->ResourceMan->Employee->find('list');
		$this->set(compact('depts', 'employees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ResourceMan->exists($id)) {
			throw new NotFoundException(__('Invalid resource man'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ResourceMan->save($this->request->data)) {
				$this->Session->setFlash(__('The resource man has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resource man could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ResourceMan.' . $this->ResourceMan->primaryKey => $id));
			$this->request->data = $this->ResourceMan->find('first', $options);
		}
		$depts = $this->ResourceMan->Dept->find('list');
		$employees = $this->ResourceMan->Employee->find('list');
		$this->set(compact('depts', 'employees'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ResourceMan->id = $id;
		if (!$this->ResourceMan->exists()) {
			throw new NotFoundException(__('Invalid resource man'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ResourceMan->delete()) {
			$this->Session->setFlash(__('Resource man deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Resource man was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
