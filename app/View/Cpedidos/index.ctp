<?php

	$this->Paginator->options(array(
		'update' => '#contenedor-cpedidos',));

?>

<div id="contenedor-cpedidos">
<div class="container">
	<form action="/hms/accommodations" method="GET"> 
		<div class="row">
		<?php  if(($current_user['Role']['tipo'])=='Super Administrador' or ($current_user['Role']['tipo'])=='Empleado de Ventas'): ?> 
			<div class="col-md-12 col-xs-12">
				<?php echo $this->element('navtabs-cpedido-consulta'); ?>
			</div>	
		<?php endif; ?>
		</div>
	</form>

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Pedidos de Cliente</h3>
		</div>
		<div class="panel-body">
		<div class="table-responsive">
		<table class="table table-hover">
				<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_pedido'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<?php  if(($current_user['Role']['tipo'])=='Super Administrador' or ($current_user['Role']['tipo'])=='Empleado de Ventas'): ?> 
			<th class="actions"><?php echo __('Acciones'); ?></th>
		<?php endif;?>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($cpedidos as $cpedido): ?>
			<tr>
				<td><?php echo h($cpedido['Cpedido']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($cpedido['Cliente']['dni'], array('controller' => 'clientes', 'action' => 'view', $cpedido['Cliente']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($cpedido['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $cpedido['Estado']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($cpedido['Subestado']['nombre'], array('controller' => 'subestados', 'action' => 'view', $cpedido['Subestado']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($cpedido['Producto']['nombre'], array('controller' => 'productos', 'action' => 'view', $cpedido['Producto']['id'])); ?>
				</td>
				<td><?php echo h($cpedido['Cpedido']['cantidad']); ?>&nbsp;</td>
				<td><?php echo h($cpedido['Cpedido']['fecha']); ?>&nbsp;</td>
				<?php  if(($current_user['Role']['tipo'])=='Super Administrador' or ($current_user['Role']['tipo'])=='Empleado de Ventas'): ?> 
				<td class="actions">
					<div class="btn-group">
					  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					     <span class="glyphicon glyphicon-edit"></span>
					  </button>
					  <ul class="dropdown-menu dropdown-menu-right">
					    <li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $cpedido['Cpedido']['id'])); ?></li>
					    <li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cpedido['Cpedido']['id'])); ?></li>
					    <li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $cpedido['Cpedido']['id']), array(), __('Estas seguro que queres borrar el usuario # %s?', $cpedido['Cpedido']['id'])); ?></li>
					    
					  </ul>
				</td>
			<?php endif;?>
			</tr>
		<?php endforeach; ?>
			</tbody>
			</table>
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