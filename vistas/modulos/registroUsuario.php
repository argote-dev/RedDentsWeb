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
		<div class="row contenedor">

			<div class="col-12 col-sm-12 col-md-6 .col-lg-6">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<h1 class="titulos slogan">La mejor decisión para tú negocio</h1>			
					</div>
					<div class="col-md-9">
						<h5 class="cuerpos slogan-info">RedDents es un servicio en la nube para la gestión de consultorios odontológicos.</h5>	
					</div>
					<div class="col-9 col-md-6">
						<a class="btn btn-info slogan-boton" href="#" role="button"><i class="fab fa-android align-middle"></i>  <span class="align-middle">Descarga nuestra app</span></a>
						
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-6 col-lg-6">
				<div class="row justify-content-center registro">
					<div class="col-md-10">
						<form class="form  text-center" action="../../modelo/registro_usuario.php" method="POST">
							<legend>¡Registrate ahora!</legend>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Nombre" name="Nombre">
							</div>
							<div class="form-group">
								<input type="text" class="form-control"  placeholder="Teléfono" name="Telefono">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Correo electrónico" name="Correo">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Contraseña" name="Contrasena">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Confirmar contraseña" name="Confirmar_contrasena">
							</div>
							<button class="btn btn-outline-info registrar-boton" name="btnRegistro" type="submit"><i class="far fa-paper-plane align-middle"></i>  <span class="align-middle">Registrarse</span></button>

							<div class="form-group mt-2 subtitulos">
								<a href="2.html" class=""> Iniciar sesion</a>
							</div>
							
						</form>							
					</div>		
				</div>

			</div>
		</div>
	</div>

	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>


</body>
</html>
