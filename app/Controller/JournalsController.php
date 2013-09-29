<?php
App::uses('AppController', 'Controller');
/**
 * Journals Controller
 *
 * @property Journal $Journal
 */
class JournalsController extends AppController {
	
	var $uses = array('Journal', 'JournalDets');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Journal->recursive = 0;
		//pr($this->paginate());
		$this->set('journals', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Journal->exists($id)) {
			throw new NotFoundException(__('Invalid journal'));
		}
		$options = array('conditions' => array('Journal.' . $this->Journal->primaryKey => $id));
		$this->set('journal', $this->Journal->find('first', $options));
		$journalDets = $this->JournalDets->Find(
			'all',
			array(
				'conditions' => array(
					'journal_id' => $id
				)
			)
		);
	
		$this->set(compact( 'journalDets'));
		
	}
 /* add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			//$this->Journal->create();
			$this->Journal->begin();	
			if ($this->Journal->save($this->data['Journal'])) {
			
				if(isset($this->request->data['amount'])) {
					$ledgerArrFrom = $this->request->data['ledgerfrom'] ;
					$ledgerArrTo = $this->request->data['ledgerto'] ;
					$amtArr = $this->request->data['amount'] ;
					$detailArr = array();
					$journalId = $this->Journal->getLastInsertId();
					foreach($amtArr as $k => $v) {
						if(!empty($v)) {
							$detailArr['JournalDets'][] =  array(
								'account_by_id' => $ledgerArrFrom[$k],
								'account_to_id' => $ledgerArrTo[$k],
								'amount'	=> $v,
								'journal_id' => $journalId
							);
						}
					}
				}
				if($this->JournalDets->saveAll($detailArr['JournalDets'])) {
					$this->Journal->commit();
					$this->Session->setFlash(__('The journal has been saved'));
				}else {
					$this->Journal->rollback();
					$this->Session->setFlash(__('The journal could not be saved. Please, try again.'));
				}
			}
				debug($this->Journal->validationErrors);
		}
		$ledger = array('1' => 'Journal from1', '2' => 'Journal from 2');
		$locations = $this->Journal->Location->find('list');
		$finYears = $this->Journal->FinYear->find('list', array('fields' => 'fin_year'));
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
		if (!$this->Journal->exists($id)) {
			throw new NotFoundException(__('Invalid journal'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Journal->begin();
			if ($this->Journal->save($this->request->data)) {
				if(isset($this->request->data['amount'])) {
					$ledgerArrFrom = $this->request->data['ledgerfrom'] ;
					$ledgerArrTo = $this->request->data['ledgerto'] ;
					$amtArr = $this->request->data['amount'] ;
					$detailArr = array();
					$journalId = $this->request->data['Journal']['id'];
					foreach($amtArr as $k => $v) {
						if(!empty($v)) {
							$detailArr['JournalDets'][] =  array(
								'account_by_id' => $ledgerArrFrom[$k],
								'account_to_id' => $ledgerArrTo[$k],
								'amount'	=> $v,
								'journal_id' => $journalId
							);
						}
					}
				}
				if($this->JournalDets->deleteAll(array('journal_id' =>$journalId ), false)) {
					if($this->JournalDets->saveAll($detailArr['JournalDets'])) {
						$this->Journal->commit();
						$this->Session->setFlash(__('The journal has been updated'));
					}else {
						$this->Journal->rollback();
						$this->Session->setFlash(__('The journal could not be updated. Please, try again.'));
					}
				} else {
					$this->Journal->rollback();
					$this->Session->setFlash(__('The journal could not be updated. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('The journal could not be updated. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Journal.' . $this->Journal->primaryKey => $id));
			$this->request->data = $this->Journal->find('first', $options);
		}
		$locations = $this->Journal->Location->find('list');
		$journal_from = array('1' => 'Journal from1', '2' => 'Journal from 2');
		
		$journalDets = $this->JournalDets->Find(
			'all',
			array(
				'conditions' => array(
					'journal_id' => $this->request->data['Journal']['id']
				)
			)
		);
		
		$finYears = $this->Journal->FinYear->find('list', array('fields' => 'fin_year'));
		$this->set(compact('locations', 'finYears', 'journal_from', 'journalDets'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Journal->id = $id;
		if (!$this->Journal->exists()) {
			throw new NotFoundException(__('Invalid journal'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Journal->delete()) {
			$this->Session->setFlash(__('Journal deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Journal was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
