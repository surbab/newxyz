<?php
App::uses('AppController', 'Controller');
/**
 * ResourceWcs Controller
 *
 * @property ResourceWc $ResourceWc
 */
class ResourceWcsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ResourceWc->recursive = 0;
		$this->set('resourceWcs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ResourceWc->exists($id)) {
			throw new NotFoundException(__('Invalid resource wc'));
		}
		$options = array('conditions' => array('ResourceWc.' . $this->ResourceWc->primaryKey => $id));
		$this->set('resourceWc', $this->ResourceWc->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ResourceWc->create();
			if ($this->ResourceWc->save($this->request->data)) {
				$this->Session->setFlash(__('The resource wc has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resource wc could not be saved. Please, try again.'));
			}
		}
		$depts = $this->ResourceWc->Dept->find('list');
		$assetCodes = $this->ResourceWc->AssetCode->find('list');
		$this->set(compact('depts', 'assetCodes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ResourceWc->exists($id)) {
			throw new NotFoundException(__('Invalid resource wc'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ResourceWc->save($this->request->data)) {
				$this->Session->setFlash(__('The resource wc has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The resource wc could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ResourceWc.' . $this->ResourceWc->primaryKey => $id));
			$this->request->data = $this->ResourceWc->find('first', $options);
		}
		$depts = $this->ResourceWc->Dept->find('list');
		$assetCodes = $this->ResourceWc->AssetCode->find('list');
		$this->set(compact('depts', 'assetCodes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ResourceWc->id = $id;
		if (!$this->ResourceWc->exists()) {
			throw new NotFoundException(__('Invalid resource wc'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ResourceWc->delete()) {
			$this->Session->setFlash(__('Resource wc deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Resource wc was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
