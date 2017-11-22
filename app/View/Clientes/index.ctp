<?php

	echo $this->Html->script(array('searchCliente'));
	echo $this->fetch('script');

 ?>
<?php

	$this->Paginator->options(array(
		'update' => '#contenedor-clientes',));

?>

<div id="contenedor-clientes">

<div class="container">
		<div class="row">
			<div class="col-md-7 col-xs-12">
				<?php echo $this->element('navtabs-cliente-consulta'); ?>
			</div>	
			<?php echo $this->Form->create('Cliente', array('type'=>'GET', 'url'=>array('controller'=>'clientes','action'=>'search'))); ?>
			<div class="col-xs-10 col-md-4">
					<div class="form-group">	
					<?php echo $this->Form->input('search',array('label'=>false, 'div'=>false, 'id'=>'searchCliente','class'=>'form-control','autocomplete'=>'off','placeholder'=>'Buscar Cliente...')); ?>
					</div>
			</div>
			<div class="col-md-1 col-xs-2">
					<?php echo $this->Form->button('',array('div'=>false, 'class'=>'pull-left btn btn-primary glyphicon glyphicon-search')); ?>
					
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Clientes</h3>
		</div>
		<div class="panel-body">
		<div class="table-responsive">
		<table class="table table-hover">
		<thead>
		<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('dni'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($clientes as $cliente): ?>
		<tr>
			<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($cliente['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $cliente['Estado']['id'])); ?>
			</td>
			<td><?php echo h($cliente['Cliente']['nombre']); ?>&nbsp;</td>
			<td><?php echo h($cliente['Cliente']['apellido']); ?>&nbsp;</td>
			<td><?php echo h($cliente['Cliente']['dni']); ?>&nbsp;</td>
			<td><?php echo h($cliente['Cliente']['telefono']); ?>&nbsp;</td>
			<td><?php echo h($cliente['Cliente']['email']); ?>&nbsp;</td>
			<td class="actions">
							<!-- Single button -->
			<div class="btn-group">
			  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			     <span class="glyphicon glyphicon-edit"></span>
			  </button>
			  <ul class="dropdown-menu dropdown-menu-right">
			    <li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $cliente['Cliente']['id'])); ?></li>
			    <li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cliente['Cliente']['id'])); ?></li>
			    <li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Estas seguro que queres borrar el usuario # %s?', $cliente['Cliente']['id'])); ?></li>
			    
			  </ul>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
		</table>
		</div>
		<p class="text-center"><br><?php echo $this->Paginator->counter(array('format' => __('Pagina {:page} de {:pages}, total {:count}')));?>	</p>
		</div>
	</div>
	<ul class="pagination center-block">
		<li><?php echo $this->Paginator->prev('< ' . __(''), array(), null, array('class' => 'prev disabled btn btn-primary')); ?></li>
		<li><?php echo $this->Paginator->numbers(array('separator' => '', 'tag'=>'li','currentTag' => 'a', 'currentClass' => 'active')); ?></li>
		<li><?php echo $this->Paginator->next(__('') . ' >', array(), null, array('class' => 'next disabled btn btn-primary'));	?></li>
	</ul>
</div>
</div>
