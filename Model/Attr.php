<?php
App::uses('AppModel', 'Model');
/**
 * Attr Model
 *
 * @property Monster $Monster
 */
class Attr extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'attr_type';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'attr_type' => array(
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
			'foreignKey' => 'attr_id',
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
