<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RedDents</title>
	<link rel="stylesheet" type="text/css" href="../css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">

</head>
<body>

	<div class="container">	
		<div class="row justify-content-center ">
			<div class="col-md-5">
				<form class="form  text-center inicio-sesion " method="POST" action="../../modelo/sesion.php">
					<legend>Inicio de sesión</legend>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Usuario" name="Usuario">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Contraseña" name="Contrasena">
					</div>
					<button class="btn btn-outline-info registrar-boton" type="submit" name="btnInicioSesion"><i class="far fa-paper-plane align-middle"></i>  <span class="align-middle"> Iniciar sesion</span></button>
					<!--<input type="submit" name="enviar" value="Enviar!!">-->
					<div class="form-group mt-2 subtitulos">
						<a href="1.html" class="">Registrarse</a>
					</div>
					
				</form>							
			</div>		
		</div>
	</div>


	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

</body>
</html>