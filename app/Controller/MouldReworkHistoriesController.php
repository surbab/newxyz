<?php
App::uses('AppController', 'Controller');
/**
 * MouldReworkHistories Controller
 *
 * @property MouldReworkHistory $MouldReworkHistory
 */
class MouldReworkHistoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MouldReworkHistory->recursive = 0;
		$this->set('mouldReworkHistories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MouldReworkHistory->exists($id)) {
			throw new NotFoundException(__('Invalid mould rework history'));
		}
		$options = array('conditions' => array('MouldReworkHistory.' . $this->MouldReworkHistory->primaryKey => $id));
		$this->set('mouldReworkHistory', $this->MouldReworkHistory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MouldReworkHistory->create();
			if ($this->MouldReworkHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The mould rework history has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mould rework history could not be saved. Please, try again.'));
			}
		}
		$locations = $this->MouldReworkHistory->Location->find('list');
		$mouldDets = $this->MouldReworkHistory->MouldDet->find('list');
		$mouldRewReasons = $this->MouldReworkHistory->MouldRewReason->find('list');
		$delChalans = $this->MouldReworkHistory->DelChalan->find('list');
		$partners = $this->MouldReworkHistory->Partner->find('list');
		$purInvEntries = $this->MouldReworkHistory->PurInvEntry->find('list');
		$this->set(compact('locations', 'mouldDets', 'mouldRewReasons', 'delChalans', 'partners', 'purInvEntries'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MouldReworkHistory->exists($id)) {
			throw new NotFoundException(__('Invalid mould rework history'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MouldReworkHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The mould rework history has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mould rework history could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MouldReworkHistory.' . $this->MouldReworkHistory->primaryKey => $id));
			$this->request->data = $this->MouldReworkHistory->find('first', $options);
		}
		$locations = $this->MouldReworkHistory->Location->find('list');
		$mouldDets = $this->MouldReworkHistory->MouldDet->find('list');
		$mouldRewReasons = $this->MouldReworkHistory->MouldRewReason->find('list');
		$delChalans = $this->MouldReworkHistory->DelChalan->find('list');
		$partners = $this->MouldReworkHistory->Partner->find('list');
		$purInvEntries = $this->MouldReworkHistory->PurInvEntry->find('list');
		$this->set(compact('locations', 'mouldDets', 'mouldRewReasons', 'delChalans', 'partners', 'purInvEntries'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MouldReworkHistory->id = $id;
		if (!$this->MouldReworkHistory->exists()) {
			throw new NotFoundException(__('Invalid mould rework history'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MouldReworkHistory->delete()) {
			$this->Session->setFlash(__('Mould rework history deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mould rework history was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
