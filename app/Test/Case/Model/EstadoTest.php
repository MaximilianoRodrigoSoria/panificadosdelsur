<?php
App::uses('Estado', 'Model');

/**
 * Estado Test Case
 *
 */
class EstadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.estado',
		'app.cliente',
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
		$this->Estado = ClassRegistry::init('Estado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Estado);

		parent::tearDown();
	}

}
