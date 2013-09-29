<?php
App::uses('AppController', 'Controller');
/**
 * PurchaseOrders Controller
 *
 * @property PurchaseOrder $PurchaseOrder
 */
class PurchaseOrdersController extends AppController {

var $uses = array('PurchaseOrder', 'PoDet','ItemCode');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PurchaseOrder->recursive = 0;
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
		if (!$this->PurchaseOrder->exists($id)) {
			throw new NotFoundException(__('Invalid purchase order'));
		}
		$options = array('conditions' => array('PurchaseOrder.' . $this->PurchaseOrder->primaryKey => $id));
				
				$this->PurchaseOrder->PoDet->recursive = 0;
		$itemcode = $this->PurchaseOrder->PoDet->find('list');
		$uom = $this->PoDet->Uom->find('list', array('fields' => 'uom'));
		$purchaseorder= $this->PurchaseOrder->find('first', $options);
		$this->set(compact('itemcode', 'uom', 'purchaseorder' ));
		
		
		
		
		//$this->set('purchaseorder', $this->PurchaseOrder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	
	public function add() {
		if ($this->request->is('post')) {
			//$this->PurchaseOrder->create();
			$this->PurchaseOrder->begin();
			pr($this->request->data);
			if ($this->PurchaseOrder->save($this->request->data)) {
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
					$purchaseOrderId = $this->PurchaseOrder->getLastInsertId();
					foreach($qtyArr as $k => $v) {
						if(!empty($v)) {
							$detailArr['PoDets'][] =  array(
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
				
				if($this->PoDet->saveAll($detailArr['PoDets'])) {
					$this->PurchaseOrder->commit();
					$this->Session->setFlash(__('The purchaseOrder has been saved'));
				}else {
					$this->PurchaseOrder->rollback();
					$this->Session->setFlash(__('The purchaseOrder could not be saved. Please, try again.'));
				}
			}
		}
	
		$locations = $this->PurchaseOrder->Location->find('list');
		$partner = $this->PurchaseOrder->Partner->find('list');
		$payterm = $this->PurchaseOrder->PayTerm->find('list');
		$finYears = $this->PurchaseOrder->FinYear->find('list', array('fields' => 'fin_year'));
		$this->set(compact('locations', 'finYears', 'ledger','partner','payterm' ));
	}

	public function edit($id = null) {
		if (!$this->PurchaseOrder->exists($id)) {
			throw new NotFoundException(__('Invalid purchaseOrder'));
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->PurchaseOrder->begin();

		if ($this->PurchaseOrder->save($this->request->data)) {
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
					$purchaseOrderId = $this->request->data['PurchaseOrder']['id'];
					foreach($qtyArr as $k => $v) {
						if(!empty($v)) {
							$detailArr['PoDets'][] =  array(
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
				if($this->PoDet->deleteAll(array('purchase_order_id' =>$purchaseOrderId ), false)) {
					if($this->PoDet->saveAll($detailArr['PoDets'])) {
						$this->PurchaseOrder->commit();
						$this->Session->setFlash(__('The purchaseOrder has been updated'));
					}else {
						$this->PurchaseOrder->rollback();
						$this->Session->setFlash(__('The purchaseOrder could not be updated. Please, try again.'));
					}
				} else {
					$this->PurchaseOrder->rollback();
					$this->Session->setFlash(__('The purchaseOrder could not be updated. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('The purchaseOrder could not be updated. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PurchaseOrder.' . $this->PurchaseOrder->primaryKey => $id));
			$this->request->data = $this->PurchaseOrder->find('first', $options);
		}
	
		$locations = $this->PurchaseOrder->Location->find('list');
		$partner = $this->PurchaseOrder->Partner->find('list');
		$payterm = $this->PurchaseOrder->PayTerm->find('list');
		$finYears = $this->PurchaseOrder->FinYear->find('list', array('fields' => 'fin_year'));
		
		$poDets = $this->PoDet->Find(
			'all',
			array(
				'conditions' => array(
					'purchase_order_id' => $this->request->data['PurchaseOrder']['id']
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
		if (!$this->PurchaseOrder->exists($id)) {
			throw new NotFoundException(__('Invalid purchase order'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PurchaseOrder->save($this->request->data)) {
				$this->Session->setFlash(__('The purchase order has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchase order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PurchaseOrder.' . $this->PurchaseOrder->primaryKey => $id));
			$this->request->data = $this->PurchaseOrder->find('first', $options);
		}
		$locations = $this->PurchaseOrder->Location->find('list');
		$partners = $this->PurchaseOrder->Partner->find('list');
		$payTerms = $this->PurchaseOrder->PayTerm->find('list');
		$finYears = $this->PurchaseOrder->FinYear->find('list');
		$approvalRegisters = $this->PurchaseOrder->ApprovalRegister->find('list');
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
		$this->PurchaseOrder->id = $id;
		if (!$this->PurchaseOrder->exists()) {
			throw new NotFoundException(__('Invalid purchase order'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PurchaseOrder->delete()) {
			$this->Session->setFlash(__('Purchase order deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Purchase order was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
