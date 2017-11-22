<?php
App::uses('Producto', 'Model');

/**
 * Producto Test Case
 *
 */
class ProductoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.producto',
		'app.estado',
		'app.cliente',
		'app.cpedido',
		'app.subestado',
		'app.epedido',
		'app.user',
		'app.role',
		'app.tipo',
		'app.formula',
		'app.insumo',
		'app.formulas_insumo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Producto = ClassRegistry::init('Producto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Producto);

		parent::tearDown();
	}

}
