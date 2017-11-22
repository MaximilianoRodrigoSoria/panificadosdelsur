<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
	   		<h3 class="panel-title"><?php echo __('Detalle de Pedido de Cliente #'),h($cpedido['Cpedido']['id']); ?></h3>
		</div>	
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item">
					<h4><?php echo __('Cliente'); ?></h4>
					<p><?php echo $this->Html->link($cpedido['Cliente']['dni'], array('controller' => 'clientes', 'action' => 'view', $cpedido['Cliente']['id'])); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Estado'); ?></h4>
					<p><?php echo $this->Html->link($cpedido['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $cpedido['Estado']['id'])); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Estado de Pedido'); ?></h4>
					<p><?php echo $this->Html->link($cpedido['Subestado']['nombre'], array('controller' => 'subestados', 'action' => 'view', $cpedido['Subestado']['id'])); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Producto'); ?></h4>
					<p><?php echo $this->Html->link($cpedido['Producto']['nombre'], array('controller' => 'productos', 'action' => 'view', $cpedido['Producto']['id'])); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Cantidad'); ?></h4>
					<p><?php echo h($cpedido['Cpedido']['cantidad']); ?>&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Fecha'); ?></h4>
					<p><?php echo h($cpedido['Cpedido']['fecha']); ?>&nbsp;</p>
				</li>
			</ul>
		</div>
	</div>	 
	
	<div class="center-block"><?php echo $this->Html->link(__('Atras'), array('action' => 'index'), array('type'=>'button','class'=>'btn btn-primary')); ?></div>
</div>