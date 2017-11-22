<?php

	$this->Paginator->options(array(
		'update' => '#contenedor-insumos',));

?>

<div id="contenedor-insumos">

<div class="container">
			<?php  if(($current_user['Role']['tipo'])=='Super Administrador' or ($current_user['Role']['tipo'])=='Encargado de Produccion'): ?>
		<div class="row">
             <div class="col-md-8 col-xs-12">
				<?php echo $this->element('navtabs-insumo-minimo'); ?>
			</div>	
              
			
		<div class="col-xs-10 col-md-4">
				<?php echo $this->Form->create('Insumo', array('type'=>'GET', 'class'=>'form-inline', 'url'=>array('controller'=>'insumos','action'=>'search'))); ?>
	
					<div class="form-group">	
					<?php echo $this->Form->input('search',array('label'=>false, 'div'=>false, 'id'=>'search','class'=>'form-control','autocomplete'=>'off','placeholder'=>'Buscar Insumo...')); ?>
					</div>
					<?php echo $this->Form->button('',array('div'=>false, 'class'=>'btn btn-primary glyphicon glyphicon-search')); ?>
					<?php echo $this->Form->end(); ?>
				</div>
			</div>
			<br>
		 <?php  endif; ?>

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Insumos</h3>
		</div>
		<div class="panel-body">
		<div class="table-responsive">
		<table class="table table-hover">
			<thead>
			<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
					<th><?php echo $this->Paginator->sort('nombre'); ?></th>
					<th><?php echo $this->Paginator->sort('stock'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($insumos as $insumo): ?>
			<tr>
				<td><?php echo h($insumo['Insumo']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($insumo['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $insumo['Estado']['id'])); ?>
				</td>
				<td><?php echo h($insumo['Insumo']['nombre']); ?>&nbsp;</td>
				<td><?php echo h($insumo['Insumo']['stock']); ?>&nbsp;</td>
				<td class="actions">
					<div class="btn-group">
					  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					     <span class="glyphicon glyphicon-edit"></span>
					  </button>
					  <ul class="dropdown-menu dropdown-menu-right">
					    <li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $insumo['Insumo']['id'])); ?></li>
					    <li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $insumo['Insumo']['id'])); ?></li>
					    <li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $insumo['Insumo']['id']), array(), __('Estas seguro que queres borrar el usuario # %s?', $insumo['Insumo']['id'])); ?></li>
					    
					  </ul>
				</td>
			</tr>
		<?php endforeach; ?>
			</tbody>
			</table>
		</div>
		</div>
		<p class="text-center"><br><?php echo $this->Paginator->counter(array('format' => __('Pagina {:page} de {:pages}, total {:count}')));?>	</p>
	</div>
	<ul class="pagination center-block">
		<li><?php echo $this->Paginator->prev('< ' . __(''), array(), null, array('class' => 'prev disabled btn btn-primary')); ?></li>
		<li><?php echo $this->Paginator->numbers(array('separator' => '', 'tag'=>'li','currentTag' => 'a', 'currentClass' => 'active')); ?></li>
		<li><?php echo $this->Paginator->next(__('') . ' >', array(), null, array('class' => 'next disabled btn btn-primary'));	?></li>
	</ul>

</div>
</div>