<?php
App::uses('AppController', 'Controller');
/**
 * Quotations Controller
 *
 * @property Quotation $Quotation
 */
class QuotationsController extends AppController {

var $uses = array('Quotation', 'QuoteDet');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Quotation->recursive = 0;
		$this->set('purchaseOrders', $this->paginate());
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
	//		pr($this->request->data);
			if ($this->Quotation->save($this->request->data)) {
				if(isset($this->request->data['qty'])) {
					$itemArr = $this->request->data['itemCode'] ;
					$qtyArr = $this->request->data['qty'] ;
					$uomArr = $this->request->data['uom'] ;
					$priceArr = $this->request->data['price'] ;
					$totpriceArr = $this->request->data['tot_price'] ;
					$taxcombArr = $this->request->data['taxcomb'] ;
					$taxArr = $this->request->data['tax'] ;
					$gtotArr = $this->request->data['totpricetax'] ;
					$detailArr = array();
					$purchaseOrderId = $this->Quotation->getLastInsertId();
					foreach($qtyArr as $k => $v) {
						if(!empty($v)) {
							$detailArr['QuoteDets'][] =  array(
								'purchase_order_id' => $purchaseOrderId,
								'item_code_id' => $itemArr[$k],
								'uom_id' => $uomArr[$k],
								'qty'	=> $v,
								'price' => $priceArr[$k],
								'tot_price' => $totpriceArr[$k],
								'tax_comb_id' => $taxcombArr[$k],
								'tax' => $taxArr[$k],
								'gtotprice' => $gtotArr[$k],
								'required_date' => $totpriceArr[$k]
								
							);
						}
					}
				}
		//		pr($detailArr);
		//		die();
				
				if($this->QuoteDet->saveAll($detailArr['QuoteDets'])) {
					$this->Quotation->commit();
					$this->Session->setFlash(__('The purchaseOrder has been saved'));
				}else {
					$this->Quotation->rollback();
					$this->Session->setFlash(__('The purchaseOrder could not be saved. Please, try again.'));
				}
			}
		}
	
		$locations = $this->Quotation->Location->find('list');
		$partner = $this->Quotation->Partner->find('list');
		$payterm = $this->Quotation->PayTerm->find('list');
		$items = $this->Quotation->QuoteDet->Item->find('list');
		$uom = $this->Quotation->QuoteDet->uom->find('list');		
		$finYears = $this->Quotation->FinYear->find('list', array('fields' => 'fin_year'));
		$this->set(compact('locations', 'finYears', 'ledger','partner','payterm','uom','items' ));
	}

	public function edit($id = null) {
		if (!$this->Quotation->exists($id)) {
			throw new NotFoundException(__('Invalid purchaseOrder'));
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
					$taxcombArr = $this->request->data['taxcomb'] ;
					$taxArr = $this->request->data['tax'] ;
					$gtotArr = $this->request->data['totpricetax'] ;
					$detailArr = array();
					$purchaseOrderId = $this->request->data['Quotation']['id'];
					foreach($qtyArr as $k => $v) {
						if(!empty($v)) {
							$detailArr['QuoteDets'][] =  array(
								'purchase_order_id' => $purchaseOrderId,
								'item_code_id' => $itemArr[$k],
								'uom_id' => $uomArr[$k],
								'qty'	=> $v,
								'price' => $priceArr[$k],
								'tot_price' => $totpriceArr[$k],
								'tax_comb_id' => $taxcombArr[$k],
								'tax' => $taxArr[$k],
								'gtotprice' => $gtotArr[$k],
								'required_date' => $totpriceArr[$k]
								
							);
						}
					}
				}
				if($this->QuoteDet->deleteAll(array('purchase_order_id' =>$purchaseOrderId ), false)) {
					if($this->QuoteDet->saveAll($detailArr['QuoteDets'])) {
						$this->Quotation->commit();
						$this->Session->setFlash(__('The purchaseOrder has been updated'));
					}else {
						$this->Quotation->rollback();
						$this->Session->setFlash(__('The purchaseOrder could not be updated. Please, try again.'));
					}
				} else {
					$this->Quotation->rollback();
					$this->Session->setFlash(__('The purchaseOrder could not be updated. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('The purchaseOrder could not be updated. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Quotation.' . $this->Quotation->primaryKey => $id));
			$this->request->data = $this->Quotation->find('first', $options);
		}
	
		$locations = $this->Quotation->Location->find('list');
		$partner = $this->Quotation->Partner->find('list');
		$payterm = $this->Quotation->PayTerm->find('list');
		$finYears = $this->Quotation->FinYear->find('list', array('fields' => 'fin_year'));
		
		$poDets = $this->QuoteDet->Find(
			'all',
			array(
				'conditions' => array(
					'purchase_order_id' => $this->request->data['Quotation']['id']
				)
			)
		);
		
		$this->set(compact('locations', 'finYears', 'ledger','partner','payterm','poDets' ));
		
	}

	
	
	
	public function getRow() {
		$this->layout = false;
	}
/*	
	
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 
	public function edit($id = null) {
		if (!$this->Quotation->exists($id)) {
			throw new NotFoundException(__('Invalid purchase order'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Quotation->save($this->request->data)) {
				$this->Session->setFlash(__('The purchase order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchase order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Quotation.' . $this->Quotation->primaryKey => $id));
			$this->request->data = $this->Quotation->find('first', $options);
		}
		$locations = $this->Quotation->Location->find('list');
		$partners = $this->Quotation->Partner->find('list');
		$payTerms = $this->Quotation->PayTerm->find('list');
		$finYears = $this->Quotation->FinYear->find('list');
		$approvalRegisters = $this->Quotation->ApprovalRegister->find('list');
		$this->set(compact('locations', 'partners', 'payTerms', 'finYears', 'approvalRegisters'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Quotation->id = $id;
		if (!$this->Quotation->exists()) {
			throw new NotFoundException(__('Invalid purchase order'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Quotation->delete()) {
			$this->Session->setFlash(__('Purchase order deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Purchase order was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
