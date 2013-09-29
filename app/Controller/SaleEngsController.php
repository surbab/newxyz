<?php
App::uses('AppController', 'Controller');
/**
 * SaleEngs Controller
 *
 * @property SaleEng $SaleEng
 */
class SaleEngsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SaleEng->recursive = 0;
		$this->set('saleEngs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SaleEng->exists($id)) {
			throw new NotFoundException(__('Invalid sale eng'));
		}
		$options = array('conditions' => array('SaleEng.' . $this->SaleEng->primaryKey => $id));
		$this->set('saleEng', $this->SaleEng->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SaleEng->create();
			if ($this->SaleEng->save($this->request->data)) {
				$this->Session->setFlash(__('The sale eng has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale eng could not be saved. Please, try again.'));
			}
		}
		$employees = $this->SaleEng->Employee->find('list');
		$saleRegions = $this->SaleEng->SaleRegion->find('list');
		$this->set(compact('employees', 'saleRegions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SaleEng->exists($id)) {
			throw new NotFoundException(__('Invalid sale eng'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SaleEng->save($this->request->data)) {
				$this->Session->setFlash(__('The sale eng has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sale eng could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SaleEng.' . $this->SaleEng->primaryKey => $id));
			$this->request->data = $this->SaleEng->find('first', $options);
		}
		$employees = $this->SaleEng->Employee->find('list');
		$saleRegions = $this->SaleEng->SaleRegion->find('list');
		$this->set(compact('employees', 'saleRegions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SaleEng->id = $id;
		if (!$this->SaleEng->exists()) {
			throw new NotFoundException(__('Invalid sale eng'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SaleEng->delete()) {
			$this->Session->setFlash(__('Sale eng deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sale eng was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
