<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	 $conexion=new mysqli("localhost","root","root",'programacion-movil');
	 if ($conexion->connect_errno){
	 	echo "Error al conectar a la BB DD:".
	 		$conexion->connect_errno.",".
	 		$conexion->connect_error;
	 	exit();
	 }else{
	 	$conexion->set_charset("utf8");
	 }
	 ?>
</body>
</html>