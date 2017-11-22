<?php
/**
 * CpedidoFixture
 *
 */
class CpedidoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'cliente_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'estado_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'subestado_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'producto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'cantidad' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'fecha' => array('type' => 'date', 'null' => false, 'default' => null),
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
			'cliente_id' => 1,
			'estado_id' => 1,
			'subestado_id' => 1,
			'producto_id' => 1,
			'cantidad' => 1,
			'fecha' => '2017-11-18'
		),
	);

}
