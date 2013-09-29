<?php
App::uses('AppController', 'Controller');
/**
 * EngBomDets Controller
 *
 * @property EngBomDet $EngBomDet
 */
class EngBomDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EngBomDet->recursive = 0;
		$this->set('engBomDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EngBomDet->exists($id)) {
			throw new NotFoundException(__('Invalid eng bom det'));
		}
		$options = array('conditions' => array('EngBomDet.' . $this->EngBomDet->primaryKey => $id));
		$this->set('engBomDet', $this->EngBomDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EngBomDet->create();
			if ($this->EngBomDet->save($this->request->data)) {
				$this->Session->setFlash(__('The eng bom det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eng bom det could not be saved. Please, try again.'));
			}
		}
		$engBoms = $this->EngBomDet->EngBom->find('list');
		$itemCodes = $this->EngBomDet->ItemCode->find('list');
		$this->set(compact('engBoms', 'itemCodes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EngBomDet->exists($id)) {
			throw new NotFoundException(__('Invalid eng bom det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EngBomDet->save($this->request->data)) {
				$this->Session->setFlash(__('The eng bom det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eng bom det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EngBomDet.' . $this->EngBomDet->primaryKey => $id));
			$this->request->data = $this->EngBomDet->find('first', $options);
		}
		$engBoms = $this->EngBomDet->EngBom->find('list');
		$itemCodes = $this->EngBomDet->ItemCode->find('list');
		$this->set(compact('engBoms', 'itemCodes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EngBomDet->id = $id;
		if (!$this->EngBomDet->exists()) {
			throw new NotFoundException(__('Invalid eng bom det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EngBomDet->delete()) {
			$this->Session->setFlash(__('Eng bom det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Eng bom det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
