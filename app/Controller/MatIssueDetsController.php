<?php
App::uses('AppController', 'Controller');
/**
 * MatIssueDets Controller
 *
 * @property MatIssueDet $MatIssueDet
 */
class MatIssueDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MatIssueDet->recursive = 0;
		$this->set('matIssueDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MatIssueDet->exists($id)) {
			throw new NotFoundException(__('Invalid mat issue det'));
		}
		$options = array('conditions' => array('MatIssueDet.' . $this->MatIssueDet->primaryKey => $id));
		$this->set('matIssueDet', $this->MatIssueDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MatIssueDet->create();
			if ($this->MatIssueDet->save($this->request->data)) {
				$this->Session->setFlash(__('The mat issue det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mat issue det could not be saved. Please, try again.'));
			}
		}
		$matIssues = $this->MatIssueDet->MatIssue->find('list');
		$itemCodes = $this->MatIssueDet->ItemCode->find('list');
		$this->set(compact('matIssues', 'itemCodes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MatIssueDet->exists($id)) {
			throw new NotFoundException(__('Invalid mat issue det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MatIssueDet->save($this->request->data)) {
				$this->Session->setFlash(__('The mat issue det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mat issue det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MatIssueDet.' . $this->MatIssueDet->primaryKey => $id));
			$this->request->data = $this->MatIssueDet->find('first', $options);
		}
		$matIssues = $this->MatIssueDet->MatIssue->find('list');
		$itemCodes = $this->MatIssueDet->ItemCode->find('list');
		$this->set(compact('matIssues', 'itemCodes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MatIssueDet->id = $id;
		if (!$this->MatIssueDet->exists()) {
			throw new NotFoundException(__('Invalid mat issue det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MatIssueDet->delete()) {
			$this->Session->setFlash(__('Mat issue det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mat issue det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
