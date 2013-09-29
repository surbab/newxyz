<?php
App::uses('AppController', 'Controller');
/**
 * MouldRewReasons Controller
 *
 * @property MouldRewReason $MouldRewReason
 */
class MouldRewReasonsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MouldRewReason->recursive = 0;
		$this->set('mouldRewReasons', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MouldRewReason->exists($id)) {
			throw new NotFoundException(__('Invalid mould rew reason'));
		}
		$options = array('conditions' => array('MouldRewReason.' . $this->MouldRewReason->primaryKey => $id));
		$this->set('mouldRewReason', $this->MouldRewReason->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MouldRewReason->create();
			if ($this->MouldRewReason->save($this->request->data)) {
				$this->Session->setFlash(__('The mould rew reason has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mould rew reason could not be saved. Please, try again.'));
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
		if (!$this->MouldRewReason->exists($id)) {
			throw new NotFoundException(__('Invalid mould rew reason'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MouldRewReason->save($this->request->data)) {
				$this->Session->setFlash(__('The mould rew reason has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mould rew reason could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MouldRewReason.' . $this->MouldRewReason->primaryKey => $id));
			$this->request->data = $this->MouldRewReason->find('first', $options);
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
		$this->MouldRewReason->id = $id;
		if (!$this->MouldRewReason->exists()) {
			throw new NotFoundException(__('Invalid mould rew reason'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MouldRewReason->delete()) {
			$this->Session->setFlash(__('Mould rew reason deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mould rew reason was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
