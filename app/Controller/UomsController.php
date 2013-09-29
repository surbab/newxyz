<?php
App::uses('AppController', 'Controller');
/**
 * Uoms Controller
 *
 * @property Uom $Uom
 */
class UomsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Uom->recursive = 0;
		$this->set('uoms', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Uom->exists($id)) {
			throw new NotFoundException(__('Invalid uom'));
		}
		$options = array('conditions' => array('Uom.' . $this->Uom->primaryKey => $id));
		$this->set('uom', $this->Uom->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Uom->create();
			if ($this->Uom->save($this->request->data)) {
				$this->Session->setFlash(__('The uom has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uom could not be saved. Please, try again.'));
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
		if (!$this->Uom->exists($id)) {
			throw new NotFoundException(__('Invalid uom'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Uom->save($this->request->data)) {
				$this->Session->setFlash(__('The uom has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uom could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Uom.' . $this->Uom->primaryKey => $id));
			$this->request->data = $this->Uom->find('first', $options);
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
		$this->Uom->id = $id;
		if (!$this->Uom->exists()) {
			throw new NotFoundException(__('Invalid uom'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Uom->delete()) {
			$this->Session->setFlash(__('Uom deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Uom was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
