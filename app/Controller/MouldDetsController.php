<?php
App::uses('AppController', 'Controller');
/**
 * MouldDets Controller
 *
 * @property MouldDet $MouldDet
 */
class MouldDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MouldDet->recursive = 0;
		$this->set('mouldDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MouldDet->exists($id)) {
			throw new NotFoundException(__('Invalid mould det'));
		}
		$options = array('conditions' => array('MouldDet.' . $this->MouldDet->primaryKey => $id));
		$this->set('mouldDet', $this->MouldDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MouldDet->create();
			if ($this->MouldDet->save($this->request->data)) {
				$this->Session->setFlash(__('The mould det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mould det could not be saved. Please, try again.'));
			}
		}
		$assetCodes = $this->MouldDet->AssetCode->find('list');
		$partners = $this->MouldDet->Partner->find('list');
		$suppliers = $this->MouldDet->Supplier->find('list');
		$this->set(compact('assetCodes', 'partners', 'suppliers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MouldDet->exists($id)) {
			throw new NotFoundException(__('Invalid mould det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MouldDet->save($this->request->data)) {
				$this->Session->setFlash(__('The mould det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mould det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MouldDet.' . $this->MouldDet->primaryKey => $id));
			$this->request->data = $this->MouldDet->find('first', $options);
		}
		$assetCodes = $this->MouldDet->AssetCode->find('list');
		$partners = $this->MouldDet->Partner->find('list');
		$suppliers = $this->MouldDet->Supplier->find('list');
		$this->set(compact('assetCodes', 'partners', 'suppliers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MouldDet->id = $id;
		if (!$this->MouldDet->exists()) {
			throw new NotFoundException(__('Invalid mould det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MouldDet->delete()) {
			$this->Session->setFlash(__('Mould det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mould det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
