<?php
require_once "../php/conexion.php";

$fechafiliacion = utf8_decode($_POST['fechafiliacion']);
$nombre = utf8_decode($_POST['nombre']);

$apellidos = utf8_decode($_POST['apellidos']);
$id = utf8_decode($_POST['id']);
$direccion = utf8_decode($_POST['direccion']);


$ciudad = utf8_decode($_POST['ciudad']);

$telefono = utf8_decode($_POST['telefono']);




$con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
	mysql_select_db($db,$con)or die("no existe la base de datos");
	mysql_query("INSERT INTO clientes(identificacion,nombres,apellidos,telefono,direccion,fechaafiliacion,ciudad)
	 VALUES ('$id','$nombre','$apellidos','$telefono','$direccion','$fechafiliacion','$ciudad')",$con);

	echo '<div style="font-family:san-serif; font-size:24px; margin-top:20%; margin-left:40%;">Cliente Registrado con Exito!!!</div>
			<br><center><a href="../php/welcome.php?op=5" ><input type="submit" class="btn btn-primary" value="volver"></a></center>';







 
?>
