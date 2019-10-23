<?php
App::uses('RolsUser', 'Model');

/**
 * RolsUser Test Case
 */
class RolsUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rols_user',
		'app.rol',
		'app.permission',
		'app.aro',
		'app.aco',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RolsUser = ClassRegistry::init('RolsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RolsUser);

		parent::tearDown();
	}

}
