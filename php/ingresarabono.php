<?php 
include '../php/conexion.php';
$id_liente=$_GET['id'];

$consulta = "SELECT * FROM pagosabonos WHERE cedula =".$id_liente;
$cliente_editar = mysql_query($consulta);
$row = mysql_fetch_object($cliente_editar);

$consulta2 = "SELECT * FROM clientes WHERE identificacion =".$id_liente;
$cliente_abono = mysql_query($consulta2);
$sql = mysql_fetch_object($cliente_abono);
if (isset($row->cedula)) {
	$i=0;
  	while ($row = mysql_fetch_object($cliente_editar)) {
  		echo "<tr>
      <td>".$i++."</td>
      <td>".$row->cedula."</td>
      <td>".$row->fechaabono."</td>
      <td>".$row->abono."</td>
      <td>url recibo</td>
    </tr>";
 	echo $row->cedula;
 }
}else{
	echo "<script>alert('El Usuario no Ha realizado ningun Abono');</script>";
}



?>
<!DOCTYPE html>
    <html>
    <head>
      <title>Consulta Afiliación</title>
      <link rel='stylesheet' type='text/css' href='../css/normalize.css' />
    <link rel='stylesheet' type='text/css' href='../css/estilo.css' />
    <link rel='stylesheet' type='text/css' href='../css/demo.css' />
    <link rel='stylesheet' type='text/css' href='../css/component.css' />
    <link rel='stylesheet' type='text/css' href='../css/bootstrap.css' />
    </head>
    <body>
    <h2>Saldo y abonos de <?php echo $sql->nombres; ?></h2>
      <h4 style="margin-top: -34px;margin-left: 86%;">Saldo Total <b style="color: red;"><?php echo $sql->valor; ?></b></h4>
      <hr>
      <br><br>
    <div class="col-md-5"></div>
    <div class="col-md-2">
    	<form action="">
    	
    	<div class="form-group">
      <label for="select" class="control-label">Valor Abono a Realizar</label>
      <input class="form-control"  type="text" name="valorabono"  placeholder="Ingrese el valor del abono">
      <br><br>
      <center><input type="submit" class="btn btn-success" name="abonar" value="Abonar"></center>
    </div>


    </form>
    </div>
    <div class="col-md-5"></div>
    <table class='table table-striped'>
  <thead>
    <tr>
      <th>     	  
      <h2>Historial de Abonos</h2>
      </th>
    </tr>
    
  </thead>
  <tbody>
    <tr>
      <td>
      <table class='table table-striped table-hover '>
  <thead>
    <tr>
      <th>Numero de Abonos</th>    
      <th>Fecha de Abono</th>
      <th>Valor de Abono</th>
      <th>Recibo</th>
    </tr>
  </thead>

  <tbody>
  <?php 
  
    ?>

    
  </tbody>
</table>
