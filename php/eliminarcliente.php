<?php 
include '../php/conexion.php';
if(isset($_GET['id'])){
   $id=$_GET['id'];
  $sSQL="Delete From clientes  Where identificacion='$id'";
   mysql_query($sSQL);
   header("location: opciones.php");
 }  

 ?>