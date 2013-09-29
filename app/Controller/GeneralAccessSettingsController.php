<?php
App::uses('AppController', 'Controller');
/**
 * GeneralAccessSettings Controller
 *
 * @property GeneralAccessSetting $GeneralAccessSetting
 */
class GeneralAccessSettingsController extends AppController {

      var  $uses = array('UserGroup', 'Control');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GeneralAccessSetting->recursive = 0;
		$this->set('generalAccessSettings', $this->paginate());
	}

     	public function populate() {
 //$this->loadModel(’Article’);
//$recentArticles = $this->Article->find(’all’, array(’limit’ => 5, ’order’ => ’Article.$this->loadModel(’User’, 2);
//$user = $this->User->read();
        $groups = $this->UserGroup->find('list');
        $control = $this->Control->find('list');
         $this->set('groups',$groups);
          $this->set('controls',$control);
       pr($groups);
        $this->GeneralAccessSetting->recursive = 0;
		$this->set('generalAccessSettings', $this->paginate());
        $this->loadModel('Control');


	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GeneralAccessSetting->exists($id)) {
			throw new NotFoundException(__('Invalid general access setting'));
		}
		$options = array('conditions' => array('GeneralAccessSetting.' . $this->GeneralAccessSetting->primaryKey => $id));
		$this->set('generalAccessSetting', $this->GeneralAccessSetting->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GeneralAccessSetting->create();
			if ($this->GeneralAccessSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The general access setting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The general access setting could not be saved. Please, try again.'));
			}
		}
		$userGroups = $this->GeneralAccessSetting->UserGroup->find('list');
		$controls = $this->GeneralAccessSetting->Control->find('list');
		$this->set(compact('userGroups', 'controls'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GeneralAccessSetting->exists($id)) {
			throw new NotFoundException(__('Invalid general access setting'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GeneralAccessSetting->save($this->request->data)) {
				$this->Session->setFlash(__('The general access setting has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The general access setting could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GeneralAccessSetting.' . $this->GeneralAccessSetting->primaryKey => $id));
			$this->request->data = $this->GeneralAccessSetting->find('first', $options);
		}
		$userGroups = $this->GeneralAccessSetting->UserGroup->find('list');
		$controls = $this->GeneralAccessSetting->Control->find('list');
		$this->set(compact('userGroups', 'controls'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->GeneralAccessSetting->id = $id;
		if (!$this->GeneralAccessSetting->exists()) {
			throw new NotFoundException(__('Invalid general access setting'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GeneralAccessSetting->delete()) {
			$this->Session->setFlash(__('General access setting deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('General access setting was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
