<?php
    include '../php/conexion.php';
    $con=mysql_connect($server,$username,$password)or die("problemas al conectar al servidor");
    mysql_select_db($db,$con)or die("no existe la base de datos");

if (isset($_POST['guardar'])) {
    $id_liente = $_POST['id_liente'];
    $nombre = utf8_decode($_POST['nombre']);    
    $apellidos = utf8_decode($_POST['apellidos']);
    $id = utf8_decode($_POST['id']);
    $direccion = utf8_decode($_POST['direccion']);    
    $ciudad = utf8_decode($_POST['ciudad']);    
    $telefono = utf8_decode($_POST['telefono']);

   $ssql = "update clientes set identificacion = '$id' , nombres = '$nombre' , apellidos = '$apellidos', 
    telefono = '$telefono', direccion = '$direccion', ciudad = '$ciudad' where  identificacion = '$id_liente'";
    mysql_query($ssql);
    
    
    echo '<div style="font-family:san-serif; font-size:24px; margin-top:20%; margin-left:40%;">Cliente Actualizado con Exito!!!</div>
            <br><center><a href="../php/welcome.php?op=7" ><input type="submit" class="btn btn-primary" value="volver"></a></center>';
}else{
    echo "no hay nada";
}

  ?>