<div class="estados view">
<h2><?php echo __('Estado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estado'), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estado'), array('action' => 'delete', $estado['Estado']['id']), array(), __('Are you sure you want to delete # %s?', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cpedidos'), array('controller' => 'cpedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cpedido'), array('controller' => 'cpedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Epedidos'), array('controller' => 'epedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Epedido'), array('controller' => 'epedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formulas'), array('controller' => 'formulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formula'), array('controller' => 'formulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Insumos'), array('controller' => 'insumos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insumo'), array('controller' => 'insumos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subestados'), array('controller' => 'subestados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subestado'), array('controller' => 'subestados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clientes'); ?></h3>
	<?php if (!empty($estado['Cliente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estado['Cliente'] as $cliente): ?>
		<tr>
			<td><?php echo $cliente['id']; ?></td>
			<td><?php echo $cliente['estado_id']; ?></td>
			<td><?php echo $cliente['nombre']; ?></td>
			<td><?php echo $cliente['apellido']; ?></td>
			<td><?php echo $cliente['dni']; ?></td>
			<td><?php echo $cliente['telefono']; ?></td>
			<td><?php echo $cliente['email']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clientes', 'action' => 'view', $cliente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clientes', 'action' => 'edit', $cliente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clientes', 'action' => 'delete', $cliente['id']), array(), __('Are you sure you want to delete # %s?', $cliente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cpedidos'); ?></h3>
	<?php if (!empty($estado['Cpedido'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Subestado Id'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estado['Cpedido'] as $cpedido): ?>
		<tr>
			<td><?php echo $cpedido['id']; ?></td>
			<td><?php echo $cpedido['cliente_id']; ?></td>
			<td><?php echo $cpedido['estado_id']; ?></td>
			<td><?php echo $cpedido['subestado_id']; ?></td>
			<td><?php echo $cpedido['producto_id']; ?></td>
			<td><?php echo $cpedido['cantidad']; ?></td>
			<td><?php echo $cpedido['fecha']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cpedidos', 'action' => 'view', $cpedido['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cpedidos', 'action' => 'edit', $cpedido['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cpedidos', 'action' => 'delete', $cpedido['id']), array(), __('Are you sure you want to delete # %s?', $cpedido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cpedido'), array('controller' => 'cpedidos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Epedidos'); ?></h3>
	<?php if (!empty($estado['Epedido'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Subestado Id'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estado['Epedido'] as $epedido): ?>
		<tr>
			<td><?php echo $epedido['id']; ?></td>
			<td><?php echo $epedido['user_id']; ?></td>
			<td><?php echo $epedido['estado_id']; ?></td>
			<td><?php echo $epedido['subestado_id']; ?></td>
			<td><?php echo $epedido['producto_id']; ?></td>
			<td><?php echo $epedido['tipo_id']; ?></td>
			<td><?php echo $epedido['cantidad']; ?></td>
			<td><?php echo $epedido['fecha']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'epedidos', 'action' => 'view', $epedido['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'epedidos', 'action' => 'edit', $epedido['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'epedidos', 'action' => 'delete', $epedido['id']), array(), __('Are you sure you want to delete # %s?', $epedido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Epedido'), array('controller' => 'epedidos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Formulas'); ?></h3>
	<?php if (!empty($estado['Formula'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estado['Formula'] as $formula): ?>
		<tr>
			<td><?php echo $formula['id']; ?></td>
			<td><?php echo $formula['estado_id']; ?></td>
			<td><?php echo $formula['nombre']; ?></td>
			<td><?php echo $formula['descripcion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'formulas', 'action' => 'view', $formula['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'formulas', 'action' => 'edit', $formula['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'formulas', 'action' => 'delete', $formula['id']), array(), __('Are you sure you want to delete # %s?', $formula['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Formula'), array('controller' => 'formulas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Insumos'); ?></h3>
	<?php if (!empty($estado['Insumo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Stock'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estado['Insumo'] as $insumo): ?>
		<tr>
			<td><?php echo $insumo['id']; ?></td>
			<td><?php echo $insumo['estado_id']; ?></td>
			<td><?php echo $insumo['nombre']; ?></td>
			<td><?php echo $insumo['stock']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'insumos', 'action' => 'view', $insumo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'insumos', 'action' => 'edit', $insumo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'insumos', 'action' => 'delete', $insumo['id']), array(), __('Are you sure you want to delete # %s?', $insumo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Insumo'), array('controller' => 'insumos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Productos'); ?></h3>
	<?php if (!empty($estado['Producto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Formula Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Detalle'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estado['Producto'] as $producto): ?>
		<tr>
			<td><?php echo $producto['id']; ?></td>
			<td><?php echo $producto['estado_id']; ?></td>
			<td><?php echo $producto['formula_id']; ?></td>
			<td><?php echo $producto['nombre']; ?></td>
			<td><?php echo $producto['detalle']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'productos', 'action' => 'view', $producto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'productos', 'action' => 'edit', $producto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'productos', 'action' => 'delete', $producto['id']), array(), __('Are you sure you want to delete # %s?', $producto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Roles'); ?></h3>
	<?php if (!empty($estado['Role'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estado['Role'] as $role): ?>
		<tr>
			<td><?php echo $role['id']; ?></td>
			<td><?php echo $role['estado_id']; ?></td>
			<td><?php echo $role['tipo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'roles', 'action' => 'view', $role['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'roles', 'action' => 'edit', $role['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'roles', 'action' => 'delete', $role['id']), array(), __('Are you sure you want to delete # %s?', $role['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Subestados'); ?></h3>
	<?php if (!empty($estado['Subestado'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estado['Subestado'] as $subestado): ?>
		<tr>
			<td><?php echo $subestado['id']; ?></td>
			<td><?php echo $subestado['estado_id']; ?></td>
			<td><?php echo $subestado['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subestados', 'action' => 'view', $subestado['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subestados', 'action' => 'edit', $subestado['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subestados', 'action' => 'delete', $subestado['id']), array(), __('Are you sure you want to delete # %s?', $subestado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subestado'), array('controller' => 'subestados', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tipos'); ?></h3>
	<?php if (!empty($estado['Tipo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estado['Tipo'] as $tipo): ?>
		<tr>
			<td><?php echo $tipo['id']; ?></td>
			<td><?php echo $tipo['nombre']; ?></td>
			<td><?php echo $tipo['estado_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tipos', 'action' => 'view', $tipo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tipos', 'action' => 'edit', $tipo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tipos', 'action' => 'delete', $tipo['id']), array(), __('Are you sure you want to delete # %s?', $tipo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($estado['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estado['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['role_id']; ?></td>
			<td><?php echo $user['estado_id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['nombre']; ?></td>
			<td><?php echo $user['apellido']; ?></td>
			<td><?php echo $user['dni']; ?></td>
			<td><?php echo $user['telefono']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
