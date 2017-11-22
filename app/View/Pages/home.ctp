<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HOME</title>
		<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->css(array('estilos','bootstrap-theme.min','bootstrap.min','footer', 'cake.generic'));
		//echo $this->Html->css(array('bootstrap','estilos','mio'));
		echo $this->Html->script(array('jquery-2.2.4','bootstrap'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
</body>
</html>