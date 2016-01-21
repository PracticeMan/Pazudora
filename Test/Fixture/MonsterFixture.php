<?php
/**
 * MonsterFixture
 *
 */
class MonsterFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hp' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'atatck' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'attr_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'kind_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'image_file_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'hp' => 1,
			'atatck' => 1,
			'attr_id' => 1,
			'kind_id' => 1,
			'image_file_name' => 'Lorem ipsum dolor sit amet',
			'created' => '2016-01-19 11:46:35',
			'modified' => '2016-01-19 11:46:35'
		),
	);

}
