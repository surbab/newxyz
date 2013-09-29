<?php
App::uses('AppController', 'Controller');
/**
 * Receipts Controller
 *
 * @property Receipt $Receipt
 */
class ReceiptsController extends AppController {
	
	var $uses = array('Receipt', 'ReceiptDets');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Receipt->recursive = 0;
		//pr($this->paginate());
		$this->set('Receipts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Receipt->exists($id)) {
			throw new NotFoundException(__('Invalid Receipt'));
		}
		$options = array('conditions' => array('Receipt.' . $this->Receipt->primaryKey => $id));
		$this->set('receipt', $this->Receipt->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	
	/**
 * add method
 *
 * @return void
 */
	public function add() {
	
		if ($this->request->is('post')) {
			//$this->Journal->create();
			$this->Receipt->begin();
			if ($this->Receipt->save($this->request->data)) {
				if(isset($this->request->data['amount'])) {
					$ledgerArr = $this->request->data['ledger'] ;
					$amtArr = $this->request->data['amount'] ;
					$detailArr = array();
					$ReceiptId = $this->Receipt->getLastInsertId();
					foreach($amtArr as $k => $v) {
						if(!empty($v)) {
							$detailArr['ReceiptDets'][] =  array(
								'account_from' => $ledgerArr[$k],
								'amount'	=> $v,
								'receipt_id' => $ReceiptId
							);
						}
					}
				}
				
				if($this->ReceiptDets->saveAll($detailArr['ReceiptDets'])) {
					$this->Receipt->commit();
					$this->redirect(array('controller' => 'receipts', 'action' => 'index'));
					$this->Session->setFlash(__('The Receipt has been saved'));
				}else {
					$this->Receipt->rollback();
					$this->Session->setFlash(__('The Receipt could not be saved. Please, try again.'));
				}
			}
		}
		$receipt_from = array('1' => 'Receipt from1', '2' => 'Receipt from 2');
		$locations = $this->Receipt->Location->find('list');
		$finYears = $this->Receipt->FinYear->find('list', array('fields' => 'fin_year'));
		$this->set(compact('locations', 'finYears', 'receipt_from'));
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
		if (!$this->Receipt->exists($id)) {
			throw new NotFoundException(__('Invalid Receipt'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			//pr($this->request->data);die();
			$this->Receipt->begin();
			if ($this->Receipt->save($this->request->data)) {
				if(isset($this->request->data['amount'])) {
					$ledgerArr = $this->request->data['ledger'] ;
					$amtArr = $this->request->data['amount'] ;
					$detailArr = array();
					$ReceiptId = $this->request->data['Receipt']['id'];
					foreach($amtArr as $k => $v) {
						if(!empty($v)) {
							$detailArr['ReceiptDets'][] =  array(
								'account_from' => $ledgerArr[$k],
								'amount'	=> $v,
								'receipt_id' => $ReceiptId
							);
						}
					}
				}
				if($this->ReceiptDets->deleteAll(array('receipt_id' =>$ReceiptId ), false)) {
				
						if($this->ReceiptDets->saveAll($detailArr['ReceiptDets'])) {
						$this->redirect(array('controller' => 'receipts', 'action' => 'index'));
						$this->Receipt->commit();
						$this->Session->setFlash(__('The Receipt has been updated'));
					}else {
						$this->Receipt->rollback();
						$this->Session->setFlash(__('The Receipt could not be updated. Please, try again.'));
					}
				} else {
					$this->Receipt->rollback();
					$this->Session->setFlash(__('The Receipt could not be updated. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('The Receipt could not be updated. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Receipt.' . $this->Receipt->primaryKey => $id));
			$this->request->data = $this->Receipt->find('first', $options);
		}
		$locations = $this->Receipt->Location->find('list');
		$receipt_from = array('1' => 'Receipt from1', '2' => 'Receipt from 2');
		
		$receiptDets = $this->ReceiptDets->Find(
			'all',
			array(
				'conditions' => array(
					'receipt_id' => $this->request->data['Receipt']['id']
				)
			)
		);
		
		$finYears = $this->Receipt->FinYear->find('list', array('fields' => 'fin_year'));
		$this->set(compact('locations', 'finYears', 'receipt_from', 'receiptDets'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Receipt->id = $id;
		if (!$this->Receipt->exists()) {
			throw new NotFoundException(__('Invalid Receipt'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Receipt->delete()) {
			$this->Session->setFlash(__('Receipt deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Receipt was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
