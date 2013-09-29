<?php
App::uses('AppController', 'Controller');
/**
 * Contras Controller
 *
 * @property Contra $Contra
 */
class ContrasController extends AppController {
	
	var $uses = array('Contra', 'ContraDets');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Contra->recursive = 0;
		//pr($this->paginate());
		$this->set('contras', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Contra->exists($id)) {
			throw new NotFoundException(__('Invalid contra'));
		}
		$options = array('conditions' => array('Contra.' . $this->Contra->primaryKey => $id));
		$this->set('contra', $this->Contra->find('first', $options));
	}

/**
 * add method
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			//$this->Contra->create();
			$this->Contra->begin();
			if ($this->Contra->save($this->request->data)) {
				if(isset($this->request->data['amount'])) {
					$ledgerArr = $this->request->data['ledger'] ;
					$amtArr = $this->request->data['amount'] ;
					$detailArr = array();
					$contraId = $this->Contra->getLastInsertId();
					foreach($amtArr as $k => $v) {
						if(!empty($v)) {
							$detailArr['ContraDets'][] =  array(
								'account_to' => $ledgerArr[$k],
								'amount'	=> $v,
								'contra_id' => $contraId
							);
						}
					}
				}
				if($this->ContraDets->saveAll($detailArr['ContraDets'])) {
					$this->Contra->commit();
					$this->Session->setFlash(__('The contra has been saved'));
				}else {
					$this->Contra->rollback();
					$this->Session->setFlash(__('The contra could not be saved. Please, try again.'));
				}
			}
		}
		$ledger = array('1' => 'Contra from1', '2' => 'Contra from 2');
		$locations = $this->Contra->Location->find('list');
		$finYears = $this->Contra->FinYear->find('list', array('fields' => 'fin_year'));
		$this->set(compact('locations', 'finYears', 'ledger'));
	}

	public function getRow() {
		$this->layout = false;
	}
	
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Contra->exists($id)) {
			throw new NotFoundException(__('Invalid contra'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Contra->begin();
			if ($this->Contra->save($this->request->data)) {
				if(isset($this->request->data['amount'])) {
					$ledgerArr = $this->request->data['ledger'] ;
					$amtArr = $this->request->data['amount'] ;
					$detailArr = array();
					$contraId = $this->request->data['Contra']['id'];
					foreach($amtArr as $k => $v) {
						if(!empty($v)) {
							$detailArr['ContraDets'][] =  array(
								'account_to' => $ledgerArr[$k],
								'amount'	=> $v,
								'contra_id' => $contraId
							);
						}
					}
				}
				if($this->ContraDets->deleteAll(array('contra_id' =>$contraId ), false)) {
					if($this->ContraDets->saveAll($detailArr['ContraDets'])) {
						$this->Contra->commit();
						$this->Session->setFlash(__('The contra has been updated'));
					}else {
						$this->Contra->rollback();
						$this->Session->setFlash(__('The contra could not be updated. Please, try again.'));
					}
				} else {
					$this->Contra->rollback();
					$this->Session->setFlash(__('The contra could not be updated. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('The contra could not be updated. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contra.' . $this->Contra->primaryKey => $id));
			$this->request->data = $this->Contra->find('first', $options);
		}
		$locations = $this->Contra->Location->find('list');
		$contra_from = array('1' => 'Contra from1', '2' => 'Contra from 2');
		
		$contraDets = $this->ContraDets->Find(
			'all',
			array(
				'conditions' => array(
					'contra_id' => $this->request->data['Contra']['id']
				)
			)
		);
		
		$finYears = $this->Contra->FinYear->find('list', array('fields' => 'fin_year'));
		$this->set(compact('locations', 'finYears', 'contra_from', 'contraDets'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Contra->id = $id;
		if (!$this->Contra->exists()) {
			throw new NotFoundException(__('Invalid contra'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Contra->delete()) {
			$this->Session->setFlash(__('Contra deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contra was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
