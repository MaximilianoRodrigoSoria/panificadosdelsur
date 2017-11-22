<div class="subestados form">
<?php echo $this->Form->create('Subestado'); ?>
	<fieldset>
		<legend><?php echo __('Add Subestado'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('estado_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subestados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cpedidos'), array('controller' => 'cpedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cpedido'), array('controller' => 'cpedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Epedidos'), array('controller' => 'epedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Epedido'), array('controller' => 'epedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
