<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro de consultorios</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form class="form col-lg-6" method="POST">
					<label>Identificación del consultorio</label>
					<input type="text" name="id_consultorio" placeholder="Escriba el nombre del consultorio">
					<label>Identificación del usuario</label>
					<input type="text" name="usuario_id_consultorio" placeholder="Escriba el nombre del consultorio">
					<label>Nombre del consultorio</label>
					<input type="text" name="nombre_consultorio" placeholder="Escriba el nombre del consultorio">
					<label>NIT del consultorio</label>
					<input type="text" name="nit_consultorio" placeholder="Escriba el nombre del consultorio">
					<label>Dirección del consultorio</label>
					<input type="text" name="direccion_consultorio" placeholder="Escriba el nombre del consultorio">
					<label>Telefono del consultorio</label>
					<input type="text" name="telefono_consultorio" placeholder="Escriba el nombre del consultorio">
					<input type="submit" name="btnCrearConsultorio" value="Crear consultorio">
				</form>
			</div>
		</div>
	</div>
	
	<?php  
		require_once'controladores/controlador-consultorio.php'; 
		$objControl = new Controlador_consultorio();
		$objControl->registroConsultoriosControl();
	?>

</body>
</html>