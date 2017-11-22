<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
	   		<h3 class="panel-title"><?php echo __('Detalle de Formula #'),h($formula['Formula']['id']); ?></h3>
		</div>	
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item">
					<h4><?php echo __('Estado'); ?></h4>
					<p><?php echo $this->Html->link($formula['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $formula['Estado']['id'])); ?>&nbsp;
					</p>
					</li>
				<li class="list-group-item">
					<h4><?php echo __('Nombre'); ?></h4>
					<p><?php echo h($formula['Formula']['nombre']); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Descripcion'); ?></h4>
					<p><?php echo h($formula['Formula']['descripcion']); ?>&nbsp;</p>
				</li>
			</ul>
		</div>
	</div>
	
	<h3><?php echo __('Productos Relacionados'); ?></h3>
	<?php if (!empty($formula['Producto'])): ?>
	<div class="table-responsive">
		<table class="table table-bordered">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Estado Id'); ?></th>
			<th><?php echo __('Formula Id'); ?></th>
			<th><?php echo __('Nombre'); ?></th>
			<th><?php echo __('Detalle'); ?></th>
		</tr>
		<?php foreach ($formula['Producto'] as $producto): ?>
			<tr>
				<td><?php echo $producto['id']; ?></td>
				<td><?php echo $producto['estado_id']; ?></td>
				<td><?php echo $producto['formula_id']; ?></td>
				<td><?php echo $producto['nombre']; ?></td>
				<td><?php echo $producto['detalle']; ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>

	<h3><?php echo __('Insumos Relacionados'); ?></h3>
	<?php if (!empty($formula['Insumo'])): ?>
	<div class="table-responsive">
		<table class="table table-bordered">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Estado Id'); ?></th>
			<th><?php echo __('Nombre'); ?></th>
			<th><?php echo __('Stock'); ?></th>
		</tr>
		<?php foreach ($formula['Insumo'] as $insumo): ?>
			<tr>
				<td><?php echo $insumo['id']; ?></td>
				<td><?php echo $insumo['estado_id']; ?></td>
				<td><?php echo $insumo['nombre']; ?></td>
				<td><?php echo $insumo['stock']; ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
	</div>
	<div class="center-block"><?php echo $this->Html->link(__('Atras'), array('action' => 'index'), array('type'=>'button','class'=>'btn btn-primary')); ?></div>
</div>
