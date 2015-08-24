<?php
App::uses('CheckOut', 'Model');

/**
 * CheckOut Test Case
 *
 */
class CheckOutTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.check_out',
		'app.user',
		'app.item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CheckOut = ClassRegistry::init('CheckOut');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CheckOut);

		parent::tearDown();
	}

}
