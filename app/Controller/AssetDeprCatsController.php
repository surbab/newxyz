<?php
App::uses('AppController', 'Controller');
/**
 * AssetDeprCats Controller
 *
 * @property AssetDeprCat $AssetDeprCat
 */
class AssetDeprCatsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AssetDeprCat->recursive = 0;
		$this->set('assetDeprCats', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AssetDeprCat->exists($id)) {
			throw new NotFoundException(__('Invalid asset depr cat'));
		}
		$options = array('conditions' => array('AssetDeprCat.' . $this->AssetDeprCat->primaryKey => $id));
		$this->set('assetDeprCat', $this->AssetDeprCat->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AssetDeprCat->create();
			if ($this->AssetDeprCat->save($this->request->data)) {
				$this->Session->setFlash(__('The asset depr cat has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asset depr cat could not be saved. Please, try again.'));
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
		if (!$this->AssetDeprCat->exists($id)) {
			throw new NotFoundException(__('Invalid asset depr cat'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AssetDeprCat->save($this->request->data)) {
				$this->Session->setFlash(__('The asset depr cat has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asset depr cat could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AssetDeprCat.' . $this->AssetDeprCat->primaryKey => $id));
			$this->request->data = $this->AssetDeprCat->find('first', $options);
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
		$this->AssetDeprCat->id = $id;
		if (!$this->AssetDeprCat->exists()) {
			throw new NotFoundException(__('Invalid asset depr cat'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AssetDeprCat->delete()) {
			$this->Session->setFlash(__('Asset depr cat deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Asset depr cat was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
