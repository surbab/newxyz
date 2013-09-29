<?php
App::uses('AppModel', 'Model');
/**
 * PoDet Model
 *
 * @property PurchaseOrder $PurchaseOrder
 * @property ItemCode $ItemCode
 * @property Uom $Uom
 * @property TaxComb $TaxComb
 * @property GrnDet $GrnDet
 * @property PurInvDet $PurInvDet
 */
class PoDet extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'PurchaseOrder' => array(
			'className' => 'PurchaseOrder',
			'foreignKey' => 'purchase_order_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ItemCode' => array(
			'className' => 'ItemCode',
			'foreignKey' => 'item_code_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Uom' => array(
			'className' => 'Uom',
			'foreignKey' => 'uom_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TaxComb' => array(
			'className' => 'TaxComb',
			'foreignKey' => 'tax_comb_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'GrnDet' => array(
			'className' => 'GrnDet',
			'foreignKey' => 'po_det_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'PurInvDet' => array(
			'className' => 'PurInvDet',
			'foreignKey' => 'po_det_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
