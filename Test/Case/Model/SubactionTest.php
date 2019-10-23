<?php
App::uses('Subaction', 'Model');

/**
 * Subaction Test Case
 */
class SubactionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subaction',
		'app.action',
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
		$this->Subaction = ClassRegistry::init('Subaction');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subaction);

		parent::tearDown();
	}

}
