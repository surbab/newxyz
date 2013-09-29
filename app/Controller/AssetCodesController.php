<?php
App::uses('AppController', 'Controller');
/**
 * AssetCodes Controller
 *
 * @property AssetCode $AssetCode
 */
class AssetCodesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AssetCode->recursive = 0;
		$this->set('assetCodes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AssetCode->exists($id)) {
			throw new NotFoundException(__('Invalid asset code'));
		}
		$options = array('conditions' => array('AssetCode.' . $this->AssetCode->primaryKey => $id));
		$this->set('assetCode', $this->AssetCode->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AssetCode->create();
			if ($this->AssetCode->save($this->request->data)) {
				$this->Session->setFlash(__('The asset code has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asset code could not be saved. Please, try again.'));
			}
		}
		$locations = $this->AssetCode->Location->find('list');
		$assetCats = $this->AssetCode->AssetCat->find('list');
		$assetDeprs = $this->AssetCode->AssetDepr->find('list');
		$partners = $this->AssetCode->Partner->find('list');
		$grns = $this->AssetCode->Grn->find('list');
		$assetLocations = $this->AssetCode->AssetLocation->find('list');
		$this->set(compact('locations', 'assetCats', 'assetDeprs', 'partners', 'grns', 'assetLocations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AssetCode->exists($id)) {
			throw new NotFoundException(__('Invalid asset code'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AssetCode->save($this->request->data)) {
				$this->Session->setFlash(__('The asset code has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asset code could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AssetCode.' . $this->AssetCode->primaryKey => $id));
			$this->request->data = $this->AssetCode->find('first', $options);
		}
		$locations = $this->AssetCode->Location->find('list');
		$assetCats = $this->AssetCode->AssetCat->find('list');
		$assetDeprs = $this->AssetCode->AssetDepr->find('list');
		$partners = $this->AssetCode->Partner->find('list');
		$grns = $this->AssetCode->Grn->find('list');
		$assetLocations = $this->AssetCode->AssetLocation->find('list');
		$this->set(compact('locations', 'assetCats', 'assetDeprs', 'partners', 'grns', 'assetLocations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AssetCode->id = $id;
		if (!$this->AssetCode->exists()) {
			throw new NotFoundException(__('Invalid asset code'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AssetCode->delete()) {
			$this->Session->setFlash(__('Asset code deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Asset code was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
