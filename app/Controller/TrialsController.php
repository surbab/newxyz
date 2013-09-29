<?php
App::uses('AppController', 'Controller');
/**
 * Trials Controller
 *
 * @property Trial $Trial
 */
class TrialsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Trial->recursive = 0;
		$this->set('trials', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Trial->exists($id)) {
			throw new NotFoundException(__('Invalid trial'));
		}
		$options = array('conditions' => array('Trial.' . $this->Trial->primaryKey => $id));
		$this->set('trial', $this->Trial->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Trial->create();
			if ($this->Trial->save($this->request->data)) {
				$this->Session->setFlash(__('The trial has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trial could not be saved. Please, try again.'));
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
		if (!$this->Trial->exists($id)) {
			throw new NotFoundException(__('Invalid trial'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Trial->save($this->request->data)) {
				$this->Session->setFlash(__('The trial has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The trial could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Trial.' . $this->Trial->primaryKey => $id));
			$this->request->data = $this->Trial->find('first', $options);
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
		$this->Trial->id = $id;
		if (!$this->Trial->exists()) {
			throw new NotFoundException(__('Invalid trial'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Trial->delete()) {
			$this->Session->setFlash(__('Trial deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Trial was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
