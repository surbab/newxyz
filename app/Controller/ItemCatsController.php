<?php
App::uses('AppController', 'Controller');
/**
 * ItemCats Controller
 *
 * @property ItemCat $ItemCat
 */
class ItemCatsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ItemCat->recursive = 0;
		$this->set('itemCats', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemCat->exists($id)) {
			throw new NotFoundException(__('Invalid item cat'));
		}
		$options = array('conditions' => array('ItemCat.' . $this->ItemCat->primaryKey => $id));
		$this->set('itemCat', $this->ItemCat->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemCat->create();
			if ($this->ItemCat->save($this->request->data)) {
				$this->Session->setFlash(__('The item cat has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item cat could not be saved. Please, try again.'));
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
		if (!$this->ItemCat->exists($id)) {
			throw new NotFoundException(__('Invalid item cat'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ItemCat->save($this->request->data)) {
				$this->Session->setFlash(__('The item cat has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item cat could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemCat.' . $this->ItemCat->primaryKey => $id));
			$this->request->data = $this->ItemCat->find('first', $options);
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
		$this->ItemCat->id = $id;
		if (!$this->ItemCat->exists()) {
			throw new NotFoundException(__('Invalid item cat'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemCat->delete()) {
			$this->Session->setFlash(__('Item cat deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Item cat was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
