<?php
App::uses('AppController', 'Controller');
/**
 * DelChalanDets Controller
 *
 * @property DelChalanDet $DelChalanDet
 */
class DelChalanDetsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DelChalanDet->recursive = 0;
		$this->set('delChalanDets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DelChalanDet->exists($id)) {
			throw new NotFoundException(__('Invalid del chalan det'));
		}
		$options = array('conditions' => array('DelChalanDet.' . $this->DelChalanDet->primaryKey => $id));
		$this->set('delChalanDet', $this->DelChalanDet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DelChalanDet->create();
			if ($this->DelChalanDet->save($this->request->data)) {
				$this->Session->setFlash(__('The del chalan det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The del chalan det could not be saved. Please, try again.'));
			}
		}
		$delChalans = $this->DelChalanDet->DelChalan->find('list');
		$itemCodes = $this->DelChalanDet->ItemCode->find('list');
		$taxCombs = $this->DelChalanDet->TaxComb->find('list');
		$this->set(compact('delChalans', 'itemCodes', 'taxCombs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DelChalanDet->exists($id)) {
			throw new NotFoundException(__('Invalid del chalan det'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DelChalanDet->save($this->request->data)) {
				$this->Session->setFlash(__('The del chalan det has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The del chalan det could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DelChalanDet.' . $this->DelChalanDet->primaryKey => $id));
			$this->request->data = $this->DelChalanDet->find('first', $options);
		}
		$delChalans = $this->DelChalanDet->DelChalan->find('list');
		$itemCodes = $this->DelChalanDet->ItemCode->find('list');
		$taxCombs = $this->DelChalanDet->TaxComb->find('list');
		$this->set(compact('delChalans', 'itemCodes', 'taxCombs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DelChalanDet->id = $id;
		if (!$this->DelChalanDet->exists()) {
			throw new NotFoundException(__('Invalid del chalan det'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DelChalanDet->delete()) {
			$this->Session->setFlash(__('Del chalan det deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Del chalan det was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
