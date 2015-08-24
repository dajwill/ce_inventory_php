<?php
App::uses('AppModel', 'Model');
/**
 * Item Model
 *
 */
class Item extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'model_number' => array(
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

	public $hasMany = array(
		'CheckOut' => array(
			'className' => 'CheckOut',
			'foreignKey' => 'user_id',
			'dependent' => false,
		),
	);

	public function check_out($id = null) {
		$data = array(
			'Item' => array(
				'id' => $id,
				'checked_out' => true
			)
		);
		$this->save($data);
		$item = $this->findById($id);
	}

	public function get_check_outs() {
		$check_outs = $this->CheckOut;
    return $check_outs;
	}
}
