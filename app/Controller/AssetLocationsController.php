<?php
App::uses('AppController', 'Controller');
/**
 * AssetLocations Controller
 *
 * @property AssetLocation $AssetLocation
 */
class AssetLocationsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AssetLocation->recursive = 0;
		$this->set('assetLocations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AssetLocation->exists($id)) {
			throw new NotFoundException(__('Invalid asset location'));
		}
		$options = array('conditions' => array('AssetLocation.' . $this->AssetLocation->primaryKey => $id));
		$this->set('assetLocation', $this->AssetLocation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AssetLocation->create();
			if ($this->AssetLocation->save($this->request->data)) {
				$this->Session->setFlash(__('The asset location has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asset location could not be saved. Please, try again.'));
			}
		}
		$locations = $this->AssetLocation->Location->find('list');
		$this->set(compact('locations'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AssetLocation->exists($id)) {
			throw new NotFoundException(__('Invalid asset location'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AssetLocation->save($this->request->data)) {
				$this->Session->setFlash(__('The asset location has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The asset location could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AssetLocation.' . $this->AssetLocation->primaryKey => $id));
			$this->request->data = $this->AssetLocation->find('first', $options);
		}
		$locations = $this->AssetLocation->Location->find('list');
		$this->set(compact('locations'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AssetLocation->id = $id;
		if (!$this->AssetLocation->exists()) {
			throw new NotFoundException(__('Invalid asset location'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AssetLocation->delete()) {
			$this->Session->setFlash(__('Asset location deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Asset location was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
