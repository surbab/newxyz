<?php
App::uses('AppController', 'Controller');
/**
 * Partners Controller
 *
 * @property Partner $Partner
 */
class PartnersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Partner->recursive = 0;
		$this->set('partners', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Partner->exists($id)) {
			throw new NotFoundException(__('Invalid partner'));
		}
		$options = array('conditions' => array('Partner.' . $this->Partner->primaryKey => $id));
		$this->set('partner', $this->Partner->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Partner->create();
			pr($this->request->data);
	//		die();
			if ($this->Partner->save($this->request->data)) {
				$this->Session->setFlash(__('The partner has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partner could not be saved. Please, try again.'));
			}
		}
		$states = $this->Partner->State->find('list');
		$countries = $this->Partner->Country->find('list');
		$approvalRegisters = $this->Partner->ApprovalRegister->find('list');
		$this->set(compact('states', 'countries', 'approvalRegisters'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Partner->exists($id)) {
			throw new NotFoundException(__('Invalid partner'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Partner->save($this->request->data)) {
				$this->Session->setFlash(__('The partner has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partner could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Partner.' . $this->Partner->primaryKey => $id));
			$this->request->data = $this->Partner->find('first', $options);
		}
		$states = $this->Partner->State->find('list');
		$countries = $this->Partner->Country->find('list');
		$approvalRegisters = $this->Partner->ApprovalRegister->find('list');
		$this->set(compact('states', 'countries', 'approvalRegisters'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Partner->id = $id;
		if (!$this->Partner->exists()) {
			throw new NotFoundException(__('Invalid partner'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Partner->delete()) {
			$this->Session->setFlash(__('Partner deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Partner was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
