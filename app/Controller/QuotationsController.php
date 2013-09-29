<?php
App::uses('AppController', 'Controller');
/**
 * Quotations Controller
 *
 * @property Quotation $Quotation
 */
class QuotationsController extends AppController {

var $uses = array('Quotation', 'QuoteDet', 'items','uom');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Quotation->recursive = 0;
		$this->set('quotations', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Quotation->exists($id)) {
			throw new NotFoundException(__('Invalid purchase order'));
		}
		$options = array('conditions' => array('Quotation.' . $this->Quotation->primaryKey => $id));
		$this->set('quotation', $this->Quotation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	
	public function add() {
		if ($this->request->is('post')) {
			//$this->Quotation->create();
			$this->Quotation->begin();
		//	pr($this->request->data);
			if ($this->Quotation->save($this->request->data)) {
				if(isset($this->request->data['qty'])) {
					$itemArr = $this->request->data['itemCode'] ;
					$qtyArr = $this->request->data['qty'] ;
					$uomArr = $this->request->data['uom'] ;					
					$priceArr = $this->request->data['price'] ;
					$totpriceArr = $this->request->data['tot_price'] ;
					$detailArr = array();
					$quotationId = $this->Quotation->getLastInsertId();
					foreach($qtyArr as $k => $v) {
						if(!empty($v)) {
							$detailArr['QuoteDets'][] =  array(
								'quoation_id' => $quotationId,
								'item_code_id' => $itemArr[$k],
								'uom_id' => $uomArr[$k],
								'qty'	=> $v,
								'price' => $priceArr[$k],
								'tot_price' => $totpriceArr[$k],
							);
						}
					}
				}
				pr($detailArr);
				die();
				
				if($this->PoDet->saveAll($detailArr['QuoteDets'])) {
					$this->Quotation->commit();
					$this->Session->setFlash(__('The Quotation has been saved'));
				}else {
					$this->Quotation->rollback();
					$this->Session->setFlash(__('The Quotation could not be saved. Please, try again.'));
				}
			}
		}
		$salerfq = $this->Quotation->SaleRfq->find('list');
		$term = $this->Quotation->Term->find('list');
		$saleEng = $this->Quotation->SaleEng->find('list');
		$estimation = $this->Quotation->Estimation->find('list');
		$locations = $this->Quotation->Location->find('list');
		$partner = $this->Quotation->Partner->find('list');
		$payterm = $this->Quotation->PayTerm->find('list');
		$finYears = $this->Quotation->FinYear->find('list', array('fields' => 'fin_year'));
		$this->set(compact('locations', 'finYears','partner','payterm','item','uom','salerfq','term','saleEng','estimation' ));
	}

	public function edit($id = null) {
		if (!$this->Quotation->exists($id)) {
			throw new NotFoundException(__('Invalid Quotation'));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Quotation->begin();

		if ($this->Quotation->save($this->request->data)) {
				if(isset($this->request->data['qty'])) {
					$itemArr = $this->request->data['itemCode'] ;
					$qtyArr = $this->request->data['qty'] ;
					$uomArr = $this->request->data['uom'] ;					
					$priceArr = $this->request->data['price'] ;
					$totpriceArr = $this->request->data['tot_price'] ;
					$detailArr = array();
					$quotationId = $this->Quotation->getLastInsertId();
					foreach($qtyArr as $k => $v) {
						if(!empty($v)) {
							$detailArr['QuoteDets'][] =  array(
								'quoation_id' => $quotationId,
								'item_code_id' => $itemArr[$k],
								'uom_id' => $uomArr[$k],
								'qty'	=> $v,
								'price' => $priceArr[$k],
								'tot_price' => $totpriceArr[$k],
							);
						}
					}
				}
				if($this->PoDet->deleteAll(array('quotation_id' =>$quotationId ), false)) {
					if($this->PoDet->saveAll($detailArr['QuoteDets'])) {
						$this->Quotation->commit();
						$this->Session->setFlash(__('The Quotation has been updated'));
					}else {
						$this->Quotation->rollback();
						$this->Session->setFlash(__('The Quotation could not be updated. Please, try again.'));
					}
				} else {
					$this->Quotation->rollback();
					$this->Session->setFlash(__('The Quotation could not be updated. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('The Quotation could not be updated. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Quotation.' . $this->Quotation->primaryKey => $id));
			$this->request->data = $this->Quotation->find('first', $options);
		}
	
		$salerfq = $this->Quotation->SaleRfq->find('list');
		$term = $this->Quotation->Term->find('list');
		$saleEng = $this->Quotation->SaleEng->find('list');
		$estimation = $this->Quotation->Estimation->find('list');
		$locations = $this->Quotation->Location->find('list');
		$partner = $this->Quotation->Partner->find('list');
		$payterm = $this->Quotation->PayTerm->find('list');
		$finYears = $this->Quotation->FinYear->find('list', array('fields' => 'fin_year'));
		
		$quoteDets = $this->QuoteDet->Find(
			'all',
			array(
				'conditions' => array(
					'quotation_id' => $this->request->data['Quotation']['id']
				)
			)
		);
		
		$this->set(compact('locations', 'finYears','partner','payterm','item','uom','salerfq','term','saleEng','estimation','quoteDets' ));
		
	}

	
	
	
	public function getRow() {
		$this->layout = false;
	}
/*	
	
 * @return void
 */
	public function delete($id = null) {
		$this->Quotation->id = $id;
		if (!$this->Quotation->exists()) {
			throw new NotFoundException(__('Invalid Quotation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Quotation->delete()) {
			$this->Session->setFlash(__('Quotation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Quoation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
