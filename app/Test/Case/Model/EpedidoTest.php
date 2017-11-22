<?php
App::uses('Epedido', 'Model');

/**
 * Epedido Test Case
 *
 */
class EpedidoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.epedido',
		'app.user',
		'app.role',
		'app.estado',
		'app.cliente',
		'app.cpedido',
		'app.subestado',
		'app.producto',
		'app.formula',
		'app.insumo',
		'app.tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Epedido = ClassRegistry::init('Epedido');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Epedido);

		parent::tearDown();
	}

}
