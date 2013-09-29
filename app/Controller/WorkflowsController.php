<?php
App::uses('AppController', 'Controller');
/**
 * Workflows Controller
 *
 * @property Workflow $Workflow
 */
class WorkflowsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Workflow->recursive = 0;
		$this->set('workflows', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Workflow->exists($id)) {
			throw new NotFoundException(__('Invalid workflow'));
		}
		$options = array('conditions' => array('Workflow.' . $this->Workflow->primaryKey => $id));
		$this->set('workflow', $this->Workflow->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Workflow->create();
			if ($this->Workflow->save($this->request->data)) {
				$this->Session->setFlash(__('The workflow has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The workflow could not be saved. Please, try again.'));
			}
		}
		$locations = $this->Workflow->Location->find('list');
		$this->set(compact('locations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Workflow->exists($id)) {
			throw new NotFoundException(__('Invalid workflow'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Workflow->save($this->request->data)) {
				$this->Session->setFlash(__('The workflow has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The workflow could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Workflow.' . $this->Workflow->primaryKey => $id));
			$this->request->data = $this->Workflow->find('first', $options);
		}
		$locations = $this->Workflow->Location->find('list');
		$this->set(compact('locations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Workflow->id = $id;
		if (!$this->Workflow->exists()) {
			throw new NotFoundException(__('Invalid workflow'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Workflow->delete()) {
			$this->Session->setFlash(__('Workflow deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Workflow was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
