<?php
App::uses('AppModel', 'Model');
/**
 * TaxCombDet Model
 *
 * @property TaxComb $TaxComb
 * @property TaxType $TaxType
 */
class TaxCombDet extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tax_comb_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tax_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TaxComb' => array(
			'className' => 'TaxComb',
			'foreignKey' => 'tax_comb_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TaxType' => array(
			'className' => 'TaxType',
			'foreignKey' => 'tax_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
