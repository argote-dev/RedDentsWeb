<?php 
class Paginas{

	public static function enlancePaginasModelo($pagina){

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

			case 'actualizarOdontologo':
				$ruta = "vistas/modulos/administrador/odontologo_actualizar.php";
				break;

			case 'listaPacientes':
				$ruta = "vistas/modulos/administrador/listaPaciente.php"; 
				break;

			case 'registrarPacientes':
				$ruta = "vistas/modulos/administrador/registro_paciente.php"; 
				break;
			
			default:
				# code...
				break;
		}

		return $ruta;

	}
}

 ?>