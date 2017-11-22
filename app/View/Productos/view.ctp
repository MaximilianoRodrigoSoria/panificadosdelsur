<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
	   		<h3 class="panel-title"><?php echo __('Detalle de Producto #'),h($producto['Producto']['id']); ?></h3>
		</div>	
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item">
					<h4><?php echo __('Estado'); ?></h4>
					<p><?php echo $this->Html->link($producto['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $producto['Estado']['id'])); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Formula'); ?></h4>
					<p><?php echo $this->Html->link($producto['Formula']['estado_id'], array('controller' => 'formulas', 'action' => 'view', $producto['Formula']['id'])); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Nombre'); ?></h4>
					<p><?php echo h($producto['Producto']['nombre']); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Detalle'); ?></h4>
					<p><?php echo h($producto['Producto']['detalle']); ?>&nbsp;</p>
				</li>
			</ul>
		</div>
	</div>
	<h3><?php echo __('Pedidos de Cliente'); ?></h3>
	<?php if (!empty($producto['Cpedido'])): ?>
	<div class="table-responsive">
		<table class="table table-bordered">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Cliente Id'); ?></th>
			<th><?php echo __('Estado Id'); ?></th>
			<th><?php echo __('Subestado Id'); ?></th>
			<th><?php echo __('Producto Id'); ?></th>
			<th><?php echo __('Cantidad'); ?></th>
			<th><?php echo __('Fecha'); ?></th>
		</tr>
		<?php foreach ($producto['Cpedido'] as $cpedido): ?>
			<tr>
				<td><?php echo $cpedido['id']; ?></td>
				<td><?php echo $cpedido['cliente_id']; ?></td>
				<td><?php echo $cpedido['estado_id']; ?></td>
				<td><?php echo $cpedido['subestado_id']; ?></td>
				<td><?php echo $cpedido['producto_id']; ?></td>
				<td><?php echo $cpedido['cantidad']; ?></td>
				<td><?php echo $cpedido['fecha']; ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	</div>
	<?php endif; ?>

	<h3><?php echo __('Pedidos de Produccion'); ?></h3>
	<?php if (!empty($producto['Epedido'])): ?>
	<div class="table-responsive">
		<table class="table table-bordered">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('User Id'); ?></th>
			<th><?php echo __('Estado Id'); ?></th>
			<th><?php echo __('Subestado Id'); ?></th>
			<th><?php echo __('Producto Id'); ?></th>
			<th><?php echo __('Tipo Id'); ?></th>
			<th><?php echo __('Cantidad'); ?></th>
			<th><?php echo __('Fecha'); ?></th>
		</tr>
		<?php foreach ($producto['Epedido'] as $epedido): ?>
			<tr>
				<td><?php echo $epedido['id']; ?></td>
				<td><?php echo $epedido['user_id']; ?></td>
				<td><?php echo $epedido['estado_id']; ?></td>
				<td><?php echo $epedido['subestado_id']; ?></td>
				<td><?php echo $epedido['producto_id']; ?></td>
				<td><?php echo $epedido['tipo_id']; ?></td>
				<td><?php echo $epedido['cantidad']; ?></td>
				<td><?php echo $epedido['fecha']; ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	</div>
	<?php endif; ?>
	<div class="center-block"><?php echo $this->Html->link(__('Atras'), array('action' => 'index'), array('type'=>'button','class'=>'btn btn-primary')); ?></div>
</div>
