<?php

	$this->Paginator->options(array(
		'update' => '#contenedor-epedidos',));

?>

<div id="contenedor-epedidos">

<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<?php echo $this->element('navtabs-epedido-consulta'); ?>
			</div>	
		
		</div>

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Pedidos de Produccion</h3>
		</div>
		<div class="panel-body">
		<div class="table-responsive">
		<table class="table table-hover">
		<thead>
		<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_pedido'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($epedidos as $epedido): ?>
		<tr>
			<td><?php echo h($epedido['Epedido']['id']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($epedido['User']['username'], array('controller' => 'users', 'action' => 'view', $epedido['User']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Html->link($epedido['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $epedido['Estado']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Html->link($epedido['Subestado']['nombre'], array('controller' => 'subestados', 'action' => 'view', $epedido['Subestado']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Html->link($epedido['Producto']['nombre'], array('controller' => 'productos', 'action' => 'view', $epedido['Producto']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Html->link($epedido['Tipo']['nombre'], array('controller' => 'tipos', 'action' => 'view', $epedido['Tipo']['id'])); ?>
			</td>
			<td><?php echo h($epedido['Epedido']['cantidad']); ?>&nbsp;</td>
			<td><?php echo h($epedido['Epedido']['fecha']); ?>&nbsp;</td>
			<td class="actions">
				<div class="btn-group">
				  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				     <span class="glyphicon glyphicon-edit"></span>
				  </button>
				  <ul class="dropdown-menu dropdown-menu-right">
				    <li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $epedido['Epedido']['id'])); ?></li>
				    <li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $epedido['Epedido']['id'])); ?></li>
				    <li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $epedido['Epedido']['id']), array(), __('Estas seguro que queres borrar el usuario # %s?', $epedido['Epedido']['id'])); ?></li>
				    
				  </ul>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table>
		</div>
		</div>
		<p class="text-center"><br><?php echo $this->Paginator->counter(array('format' => __('Pagina {:page} de {:pages}, total {:count}')));?>	</p>
		</div>
	</div>
	<ul class="pagination center-block">
		<li><?php echo $this->Paginator->prev('< ' . __(''), array(), null, array('class' => 'prev disabled btn btn-primary')); ?></li>
		<li><?php echo $this->Paginator->numbers(array('separator' => '', 'tag'=>'li','currentTag' => 'a', 'currentClass' => 'active')); ?></li>
		<li><?php echo $this->Paginator->next(__('') . ' >', array(), null, array('class' => 'next disabled btn btn-primary'));	?></li>
	</ul>
</div>
</div>