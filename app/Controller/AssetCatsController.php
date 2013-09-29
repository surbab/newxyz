<?php
App::uses('AppController', 'Controller');
/**
 * AssetCats Controller
 *
 * @property AssetCat $AssetCat
 */
class AssetCatsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AssetCat->recursive = 0;
		$this->set('assetCats', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AssetCat->exists($id)) {
			throw new NotFoundException(__('Invalid asset cat'));
		}
		$options = array('conditions' => array('AssetCat.' . $this->AssetCat->primaryKey => $id));
		$this->set('assetCat', $this->AssetCat->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AssetCat->create();
			if ($this->AssetCat->save($this->request->data)) {
				$this->Session->setFlash(__('The asset cat has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asset cat could not be saved. Please, try again.'));
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
		if (!$this->AssetCat->exists($id)) {
			throw new NotFoundException(__('Invalid asset cat'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AssetCat->save($this->request->data)) {
				$this->Session->setFlash(__('The asset cat has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asset cat could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AssetCat.' . $this->AssetCat->primaryKey => $id));
			$this->request->data = $this->AssetCat->find('first', $options);
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
		$this->AssetCat->id = $id;
		if (!$this->AssetCat->exists()) {
			throw new NotFoundException(__('Invalid asset cat'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AssetCat->delete()) {
			$this->Session->setFlash(__('Asset cat deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Asset cat was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
