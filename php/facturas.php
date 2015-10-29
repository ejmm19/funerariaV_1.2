<br><br>
<center>
  <h2>Generar Facturas</h2>
</center>
<form action="generador.php" method="post" name="form">
 <div class="col-md-6">
   
   <div class="form-group">
  <label class="control-label" for="focusedInput">Fecha:</label>
  <input class="form-control"  type="date" name="fecha">
</div>

   <div class="form-group">
  <label class="control-label col-lg-3">Señor(a):</label>
  <div class="col-lg-9">
<select name='nombre' class="form-control">
  <?php 
  include '../php/conexion.php';

   $buscar_clientes=mysql_query("SELECT * FROM clientes ");
    while ($muestra=mysql_fetch_array($buscar_clientes)) {  
    echo "<option value='".$muestra['nombres']."'>".$muestra['nombres'],$muestra['apellidos']."</option>";
    
    }
   ?>
   </select>
</div>
</div>

 </div>
 <div class="col-md-6">
 <br>
   <div class="form-group">
      <label for="select" class="col-lg-5 control-label">Tipo de pago:</label>
      <div class="col-lg-7">
        <select class="form-control" id="select" name="pago">
          <option value="credito">Credito</option>
          <option value="contado">Contado</option>
          
        </select>
      </div>
    </div>
    <br><br>
    
    <div class="form-group">
      <label class="control-label" for="focusedInput">.</label>
      
    </div>




</div>

<div class="col-md-2">
  <div class="form-group">
      <label class="control-label" for="focusedInput">Cantidades:</label>
      <input class="form-control" type="text" name="cantidad1">
    </div>
</div>
<div class="col-md-5">
  <div class="form-group">
      <label class="control-label" for="focusedInput">Descripción:</label>
      <input class="form-control" type="text" name="descripcion1">
    </div>
</div>
<div class="col-md-5">
  <div class="form-group">
      <label class="control-label" for="focusedInput">Valor Unit.:</label>
      <input class="form-control" type="text" name="vu1">
    </div>
</div>


<div class="col-md-2">
  <div class="form-group">
      
      <input class="form-control" type="text" name="cantidad2">
    </div>
</div>
<div class="col-md-5">
  <div class="form-group">
      
      <input class="form-control" type="text" name="descripcion2">
    </div>
</div>
<div class="col-md-5">
  <div class="form-group">
      
      <input class="form-control" type="text" name="vu2">
    </div>
</div>

<div class="col-md-2">
  <div class="form-group">
      
      <input class="form-control" type="text" name="cantidad3">
    </div>
</div>
<div class="col-md-5">
  <div class="form-group">
      
      <input class="form-control" type="text" name="descripcion3">
    </div>
</div>
<div class="col-md-5">
  <div class="form-group">
      
      <input class="form-control" type="text" name="vu3">
    </div>
</div>

<div class="col-md-2">
  <div class="form-group">
      
      <input class="form-control" type="text" name="cantidad4">
    </div>
</div>
<div class="col-md-5">
  <div class="form-group">
      
      <input class="form-control" type="text" name="descripcion4">
    </div>
</div>
<div class="col-md-5">
  <div class="form-group">
      
      <input class="form-control" type="text" name="vu4">
    </div>
</div>

<div class="col-md-2">
  <div class="form-group">
      
      <input class="form-control" type="text" name="cantidad5">
    </div>
</div>
<div class="col-md-5">
  <div class="form-group">
      
      <input class="form-control" type="text" name="descripcion5">
    </div>
</div>
<div class="col-md-5">
  <div class="form-group">
      
      <input class="form-control" type="text" name="vu5">
    </div>
</div>

<div>
  <center><input type="submit" class="btn btn-primary" value="Generar"></center>
</div>




 </form>
 </div>