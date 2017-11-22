<?php
App::uses('Subestado', 'Model');

/**
 * Subestado Test Case
 *
 */
class SubestadoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subestado',
		'app.estado',
		'app.cliente',
		'app.cpedido',
		'app.producto',
		'app.formula',
		'app.insumo',
		'app.formulas_insumo',
		'app.epedido',
		'app.user',
		'app.role',
		'app.tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subestado = ClassRegistry::init('Subestado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subestado);

		parent::tearDown();
	}

}
