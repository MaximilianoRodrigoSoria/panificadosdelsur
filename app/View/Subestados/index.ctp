<div class="subestados index">
	<h2><?php echo __('Subestados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($subestados as $subestado): ?>
	<tr>
		<td><?php echo h($subestado['Subestado']['id']); ?>&nbsp;</td>
		<td><?php echo h($subestado['Subestado']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subestado['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $subestado['Estado']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subestado['Subestado']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subestado['Subestado']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subestado['Subestado']['id']), array(), __('Are you sure you want to delete # %s?', $subestado['Subestado']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Subestado'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cpedidos'), array('controller' => 'cpedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cpedido'), array('controller' => 'cpedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Epedidos'), array('controller' => 'epedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Epedido'), array('controller' => 'epedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
