<?php
App::uses('AppController', 'Controller');
/**
 * JournalDets Controller
 *
 * @property JournalDet $JournalDet
 */
class JournalDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->JournalDet->recursive = 0;
		$this->set('journalDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->JournalDet->exists($id)) {
			throw new NotFoundException(__('Invalid journal det'));
		}
		$options = array('conditions' => array('JournalDet.' . $this->JournalDet->primaryKey => $id));
		$this->set('journalDet', $this->JournalDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JournalDet->create();
			if ($this->JournalDet->save($this->request->data)) {
				$this->Session->setFlash(__('The journal det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journal det could not be saved. Please, try again.'));
			}
		}
		$journals = $this->JournalDet->Journal->find('list');
		$this->set(compact('journals'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->JournalDet->exists($id)) {
			throw new NotFoundException(__('Invalid journal det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->JournalDet->save($this->request->data)) {
				$this->Session->setFlash(__('The journal det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The journal det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JournalDet.' . $this->JournalDet->primaryKey => $id));
			$this->request->data = $this->JournalDet->find('first', $options);
		}
		$journals = $this->JournalDet->Journal->find('list');
		$this->set(compact('journals'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->JournalDet->id = $id;
		if (!$this->JournalDet->exists()) {
			throw new NotFoundException(__('Invalid journal det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->JournalDet->delete()) {
			$this->Session->setFlash(__('Journal det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Journal det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
