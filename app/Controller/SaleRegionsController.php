<?php
App::uses('AppController', 'Controller');
/**
 * SaleRegions Controller
 *
 * @property SaleRegion $SaleRegion
 */
class SaleRegionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SaleRegion->recursive = 0;
		$this->set('saleRegions', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SaleRegion->exists($id)) {
			throw new NotFoundException(__('Invalid sale region'));
		}
		$options = array('conditions' => array('SaleRegion.' . $this->SaleRegion->primaryKey => $id));
		$this->set('saleRegion', $this->SaleRegion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SaleRegion->create();
			if ($this->SaleRegion->save($this->request->data)) {
				$this->Session->setFlash(__('The sale region has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale region could not be saved. Please, try again.'));
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
		if (!$this->SaleRegion->exists($id)) {
			throw new NotFoundException(__('Invalid sale region'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SaleRegion->save($this->request->data)) {
				$this->Session->setFlash(__('The sale region has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale region could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SaleRegion.' . $this->SaleRegion->primaryKey => $id));
			$this->request->data = $this->SaleRegion->find('first', $options);
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
		$this->SaleRegion->id = $id;
		if (!$this->SaleRegion->exists()) {
			throw new NotFoundException(__('Invalid sale region'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SaleRegion->delete()) {
			$this->Session->setFlash(__('Sale region deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sale region was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
