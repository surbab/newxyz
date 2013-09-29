<?php
App::uses('AppController', 'Controller');
/**
 * AssetDeprs Controller
 *
 * @property AssetDepr $AssetDepr
 */
class AssetDeprsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AssetDepr->recursive = 0;
		$this->set('assetDeprs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AssetDepr->exists($id)) {
			throw new NotFoundException(__('Invalid asset depr'));
		}
		$options = array('conditions' => array('AssetDepr.' . $this->AssetDepr->primaryKey => $id));
		$this->set('assetDepr', $this->AssetDepr->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AssetDepr->create();
			if ($this->AssetDepr->save($this->request->data)) {
				$this->Session->setFlash(__('The asset depr has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asset depr could not be saved. Please, try again.'));
			}
		}
		$assetDeprCats = $this->AssetDepr->AssetDeprCat->find('list');
		$this->set(compact('assetDeprCats'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AssetDepr->exists($id)) {
			throw new NotFoundException(__('Invalid asset depr'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AssetDepr->save($this->request->data)) {
				$this->Session->setFlash(__('The asset depr has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asset depr could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AssetDepr.' . $this->AssetDepr->primaryKey => $id));
			$this->request->data = $this->AssetDepr->find('first', $options);
		}
		$assetDeprCats = $this->AssetDepr->AssetDeprCat->find('list');
		$this->set(compact('assetDeprCats'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AssetDepr->id = $id;
		if (!$this->AssetDepr->exists()) {
			throw new NotFoundException(__('Invalid asset depr'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AssetDepr->delete()) {
			$this->Session->setFlash(__('Asset depr deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Asset depr was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
