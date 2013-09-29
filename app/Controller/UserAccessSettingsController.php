<?php
App::uses('AppController', 'Controller');
/**
 * UserAccessSettings Controller
 *
 * @property UserAccessSetting $UserAccessSetting
 */
class UserAccessSettingsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserAccessSetting->recursive = 0;
		$this->set('userAccessSettings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserAccessSetting->exists($id)) {
			throw new NotFoundException(__('Invalid user access setting'));
		}
		$options = array('conditions' => array('UserAccessSetting.' . $this->UserAccessSetting->primaryKey => $id));
		$this->set('userAccessSetting', $this->UserAccessSetting->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserAccessSetting->create();
			if ($this->UserAccessSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The user access setting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user access setting could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserAccessSetting->User->find('list');
		$controls = $this->UserAccessSetting->Control->find('list');
		$this->set(compact('users', 'controls'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserAccessSetting->exists($id)) {
			throw new NotFoundException(__('Invalid user access setting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UserAccessSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The user access setting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user access setting could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserAccessSetting.' . $this->UserAccessSetting->primaryKey => $id));
			$this->request->data = $this->UserAccessSetting->find('first', $options);
		}
		$users = $this->UserAccessSetting->User->find('list');
		$controls = $this->UserAccessSetting->Control->find('list');
		$this->set(compact('users', 'controls'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserAccessSetting->id = $id;
		if (!$this->UserAccessSetting->exists()) {
			throw new NotFoundException(__('Invalid user access setting'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UserAccessSetting->delete()) {
			$this->Session->setFlash(__('User access setting deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User access setting was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
