<br><br>
<center>
  <h2>Consulta de Afiliación</h2>
</center>
<br>
<br>
<br>
<div class="row">
  
<div class="col-md-3">
  
</div>
<form action="" method="post">
  <div class="col-md-6">
  <label>Cedula:</label>
  <input type="text" class="form-control" name="cedula">
  <br><br>
  <center>
    
 <input type="submit" class="btn btn-primary" name="buscar">
  <center>
  </div>
</form>
<div class="col-md-3">
  
</div> 
</div>

<?php 
include '../php/conexion.php';

if (isset($_POST['buscar'])) {
	$buscar_asignatura=mysql_query("SELECT * FROM clientes WHERE identificacion = '$_POST[cedula]' ");
	
	while ($muestra=mysql_fetch_array($buscar_asignatura)) {
	echo "
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


    <table class='table table-striped table-hover '>
  <thead>
    <tr>
      <th>Cedula</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Telefono</th>
      <th>Dirección</th>
      <th>Fecha de Afiliación</th>
      <th>Vendedor</th>
      <th>Ciudad</th>
      <th>Dias de Cobro</th>
      <th>Valor de Deuda</th>
      <th>Agregar Abono</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>".utf8_decode($muestra['identificacion'])."</td>
      <td>".utf8_decode($muestra['nombres'])."</td>
      <td>".utf8_decode($muestra['apellidos'])."</td>
      <td>".utf8_decode($muestra['telefono'])."</td>
      <td>".utf8_decode($muestra['direccion'])."</td>
      <td>".utf8_decode($muestra['fechaafiliacion'])."</td>
      <td>".utf8_decode($muestra['vendedor'])."</td>
      <td>".utf8_decode($muestra['ciudad'])."</td>
      <td>".utf8_decode($muestra['diasc'])."</td>
      <td>".utf8_decode($muestra['valor'])."</td>
      <td><input type='submit' class='btn btn-primary' value='Opciones'></td>
    </tr>
    
  </tbody>
</table> 
    
    </body>
    </html>
	";
}
}else{
	echo "no encontrado";
}

	



 ?>