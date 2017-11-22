<div class="container">
	<?php echo $this->element('navtabs-epedido-alta'); ?>
	<?php echo $this->Form->create('Epedido'); ?>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo ('Dar de Alta un Pedido de Produccion'); ?></h3>
  		</div>
	<div class="panel-body">
		<form class="form-horizontal">
		<?php
			echo $this->Form->input('user_id',array('class'=>'form-control'));
			echo $this->Form->input('estado_id',array('class'=>'form-control'));
			echo $this->Form->input('subestado_id',array('class'=>'form-control','label'=>'Estado de Pedido'));
			echo $this->Form->input('producto_id',array('class'=>'form-control'));
			echo $this->Form->input('tipo_id',array('class'=>'form-control'));
			echo $this->Form->input('cantidad',array('class'=>'form-control'));
			echo $this->Form->input('fecha',array('class'=>'form-control'));
		?>
		<br><div class="center-block"><?php echo $this->Form->end(('Enviar')); ?></div>
		</form>
	</div>
	</div>
</div>