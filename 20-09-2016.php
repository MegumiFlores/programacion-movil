<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hola Web M&oacutevil</title>
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
	</head>
	<body>
	<div data-role="page" data-fullcreen="true">
		<div data-role="header">
			<h1>Personas</h1>
		</div>
		<div data-role="content">
			<?php 
			$sql = "SELECT * FROM personas";
			$resultado = $conexion->query($sql); 
			?>
			<ul data-role="listview">
				<?php while($fila=$resultado->fetch_assoc()){
				echo"<li>".$fila['nombres']."</li>";
				}

				?>
			</ul>

		</div>
		<div data-role="footer">
			<h1>UNITEK-PUNO</h1>
		</div>
	</div>
	</body>
</html>