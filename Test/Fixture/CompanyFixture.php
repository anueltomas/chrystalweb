<?php
/**
 * Company Fixture
 */
class CompanyFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'companys';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'rif' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150),
		'addresses' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150),
		'phone_1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15),
		'phone_2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 80),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'unique_name' => array('unique' => true, 'column' => 'name'),
			'unique_rif' => array('unique' => true, 'column' => 'rif')
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
			'rif' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'addresses' => 'Lorem ipsum dolor sit amet',
			'phone_1' => 'Lorem ipsum d',
			'phone_2' => 'Lorem ipsum d',
			'email' => 'Lorem ipsum dolor sit amet',
			'created' => '2019-10-23 05:21:33',
			'modified' => '2019-10-23 05:21:33',
			'status' => 1
		),
	);

}
