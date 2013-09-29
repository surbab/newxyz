<?php
App::uses('AppModel', 'Model');
/**
 * UserGroup Model
 *
 * @property GeneralAccessSetting $GeneralAccessSetting
 * @property User $User
 */
class UserGroup extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'userg_name';

/**
 * Validation rules
 *
 * @var array
 */
 
	public $actsAs = array('Acl' => array('type' => 'requester'));
	public function parentNode() {
		return null;
	}
 
 
 
	public $validate = array(
		'userg_name' => array(
			'maxlength' => array(
				'rule' => array('maxlength',20),
				'message' => 'Maximum length allowed is 20!',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minlength' => array(
				'rule' => array('minlength',2),
				'message' => 'Minimum 2 characters required!',
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'GeneralAccessSetting' => array(
			'className' => 'GeneralAccessSetting',
			'foreignKey' => 'user_group_id',
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_group_id',
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
