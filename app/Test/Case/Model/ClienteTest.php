<?php
App::uses('Cliente', 'Model');

/**
 * Cliente Test Case
 *
 */
class ClienteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cliente',
		'app.estado',
		'app.cpedido',
		'app.subestado',
		'app.epedido',
		'app.user',
		'app.role',
		'app.producto',
		'app.formula',
		'app.insumo',
		'app.formulas_insumo',
		'app.tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cliente = ClassRegistry::init('Cliente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cliente);

		parent::tearDown();
	}

}
