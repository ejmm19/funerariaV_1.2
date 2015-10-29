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
    <table class='table table-striped'>
  <thead>
    <tr>
      <th><h2>Listado de los Clientes inscritos</h2>
      <a href="welcome.php?op=5" role="button" class="btn btn-success">
      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>   Agregar Clientes</a>
      
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
           
<?php 
include '../php/conexion.php';
  $buscar_asignatura=mysql_query("SELECT * FROM clientes ");
  $i=1;
  while ($muestra=mysql_fetch_array($buscar_asignatura)) {
  echo "<table class='table table-striped table-hover '>
  <thead>
    <tr>
      <th>#</th>
      <th>Cedula</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Telefono</th>     
      <th>Fecha de Afiliación</th>
      <th>Ciudad</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>".$i++."</td>
      <td>".utf8_decode($muestra['identificacion'])."</td>
      <td>".utf8_decode($muestra['nombres'])."</td>
      <td>".utf8_decode($muestra['apellidos'])."</td>
      <td>".utf8_decode($muestra['telefono'])."</td>      
      <td>".utf8_decode($muestra['fechaafiliacion'])."</td>
      <td>".utf8_decode($muestra['ciudad'])."</td>     
      <td>
      <a href='ingresarabono.php?id=".$muestra['identificacion']."' role='button' title='Agregar Abono' class='btn btn-success'>
      <span class='glyphicon glyphicon-plus' aria-hidden='true'></span></a>
      <a href='editarcliente.php?id=".$muestra['identificacion']."' role='button' title='Editar Cliente' class='btn btn-primary'>
      <span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a>            
      <a href='eliminarcliente.php?id=".$muestra['identificacion']."' role='button' title='Eliminar Cliente' class='btn btn-danger'>
      <span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
      </td>
    </tr>
    
  </tbody>
</table>";
} 

               ?>
              
 </td>
    </tr>
    
  </tbody>
</table>

 </body>
    </html>