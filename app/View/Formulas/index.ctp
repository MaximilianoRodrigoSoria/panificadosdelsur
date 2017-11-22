<?php

	echo $this->Html->script(array('searchFormula'));
	echo $this->fetch('script');

 ?>

<?php

	$this->Paginator->options(array(
		'update' => '#contenedor-formulas',));

?>

<div id="contenedor-formulas">

<div class="container">
	<div class="row">
			<div class="col-md-7 col-xs-12">
				<?php echo $this->element('navtabs-formula-consulta'); ?>
			</div>	
			<?php echo $this->Form->create('Formula', array('type'=>'GET', 'url'=>array('controller'=>'formulas','action'=>'search'))); ?>
			<div class="col-xs-10 col-md-4">
					<div class="form-group">	
					<?php echo $this->Form->input('search',array('label'=>false, 'div'=>false, 'id'=>'searchFormula','class'=>'form-control','autocomplete'=>'off','placeholder'=>'Buscar Formula...')); ?>
					</div>
			</div>
			<div class="col-md-1 col-xs-2">
					<?php echo $this->Form->button('',array('div'=>false, 'class'=>'pull-left btn btn-primary glyphicon glyphicon-search')); ?>
					
			</div>
			<?php echo $this->Form->end(); ?>
			</div>
			<br>

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
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($formulas as $formula): ?>
		<tr>
			<td><?php echo h($formula['Formula']['id']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($formula['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $formula['Estado']['id'])); ?>
			</td>
			<td><?php echo h($formula['Formula']['nombre']); ?>&nbsp;</td>
			<td><?php echo h($formula['Formula']['descripcion']); ?>&nbsp;</td>
			<td class="actions">
				<div class="btn-group">
			  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			     <span class="glyphicon glyphicon-edit"></span>
			  </button>
			  <ul class="dropdown-menu dropdown-menu-right">
			    <li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $formula['Formula']['id'])); ?></li>
			    <li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $formula['Formula']['id'])); ?></li>
			    <li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $formula['Formula']['id']), array(), __('Estas seguro que queres borrar el usuario # %s?', $formula['Formula']['id'])); ?></li>
			    
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