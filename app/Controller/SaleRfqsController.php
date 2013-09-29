<?php
App::uses('AppController', 'Controller');
/**
 * Salerfqs Controller
 *
 * @property Salerfq $Salerfq
 */
class SaleRfqsController extends AppController {

var $uses = array('Salerfq', 'SaleRfqDet', 'items','uom');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Salerfq->recursive = 0;
		$this->set('salerfqs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Salerfq->exists($id)) {
			throw new NotFoundException(__('Invalid purchase order'));
		}
		$options = array('conditions' => array('Salerfq.' . $this->Salerfq->primaryKey => $id));
		$this->set('salerfq', $this->Salerfq->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	
	public function add() {
		if ($this->request->is('post')) {
			//$this->Salerfq->create();
			$this->Salerfq->begin();
		//	pr($this->request->data);
			if ($this->Salerfq->save($this->request->data)) {
				if(isset($this->request->data['sry'])) {
					$itemArr = $this->request->data['itemCode'] ;
					$sryArr = $this->request->data['sry'] ;
					$uomArr = $this->request->data['uom'] ;					
					$priceArr = $this->request->data['price'] ;
					$totpriceArr = $this->request->data['tot_price'] ;
					$detailArr = array();
					$salerfqId = $this->Salerfq->getLastInsertId();
					foreach($sryArr as $k => $v) {
						if(!empty($v)) {
							$detailArr['SaleRfqDets'][] =  array(
								'quoation_id' => $salerfqId,
								'item_code_id' => $itemArr[$k],
								'uom_id' => $uomArr[$k],
								'sry'	=> $v,
								'price' => $priceArr[$k],
								'tot_price' => $totpriceArr[$k],
							);
						}
					}
				}
				pr($detailArr);
				die();
				
				if($this->PoDet->saveAll($detailArr['SaleRfqDets'])) {
					$this->Salerfq->commit();
					$this->Session->setFlash(__('The Request for Quote has been saved'));
				}else {
					$this->Salerfq->rollback();
					$this->Session->setFlash(__('The Request for Quote could not be saved. Please, try again.'));
				}
			}
		}
		$salerfq = $this->Salerfq->SaleRfq->find('list');
		$term = $this->Salerfq->Term->find('list');
		$saleEng = $this->Salerfq->SaleEng->find('list');
		$estimation = $this->Salerfq->Estimation->find('list');
		$locations = $this->Salerfq->Location->find('list');
		$partner = $this->Salerfq->Partner->find('list');
		$payterm = $this->Salerfq->PayTerm->find('list');
		$finYears = $this->Salerfq->FinYear->find('list', array('fields' => 'fin_year'));
		$this->set(compact('locations', 'finYears','partner','payterm','item','uom','salerfq','term','saleEng','estimation' ));
	}

	public function edit($id = null) {
		if (!$this->Salerfq->exists($id)) {
			throw new NotFoundException(__('Invalid Salerfq'));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Salerfq->begin();

		if ($this->Salerfq->save($this->request->data)) {
				if(isset($this->request->data['sry'])) {
					$itemArr = $this->request->data['itemCode'] ;
					$sryArr = $this->request->data['sry'] ;
					$uomArr = $this->request->data['uom'] ;					
					$priceArr = $this->request->data['price'] ;
					$totpriceArr = $this->request->data['tot_price'] ;
					$detailArr = array();
					$salerfqId = $this->Salerfq->getLastInsertId();
					foreach($sryArr as $k => $v) {
						if(!empty($v)) {
							$detailArr['SaleRfqDets'][] =  array(
								'quoation_id' => $salerfqId,
								'item_code_id' => $itemArr[$k],
								'uom_id' => $uomArr[$k],
								'sry'	=> $v,
								'price' => $priceArr[$k],
								'tot_price' => $totpriceArr[$k],
							);
						}
					}
				}
				if($this->PoDet->deleteAll(array('salerfq_id' =>$salerfqId ), false)) {
					if($this->PoDet->saveAll($detailArr['SaleRfqDets'])) {
						$this->Salerfq->commit();
						$this->Session->setFlash(__('The Request for Quote has been updated'));
					}else {
						$this->Salerfq->rollback();
						$this->Session->setFlash(__('The Request for Quote could not be updated. Please, try again.'));
					}
				} else {
					$this->Salerfq->rollback();
					$this->Session->setFlash(__('The Request for Quote could not be updated. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('The Request for Quote could not be updated. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Salerfq.' . $this->Salerfq->primaryKey => $id));
			$this->request->data = $this->Salerfq->find('first', $options);
		}
	
		$salerfq = $this->Salerfq->SaleRfq->find('list');
		$term = $this->Salerfq->Term->find('list');
		$saleEng = $this->Salerfq->SaleEng->find('list');
		$estimation = $this->Salerfq->Estimation->find('list');
		$locations = $this->Salerfq->Location->find('list');
		$partner = $this->Salerfq->Partner->find('list');
		$payterm = $this->Salerfq->PayTerm->find('list');
		$finYears = $this->Salerfq->FinYear->find('list', array('fields' => 'fin_year'));
		
		$saleDets = $this->SaleRfqDet->Find(
			'all',
			array(
				'conditions' => array(
					'salerfq_id' => $this->request->data['Salerfq']['id']
				)
			)
		);
		
		$this->set(compact('locations', 'finYears','partner','payterm','item','uom','salerfq','term','saleEng','estimation','saleDets' ));
		
	}

	
	
	
	public function getRow() {
		$this->layout = false;
	}
/*	
	
 * @return void
 */
	public function delete($id = null) {
		$this->Salerfq->id = $id;
		if (!$this->Salerfq->exists()) {
			throw new NotFoundException(__('Invalid Request for Quote'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Salerfq->delete()) {
			$this->Session->setFlash(__('Request for Quote deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Request for Quote was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
