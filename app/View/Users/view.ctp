<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
	   		<h3 class="panel-title"><?php echo __('Detalle de Usuario #'),h($user['User']['id']); ?></h3>
		</div>	
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item">
					<h4><?php echo __('Rol'); ?></h4>
					<p><?php echo $this->Html->link($user['Role']['tipo'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
							&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Estado'); ?></h4>
					<p><?php echo $this->Html->link($user['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $user['Estado']['id'])); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Username'); ?></h4>
					<p><?php echo h($user['User']['username']); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Nombre'); ?></h4>
					<p><?php echo h($user['User']['nombre']); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Apellido'); ?></h4>
					<p><?php echo h($user['User']['apellido']); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Dni'); ?></h4>
					<p><?php echo h($user['User']['dni']); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Telefono'); ?></h4>
					<p><?php echo h($user['User']['telefono']); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Email'); ?></h4>
					<p><?php echo h($user['User']['email']); ?>&nbsp;</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="center-block"><?php echo $this->Html->link(__('Atras'), array('action' => 'index'), array('type'=>'button','class'=>'btn btn-primary')); ?></div>
</div>
