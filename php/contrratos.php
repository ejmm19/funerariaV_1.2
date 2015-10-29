<br><br>
<center>
  <h2>Generar Contratos</h2>
</center>
<form action="generarcontrato.php" method="post" name="form">

<div class="col-md-12">
  <div class="form-group">
      <label for="select" class="control-label">Tipo de Contrato:</label>
      
        <select class="form-control" id="select" name="tipo">
          <option value="clasico">Clasico</option>
          <option value="total">Total</option>
          
        </select>
      
    </div>
</div>
 <div class="col-md-6">
   
   <div class="form-group">
  <label class="control-label " for="focusedInput">Fecha:</label>
  <input class="form-control "  type="date" name="fecha">

</div>


   <div class="form-group">
  <label class="control-label" for="focusedInput">Señor(a):</label>
  <input class="form-control" type="text" name="nombre">
</div>
<div class="form-group">
  <label class="control-label" for="focusedInput">Fecha de Nacimiento:</label>
  <input class="form-control" type="date" name="fechanaci" >
</div> 
 </div>
 <div class="col-md-6">
 
   <div class="form-group">
      <label for="select" class="control-label">Vigencia a partir de las 24 Horas:</label>
      <input class="form-control" type="text" name="vigencia">
    </div>
    
    <div class="form-group">
      <label class="control-label" for="focusedInput">C.c N°:</label>
      <input class="form-control" type="text" name="identificacion">
    </div>
    <div class="form-group">
      <label class="control-label" for="focusedInput">Asesor:</label>
      <input class="form-control" type="text" name="asesor">
    </div>
</div>

<div class="col-md-6">
   
   <div class="form-group">
  <label class="control-label" for="focusedInput">Cobrador</label>
  <input class="form-control"  type="text" name="cobrador">
</div>

   <div class="form-group">
  <label class="control-label" for="focusedInput">Zona:</label>
  <input class="form-control" type="text" name="zona">
</div>
<div class="form-group">
  <label class="control-label" for="focusedInput">Barrio:</label>
  <input class="form-control" type="text" name="barrio">
</div> 
 </div>
 <div class="col-md-6">
 
   <div class="form-group">
      <label for="select" class="control-label">Dirección de Cobro</label>
      <input class="form-control" type="text" name="direccioncobro">
    </div>
    
    <div class="form-group">
      <label class="control-label" for="focusedInput">Municipio</label>
      <input class="form-control" type="text" name="municipio">
    </div>
    <div class="form-group">
      <label class="control-label" for="focusedInput">Dias de Cobro:</label>
      <input class="form-control" type="text" name="diascobro">
    </div>
</div>


<div class="col-md-6">
   
   <div class="form-group">
  <label class="control-label" for="focusedInput">Telefono Residencia:</label>
  <input class="form-control"  type="text" name="telresidencia">
</div>

   <div class="form-group">
  <label class="control-label" for="focusedInput">Telefono de Familiar:</label>
  <input class="form-control" type="text" name="telfamiliar">
</div>
<div class="form-group">
  <label class="control-label" for="focusedInput">Valor de Cuota:</label>
  <input class="form-control" type="text" name="valorcuota">
</div> 
 </div>
 <div class="col-md-6">
 
   <div class="form-group">
      <label for="select" class="control-label">Telefono Oficina:</label>
      <input class="form-control" type="text" name="teloficina">
    </div>    
    <div class="form-group">
      <label class="control-label" for="focusedInput">Celular:</label>
      <input class="form-control" type="text" name="celular">
    </div>
    <div class="form-group">
      <label class="control-label" for="focusedInput">Valor en letras:</label>
      <input class="form-control" type="text" name="valorletras">
    </div>
</div>


<div class="col-md-2">
  <div class="form-group">
      <label class="control-label" for="focusedInput">Parentesco:</label>
       <input class="form-control" type="text" name="parentesco1">
    </div>
</div>
<div class="col-md-4">
  <div class="form-group">
      <label class="control-label" for="focusedInput">Nombres y Apellidos:</label>
      <input class="form-control" type="text" name="nomape1">
    </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      <label class="control-label" for="focusedInput">Cedula:</label>
      <input class="form-control" type="text" name="cedula1">
    </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      <label class="control-label" for="focusedInput">Fecha de Nacimiento:</label>
      <input class="form-control" type="date" name="fechanac1">
    </div>
</div>
<div class="col-md-2">
  <div class="form-group">
      
       <input class="form-control" type="text" name="parentesco2">
    </div>
</div>
<div class="col-md-4">
  <div class="form-group">
      
      <input class="form-control" type="text" name="nomape2">
    </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      
      <input class="form-control" type="text" name="cedula2">
    </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      
      <input class="form-control" type="date" name="fechanac2">
    </div>
</div>
<div class="col-md-2">
  <div class="form-group">
      
       <input class="form-control" type="text" name="parentesco3">
    </div>
</div>
<div class="col-md-4">
  <div class="form-group">
      
      <input class="form-control" type="text" name="nomape3">
    </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      
      <input class="form-control" type="text" name="cedula3">
    </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      
      <input class="form-control" type="date" name="fechanac3">
    </div>
</div><div class="col-md-2">
  <div class="form-group">
      
       <input class="form-control" type="text" name="parentesco4">
    </div>
</div>
<div class="col-md-4">
  <div class="form-group">
      
      <input class="form-control" type="text" name="nomape4">
    </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      
      <input class="form-control" type="text" name="cedula4">
    </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      
      <input class="form-control" type="date" name="fechanac4">
    </div>
</div><div class="col-md-2">
  <div class="form-group">
      
       <input class="form-control" type="text" name="parentesco5">
    </div>
</div>
<div class="col-md-4">
  <div class="form-group">
      
      <input class="form-control" type="text" name="nomape5">
    </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      
      <input class="form-control" type="text" name="cedula5">
    </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      
      <input class="form-control" type="date" name="fechanac5">
    </div>
</div><div class="col-md-2">
  <div class="form-group">
      
       <input class="form-control" type="text" name="parentesco6">
    </div>
</div>
<div class="col-md-4">
  <div class="form-group">
      
      <input class="form-control" type="text" name="nomape6">
    </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      
      <input class="form-control" type="text" name="cedula6">
    </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      
      <input class="form-control" type="date" name="fechanac6">
    </div>
</div><div class="col-md-2">
  <div class="form-group">
      
       <input class="form-control" type="text" name="parentesco7">
    </div>
</div>
<div class="col-md-4">
  <div class="form-group">
      
      <input class="form-control" type="text" name="nomape7">
    </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      
      <input class="form-control" type="text" name="cedula7">
    </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      
      <input class="form-control" type="date" name="fechanac7">
    </div>
</div>





<br>
<div>
  <center><input type="submit" class="btn btn-primary" value="Generar"></center>
</div>
 </form>
 </div>
