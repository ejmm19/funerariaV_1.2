<?php
session_start();
if (isset($_SESSION['usuario']))
{
	echo '<script>location.href = "php/welcome.php";</script>';
}
else
{
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Funeraria El Rosal</title>
<link rel="shortcut icon" href="img/favicon.png"/>
<link rel="stylesheet" href="css/estilo.css" />
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/jquery-2.1.1.min.js"></script>
</head>
<body>
<div class="contenedor">
		<img src="img/LOGOTIPO.PNG" alt="">


	
		<form method="POST" action="return false" onsubmit="return false">
			<div id="resultado"></div>
			<br>
			
			<div class="input-group"><span class="input-group-addon" id="sizing-addon2">@</span>
  				<input type="text" name="user" id="user" class="form-control" value="" placeholder="Usuario">
			</div><br>
			
			<br>
			<div class="input-group"><span class="input-group-addon" id="sizing-addon2">***</span>
  				<input type="password" name="pass" id="pass" class="form-control" value="" placeholder="Contraseña">
			</div>
			<br>
			<p><button class="btn btn-success" onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);">ENTRAR</button></p>
		</form>
		
		<script>
		function Validar(user, pass)
		{
			$.ajax({
				url: "validar.php",
				type: "POST",
				data: "user="+user+"&pass="+pass,
				success: function(resp){
					$('#resultado').html(resp);
				}		
			});
		}
		</script>
		<script src="js/bootstrap.min.js"></script>
		</div>
	
</div>
</body>
</html>
<?php
}
?>
