<?php
App::uses('AppController', 'Controller');
/**
 * ItemCodes Controller
 *
 * @property ItemCode $ItemCode
 */
class ItemCodesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ItemCode->recursive = 0;
		$this->set('itemCodes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemCode->exists($id)) {
			throw new NotFoundException(__('Invalid item code'));
		}
		$options = array('conditions' => array('ItemCode.' . $this->ItemCode->primaryKey => $id));
		$this->set('itemCode', $this->ItemCode->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemCode->create();
			if ($this->ItemCode->save($this->request->data)) {
				$this->Session->setFlash(__('The item code has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item code could not be saved. Please, try again.'));
			}
		}
		$itemClasses = $this->ItemCode->ItemClass->find('list');
		$this->set(compact('itemClasses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemCode->exists($id)) {
			throw new NotFoundException(__('Invalid item code'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ItemCode->save($this->request->data)) {
				$this->Session->setFlash(__('The item code has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item code could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemCode.' . $this->ItemCode->primaryKey => $id));
			$this->request->data = $this->ItemCode->find('first', $options);
		}
		$itemClasses = $this->ItemCode->ItemClass->find('list');
		$this->set(compact('itemClasses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItemCode->id = $id;
		if (!$this->ItemCode->exists()) {
			throw new NotFoundException(__('Invalid item code'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemCode->delete()) {
			$this->Session->setFlash(__('Item code deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Item code was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
