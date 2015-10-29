<?php
include '../Datos/conexion.php';
/*$ruta = "../Imagenes/";
opendir($ruta);
$destino = $ruta.$_FILES['pdf']['name'];
copy($_FILES['pdf']['tmp_name'],$destino);
$nombre=$_FILES['pdf']['name'];*/
$con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
	mysql_select_db($db,$con)or die("no existe la base de datos");
	mysql_query("INSERT  INTO recursos(area,asignatura,grado,pdf) VALUES ('$_POST[area]','$_POST[asignatura]','$_POST[grado]','$nombre')",$con);
	echo '<div style="font-family:san-serif; font-size:24px; margin-top:20%; margin-left:40%;">Archivo Subido con Exito!!!</div>';
echo '<script>
location.href = "../index.php?op=3";
</script>
'; 
?>
