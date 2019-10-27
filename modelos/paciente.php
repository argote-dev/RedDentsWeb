<?php  

	function listarPacientesModelo(){

		$listaPacientesurl = "http://localhost/WEBSERVICES/listaPacientes";
		//$listaPacientesurl = "http://localhost/WEBSERVICES/paciente.php?peticion=listaPacientes";
		
		$listaPacientesjson = file_get_contents($listaPacientesurl);

		$listaPacientes = json_decode($listaPacientesjson);

		return $listaPacientes;
	}
?>