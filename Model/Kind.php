<?php
App::uses('AppModel', 'Model');
/**
 * Kind Model
 *
 * @property Monster $Monster
 */
class Kind extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'kind_type';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'kind_type' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
		'Monster' => array(
			'className' => 'Monster',
			'foreignKey' => 'kind_id',
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
