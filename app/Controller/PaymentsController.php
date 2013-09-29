<?php
App::uses('AppController', 'Controller');
/**
 * Payments Controller
 *
 * @property Payment $Payment
 */
class PaymentsController extends AppController {
	
	var $uses = array('Payment', 'PaymentDets');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Payment->recursive = 0;
		//pr($this->paginate());
		$this->set('payments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Payment->exists($id)) {
			throw new NotFoundException(__('Invalid payment'));
		}
		$options = array('conditions' => array('Payment.' . $this->Payment->primaryKey => $id));
		$this->set('payment', $this->Payment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 
	public function add() {
	Cache::delete('payments');
		if ($this->request->is('post')) {
			$this->Payment->create();
			if ($this->Payment->save($this->request->data)) {
				$this->Session->setFlash(__('The payment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment could not be saved. Please, try again.'));
			}
		}
		
		$locations = $this->Payment->Location->find('list');
		$finYears = $this->Payment->FinYear->find('list');
		$this->set(compact('locations', 'finYears'));
	}

	/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			//$this->Payment->create();
			$this->Payment->begin();
			if ($this->Payment->save($this->request->data)) {
			pr($this->request->data);
			die();
				if(isset($this->request->data['amount'])) {
					$ledgerArr = $this->request->data['ledger'] ;
					$amtArr = $this->request->data['amount'] ;
					$detailArr = array();
					$paymentId = $this->Payment->getLastInsertId();
					foreach($amtArr as $k => $v) {
						if(!empty($v)) {
							$detailArr['PaymentDets'][] =  array(
								'account_to' => $ledgerArr[$k],
								'amount'	=> $v,
								'payment_id' => $paymentId
							);
						}
					}
				}
				if($this->PaymentDets->saveAll($detailArr['PaymentDets'])) {
					$this->Payment->commit();
					$this->Session->setFlash(__('The payment has been saved'));
				}else {
					$this->Payment->rollback();
					$this->Session->setFlash(__('The payment could not be saved. Please, try again.'));
				}
			}
		}
		$payment_from = array('1' => 'Payment from1', '2' => 'Payment from 2');
		$locations = $this->Payment->Location->find('list');
		$finYears = $this->Payment->FinYear->find('list', array('fields' => 'fin_year'));
		$this->set(compact('locations', 'finYears', 'payment_from'));
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
		if (!$this->Payment->exists($id)) {
			throw new NotFoundException(__('Invalid payment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			pr($this->request->data);
			die();
			$this->Payment->begin();
			if ($this->Payment->save($this->request->data)) {
				if(isset($this->request->data['amount'])) {
					$ledgerArr = $this->request->data['ledger'] ;
					$amtArr = $this->request->data['amount'] ;
					$detailArr = array();
					$paymentId = $this->request->data['Payment']['id'];
					foreach($amtArr as $k => $v) {
						if(!empty($v)) {
							$detailArr['PaymentDets'][] =  array(
								'account_to' => $ledgerArr[$k],
								'amount'	=> $v,
								'payment_id' => $paymentId
							);
						}
					}
				}
				if($this->PaymentDets->deleteAll(array('payment_id' =>$paymentId ), false)) {
					if($this->PaymentDets->saveAll($detailArr['PaymentDets'])) {
						$this->Payment->commit();
						$this->Session->setFlash(__('The payment has been updated'));
					}else {
						$this->Payment->rollback();
						$this->Session->setFlash(__('The payment could not be updated. Please, try again.'));
					}
				} else {
					$this->Payment->rollback();
					$this->Session->setFlash(__('The payment could not be updated. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('The payment could not be updated. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Payment.' . $this->Payment->primaryKey => $id));
			$this->request->data = $this->Payment->find('first', $options);
		}
		$locations = $this->Payment->Location->find('list');
		$payment_from = array('1' => 'Payment from1', '2' => 'Payment from 2');
		
		$paymentDets = $this->PaymentDets->Find(
			'all',
			array(
				'conditions' => array(
					'payment_id' => $this->request->data['Payment']['id']
				)
			)
		);
		
		$finYears = $this->Payment->FinYear->find('list', array('fields' => 'fin_year'));
		$this->set(compact('locations', 'finYears', 'payment_from', 'paymentDets'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Payment->id = $id;
		if (!$this->Payment->exists()) {
			throw new NotFoundException(__('Invalid payment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Payment->delete()) {
			$this->Session->setFlash(__('Payment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Payment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
