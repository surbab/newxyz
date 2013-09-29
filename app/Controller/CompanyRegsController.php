<?php
App::uses('AppController', 'Controller');
/**
 * CompanyRegs Controller
 *
 * @property CompanyReg $CompanyReg
 */
class CompanyRegsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CompanyReg->recursive = 0;
		$this->set('companyRegs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompanyReg->exists($id)) {
			throw new NotFoundException(__('Invalid company reg'));
		}
		$options = array('conditions' => array('CompanyReg.' . $this->CompanyReg->primaryKey => $id));
		$this->set('companyReg', $this->CompanyReg->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompanyReg->create();
			if ($this->CompanyReg->save($this->request->data)) {
				$this->Session->setFlash(__('The company reg has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company reg could not be saved. Please, try again.'));
			}
		}
		$states = $this->CompanyReg->State->find('list');
		$countries = $this->CompanyReg->Country->find('list');
		$this->set(compact('states', 'countries'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CompanyReg->exists($id)) {
			throw new NotFoundException(__('Invalid company reg'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CompanyReg->save($this->request->data)) {
				$this->Session->setFlash(__('The company reg has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company reg could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyReg.' . $this->CompanyReg->primaryKey => $id));
			$this->request->data = $this->CompanyReg->find('first', $options);
		}
		$states = $this->CompanyReg->State->find('list');
		$countries = $this->CompanyReg->Country->find('list');
		$this->set(compact('states', 'countries'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CompanyReg->id = $id;
		if (!$this->CompanyReg->exists()) {
			throw new NotFoundException(__('Invalid company reg'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CompanyReg->delete()) {
			$this->Session->setFlash(__('Company reg deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Company reg was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
