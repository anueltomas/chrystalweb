<?php
App::uses('CompanysUser', 'Model');

/**
 * CompanysUser Test Case
 */
class CompanysUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.companys_user',
		'app.user',
		'app.company'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CompanysUser = ClassRegistry::init('CompanysUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompanysUser);

		parent::tearDown();
	}

}
