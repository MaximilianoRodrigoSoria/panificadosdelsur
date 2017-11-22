<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
	   		<h3 class="panel-title"><?php echo __('Detalle de Pedido de Produccion #'),h($epedido['Epedido']['id']); ?></h3>
		</div>	
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item">
					<h4><?php echo __('User'); ?></h4>
					<p><?php echo $this->Html->link($epedido['User']['username'], array('controller' => 'users', 'action' => 'view', $epedido['User']['id'])); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Estado'); ?></h4>
					<p><?php echo $this->Html->link($epedido['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $epedido['Estado']['id'])); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Estado de Pedido'); ?></h4>
					<p><?php echo $this->Html->link($epedido['Subestado']['nombre'], array('controller' => 'subestados', 'action' => 'view', $epedido['Subestado']['id'])); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Producto'); ?></h4>
					<p><?php echo $this->Html->link($epedido['Producto']['nombre'], array('controller' => 'productos', 'action' => 'view', $epedido['Producto']['id'])); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Tipo'); ?></h4>
					<p><?php echo $this->Html->link($epedido['Tipo']['nombre'], array('controller' => 'tipos', 'action' => 'view', $epedido['Tipo']['id'])); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Cantidad'); ?></h4>
					<p><?php echo h($epedido['Epedido']['cantidad']); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Fecha'); ?></h4>
					<p><?php echo h($epedido['Epedido']['fecha']); ?>&nbsp;</p>
				</li>
			</ul>
		</div>
	</div>
	<div class="center-block"><?php echo $this->Html->link(__('Atras'), array('action' => 'index'), array('type'=>'button','class'=>'btn btn-primary')); ?></div>

</div>