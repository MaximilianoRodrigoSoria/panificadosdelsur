<?php
App::uses('Tipo', 'Model');

/**
 * Tipo Test Case
 *
 */
class TipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo',
		'app.estado',
		'app.cliente',
		'app.cpedido',
		'app.subestado',
		'app.epedido',
		'app.producto',
		'app.formula',
		'app.insumo',
		'app.role',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tipo = ClassRegistry::init('Tipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tipo);

		parent::tearDown();
	}

}
