<?php
App::uses('Permission', 'Model');

/**
 * Permission Test Case
 */
class PermissionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.permission',
		'app.aro',
		'app.aco'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Permission = ClassRegistry::init('Permission');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Permission);

		parent::tearDown();
	}

/**
 * testCheck method
 *
 * @return void
 */
	public function testCheck() {
		$this->markTestIncomplete('testCheck not implemented.');
	}

/**
 * testAllow method
 *
 * @return void
 */
	public function testAllow() {
		$this->markTestIncomplete('testAllow not implemented.');
	}

/**
 * testGetAclLink method
 *
 * @return void
 */
	public function testGetAclLink() {
		$this->markTestIncomplete('testGetAclLink not implemented.');
	}

/**
 * testGetAcoKeys method
 *
 * @return void
 */
	public function testGetAcoKeys() {
		$this->markTestIncomplete('testGetAcoKeys not implemented.');
	}

}
