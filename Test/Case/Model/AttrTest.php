<?php
App::uses('Attr', 'Model');

/**
 * Attr Test Case
 *
 */
class AttrTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attr',
		'app.monster'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Attr = ClassRegistry::init('Attr');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Attr);

		parent::tearDown();
	}

}
