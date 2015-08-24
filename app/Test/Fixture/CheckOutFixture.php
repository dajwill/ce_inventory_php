<?php
/**
 * CheckOutFixture
 *
 */
class CheckOutFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 16, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 16, 'unsigned' => false),
		'item_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 16, 'unsigned' => false),
		'check_out_date' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'return_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'item_id' => 1,
			'check_out_date' => 1440186162,
			'return_date' => '2015-08-21'
		),
	);

}
