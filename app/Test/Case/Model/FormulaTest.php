<?php
App::uses('Formula', 'Model');

/**
 * Formula Test Case
 *
 */
class FormulaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.formula',
		'app.estado',
		'app.cliente',
		'app.cpedido',
		'app.subestado',
		'app.epedido',
		'app.user',
		'app.role',
		'app.producto',
		'app.tipo',
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
		$this->Formula = ClassRegistry::init('Formula');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Formula);

		parent::tearDown();
	}

}
