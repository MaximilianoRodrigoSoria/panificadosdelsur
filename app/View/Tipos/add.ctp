<div class="tipos form">
<?php echo $this->Form->create('Tipo'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipo'); ?></legend>
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

		<li><?php echo $this->Html->link(__('List Tipos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Epedidos'), array('controller' => 'epedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Epedido'), array('controller' => 'epedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
