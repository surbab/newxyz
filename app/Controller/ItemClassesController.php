<?php
App::uses('AppController', 'Controller');
/**
 * ItemClasses Controller
 *
 * @property ItemClass $ItemClass
 */
class ItemClassesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ItemClass->recursive = 0;
		$this->set('itemClasses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemClass->exists($id)) {
			throw new NotFoundException(__('Invalid item class'));
		}
		$options = array('conditions' => array('ItemClass.' . $this->ItemClass->primaryKey => $id));
		$this->set('itemClass', $this->ItemClass->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemClass->create();
			if ($this->ItemClass->save($this->request->data)) {
				$this->Session->setFlash(__('The item class has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item class could not be saved. Please, try again.'));
			}
		}
		$itemCats = $this->ItemClass->ItemCat->find('list');
		$this->set(compact('itemCats'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemClass->exists($id)) {
			throw new NotFoundException(__('Invalid item class'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ItemClass->save($this->request->data)) {
				$this->Session->setFlash(__('The item class has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item class could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemClass.' . $this->ItemClass->primaryKey => $id));
			$this->request->data = $this->ItemClass->find('first', $options);
		}
		$itemCats = $this->ItemClass->ItemCat->find('list');
		$this->set(compact('itemCats'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItemClass->id = $id;
		if (!$this->ItemClass->exists()) {
			throw new NotFoundException(__('Invalid item class'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemClass->delete()) {
			$this->Session->setFlash(__('Item class deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Item class was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
