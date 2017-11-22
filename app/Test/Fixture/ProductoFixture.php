<?php
/**
 * ProductoFixture
 *
 */
class ProductoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'estado_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'formula_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'detalle' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'estado_id' => 1,
			'formula_id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'detalle' => 'Lorem ipsum dolor sit amet'
		),
	);

}
