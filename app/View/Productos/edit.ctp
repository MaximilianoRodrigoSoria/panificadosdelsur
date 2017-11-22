<<div class="container">
	<?php echo $this->element('navtabs-producto-editar'); ?>
	<?php echo $this->Form->create('Producto'); ?>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo ('Modificar Producto'); ?></h3>
  		</div>
		<div class="panel-body">
			<form class="form-horizontal">
			<?php
				echo $this->Form->input('id',array('class'=>'form-control'));
				echo $this->Form->input('estado_id',array('class'=>'form-control'));
				echo $this->Form->input('formula_id',array('class'=>'form-control'));
				echo $this->Form->input('nombre',array('class'=>'form-control'));
				echo $this->Form->input('detalle',array('class'=>'form-control'));
			?>
			<br><div class="center-block"><?php echo $this->Form->end(__('Enviar')); ?></div>
			</form>
		</div>
	</div>
</div>