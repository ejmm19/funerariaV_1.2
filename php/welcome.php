<?php
session_start();
if (isset($_SESSION['usuario']))
{
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
			<!-- Top Navigation -->
			<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					  <a href="welcome.php" class="navbar-brand"><img src="../img/LOGOTIPO.PNG" width="35%" style="margin-top:-7%;"></a>

					 <a class="navbar-brand" style="margin-left:-45%; margin-top:18px;">BIENVENIDO :</a>
					
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a style="margin-top:17px; margin-left:-225px;"><?php echo $_SESSION['usuario']; ?></a>
						</li>				
					</ul>				
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="../php/logout.php">
							<button type="button" class="btn btn-danger btn-lg">
							  <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
							</button>
							</a>
						</li>						
					</ul>
				</div>				
			</nav>
		</div>
	</div>
</div>
			<div class="contenido" style="margin-top:5%;">
				<div class="row">
				<div class="col-md-1">
					
				</div>
				<div class="col-md-10">
				<br><br>
				
				<?php 
            
            if (!isset($_GET['op'])) {
                include('inicial.php');
            }elseif ($_GET['op']==1) {
                include('facturas.php');
            }elseif ($_GET['op']==2) {
                include('contrratos.php');
            }elseif ($_GET['op']==3) {
                include('solicitud.php');
            }elseif ($_GET['op']==4) {
                include('listarafiliados.php');
            }elseif ($_GET['op']==5) {
                include('registroafiliacion.php');
            }elseif ($_GET['op']==6) {
                include('consultarafiliacion.php');
            }elseif ($_GET['op']==7) {
                include('opciones.php');
            }elseif ($_GET['op']==8) {
                include('editarcliente.php');
            }
            
                
             ?>
				</div>
				<div class="col-md-1">
					
				</div>
			</div>
			
		<!-- /container -->
		<script>
			(function() {
	
				function init() {
					var speed = 250,
						easing = mina.easeinout;

					[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
						var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
							pathConfig = {
								from : path.attr( 'd' ),
								to : el.getAttribute( 'data-path-hover' )
							};

						el.addEventListener( 'mouseenter', function() {
							path.animate( { 'path' : pathConfig.to }, speed, easing );
						} );

						el.addEventListener( 'mouseleave', function() {
							path.animate( { 'path' : pathConfig.from }, speed, easing );
						} );
					} );
				}

				init();

			})();
		</script>



</body>
</html>
<?php
}
else
{
	echo '<script>alert("primero debes loguearte para ver esta pagina")</script>';
	echo '<script>location.href = "../index.php";</script>';
}
?>
