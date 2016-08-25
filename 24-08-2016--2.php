<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php
		echo var_dump($_GET)['textNombre'];
		echo "<br>";
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		echo var_dump($_GET)['submitHola'];
	?>
	</body>
</html>