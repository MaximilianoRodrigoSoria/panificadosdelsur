<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
	   		<h3 class="panel-title"><?php echo __('Detalle de Cliente #'),h($cliente['Cliente']['id']); ?></h3>
		</div>	
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item">
					<h4><?php echo __('Estado'); ?></h4>
					<p><?php echo $this->Html->link($cliente['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $cliente['Estado']['id'])); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Nombre'); ?></h4>
					<p><?php echo h($cliente['Cliente']['nombre']); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Apellido'); ?></h4>
					<p><?php echo h($cliente['Cliente']['apellido']); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Dni'); ?></h4>
					<p><?php echo h($cliente['Cliente']['dni']); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Telefono'); ?></h4>
					<p><?php echo h($cliente['Cliente']['telefono']); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Email'); ?></h4>
					<p><?php echo h($cliente['Cliente']['email']); ?>&nbsp;</p>
				</li>
			</ul>
		</div>
	</div>
	
	<h3><?php echo __('Pedidos Relacionados'); ?></h3>
		<?php if (!empty($cliente['Cpedido'])): ?>
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
	<?php foreach ($cliente['Cpedido'] as $cpedido): ?>
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
	<?php endif; ?>
	</div>

	<div class="center-block"><?php echo $this->Html->link(__('Atras'), array('action' => 'index'), array('type'=>'button','class'=>'btn btn-primary')); ?></div>

</div>
