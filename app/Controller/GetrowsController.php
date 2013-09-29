<?php
App::uses('AppController', 'Controller');
/**
 * Grns Controller
 *
 * @property Grn $Grn
 */
class GetrowsController extends AppController {
var $uses = array('ItemCode','Uom');
/**
 * index method
 *
 * @return void
 */

 	public functionquotation($id = null) {
		$this->layout = 'getrow';
		$this->ItemCode->recursive=-1;
		$item = $this->ItemCode->find('all');
		$this->Uom->recursive=-1;
		$uom = $this->Uom->find('all');
		$this->set(compact('item','uom'));	
		
		}
	public function rfq($id = null) {
		$this->layout = 'getrow';
		$this->Uom->recursive=-1;
		$uom = $this->Uom->find('all');
		$this->set(compact('item','uom'));	
		
		}
}
?>