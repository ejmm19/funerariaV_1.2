<?php 
include '../php/conexion.php';
$id_liente=$_GET['id'];

$consulta = "SELECT * FROM clientes WHERE identificacion =".$id_liente;
$cliente_editar = mysql_query($consulta);
$row = mysql_fetch_object($cliente_editar);

 ?>
 <!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>Funeraria El Rosal</title>
        <meta name="description" content="Hover Effects with animated SVG Shapes using Snap.svg" />
        <meta name="keywords" content="animated svg, hover effect, grid, svg shape html, " />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../img/favicon.png"/>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="../css/estilo.css" />
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/component.css" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
        <script src="../js/snap.svg-min.js"></script>
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

</head>
<body>
<div class="container">
 <div class="contenido" style="margin-top:5%;">
                <div class="row">
                <div class="col-md-1">
                    
                </div>
                <div class="col-md-10">
                <br><br>
                

                <br><br>
<center>
  <h2>Registrar Afiliación</h2>
</center>
<form action="geditado.php" method="post" name="form">

<div class="row">
  <div class="col-md-3">
  <div class="form-group">
      <label for="select" class="control-label">Fecha de Afiliación:</label>
      <input class="form-control "  type="date" name="fechafiliacion" value="<?php echo $row->fechaafiliacion ?>">
      
    </div>
</div>
<div class="col-md-9">
  
</div>
</div>


 <div class="col-md-6">
   
   <div class="form-group">
  <label class="control-label " for="focusedInput">Nombres:</label>
  <input class="form-control "  type="text" name="nombre" value="<?php echo $row->nombres?>">
  <input class="form-control "  type="hidden" name="id_liente" value="<?php echo $id_liente?>">
  </div>

<div class="form-group">
      <label for="select" class="control-label">Cedula N°:</label>
      <input class="form-control" type="text" name="id" value="<?php echo $row->identificacion?>">
    </div>

   
</div>

<div class="col-md-6">
<div class="form-group">
  <label class="control-label" for="focusedInput">Apellidos:</label>
  <input class="form-control" type="text" name="apellidos" value="<?php echo $row->apellidos?>">
</div>
<div class="form-group">
      <label class="control-label" for="focusedInput">Dirección:</label>
      <input class="form-control" type="text" name="direccion" value="<?php echo $row->direccion?>">
    </div>

 
 </div>

 <div class="col-md-6">
  
   
    
    
    <div class="form-group">
      <label class="control-label" for="focusedInput">Telefono:</label>
      <input class="form-control" type="text" name="telefono" value="<?php echo $row->telefono?>">
    </div>
</div>



 <div class="col-md-6">
 <div class="form-group">
      <label for="select" class="control-label">Ciudad:</label>
      <input class="form-control" type="text" name="ciudad" value="<?php echo $row->ciudad?>">
    </div>
</div>

<br><br><br><br><br><br><br><br><br>
<div>
  <center>
  <a href="welcome.php?op=7" role="button" class="btn btn-default">Átrás</a>
  <input type="submit" class="btn btn-primary" value="Guardar" name="guardar">
  </center>
</div>
 </form>
 
 </div>
                
                </div>
                <div class="col-md-1">
                    
                </div>
                <br><br><br><br><br>
            </div>
            
</div>
<body>
</html>
