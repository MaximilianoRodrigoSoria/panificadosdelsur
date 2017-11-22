<div class="container">
	<?php echo $this->element('navtabs-usuario-editar'); ?>
	<?php echo $this->Form->create('User'); ?>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo ('Modificar Usuario'); ?></h3>
  		</div>
		<div class="panel-body">
			<form class="form-horizontal">
			<?php
				echo $this->Form->input('id',array('class'=>'form-control'));
				echo $this->Form->input('role_id',array('class'=>'form-control'));
				echo $this->Form->input('estado_id',array('class'=>'form-control'));
				echo $this->Form->input('username',array('class'=>'form-control'));
				echo $this->Form->input('password',array('class'=>'form-control'));
				echo $this->Form->input('nombre',array('class'=>'form-control'));
				echo $this->Form->input('apellido',array('class'=>'form-control'));
				echo $this->Form->input('dni',array('class'=>'form-control'));
				echo $this->Form->input('telefono',array('class'=>'form-control'));
				echo $this->Form->input('email',array('class'=>'form-control'));
			?>
			<br><div class="center-block"><?php echo $this->Form->end(__('Enviar')); ?></div>
			</form>
		</div>
	</div>
</div>