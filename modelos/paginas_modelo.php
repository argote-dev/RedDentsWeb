<?php 
class Paginas{

	public static function enlacePaginasModelo($pagina){

		switch ($pagina) {
			case 'bienvenido':
				$ruta = "vistas/modulos/administrador/bienvenido.php"; 

				break;
			case 'listaOdontologos': 
				$ruta = "vistas/modulos/administrador/odontologo_busqueda.php";  
				break;

			case 'registrarOdontologo':
				$ruta = "vistas/modulos/administrador/odontologo_registro.php";
				break;

			case 'buscarOdontologo':
				$ruta = "vistas/modulos/administrador/odontologo_actualizar.php";
				break;

			case 'listaPacientes':
				$ruta = "vistas/modulos/administrador/listaPaciente.php"; 
				break;

			case 'registrarPacientes':
				$ruta = "vistas/modulos/administrador/registro_paciente.php"; 
				break;
				
			case 'registrarConsultorio':
				$ruta = "vistas/modulos/odontologo/consultorio_registrar.php"; 
				break;

			case 'listaConsultorios': 
				$ruta = "vistas/modulos/odontologo/consultorio_busqueda.php";  
				break;
			
			default:
				# code...
				break;
		}

		return $ruta;

	}
}

 ?>