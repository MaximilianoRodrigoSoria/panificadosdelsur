<?php
App::uses('Cpedido', 'Model');

/**
 * Cpedido Test Case
 *
 */
class CpedidoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cpedido',
		'app.cliente',
		'app.estado',
		'app.epedido',
		'app.user',
		'app.role',
		'app.subestado',
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
		$this->Cpedido = ClassRegistry::init('Cpedido');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cpedido);

		parent::tearDown();
	}

}
