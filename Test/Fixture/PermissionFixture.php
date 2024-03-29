<?php
/**
 * Permission Fixture
 */
class PermissionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'allowed' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'supervisor_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'action_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'rol_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'allowed' => 1,
			'supervisor_id' => 1,
			'action_id' => 1,
			'rol_id' => 1
		),
	);

}
