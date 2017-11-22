<div class="container">
	<?php echo $this->element('navtabs-cpedido-editar'); ?>
	<?php echo $this->Form->create('Cpedido'); ?>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo ('Modificar Pedido de Cliente'); ?></h3>
  		</div>
		<div class="panel-body">
			<form class="form-horizontal">
			<?php
				echo $this->Form->input('id',array('class'=>'form-control'));
				echo $this->Form->input('cliente_id',array('class'=>'form-control'));
				echo $this->Form->input('estado_id',array('class'=>'form-control'));

				echo $this->Form->input('producto_id',array('class'=>'form-control'));
				echo $this->Form->input('cantidad',array('class'=>'form-control'));
				echo $this->Form->input('fecha',array('class'=>'form-control'));
			?>
			<br><div class="center-block"><?php echo $this->Form->end(__('Enviar')); ?></div>
			</form>
		</div>
	</div>
</div>