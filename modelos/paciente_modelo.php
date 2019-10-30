<?php  

	function listarPacientesModelo(){

		$listaPacientesurl = "http://localhost/PROYECTO_REDDENTS/WEBSERVICES/listaPacientes";
		
		
		$listaPacientesjson = file_get_contents($listaPacientesurl);

		$listaPacientes = json_decode($listaPacientesjson);

		return $listaPacientes;
	}
?>