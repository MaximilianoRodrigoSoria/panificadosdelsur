<div class="container">
	<?php echo $this->element('navtabs-insumo-alta'); ?>
	<?php echo $this->Form->create('Insumo'); ?>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo ('Dar de Alta un Insumo'); ?></h3>
  		</div>
	<div class="panel-body">
		<form class="form-horizontal">
			<?php
				echo $this->Form->input('estado_id',array('class'=>'form-control'));
				echo $this->Form->input('nombre',array('class'=>'form-control'));
				echo $this->Form->input('stock',array('class'=>'form-control'));
				//echo $this->Form->input('Formula');
			?>
			<br><div class="center-block"><?php echo $this->Form->end(('Enviar')); ?></div>
		</form>
	</div>
	</div>
</div>