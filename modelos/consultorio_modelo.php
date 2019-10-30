<?php  

	class Consultorio_modelo
	{
	    /**
		 * Método para enviar a registrar un odontologo al WebService
		 * @param array asociativo con los datos a registrar
		 * @return boolean: true si se realizo el registro, false si no se pudo regiatrar en la BD
		 */
		public function registrarConsultorioModelo($datos){

			$datosJson = json_encode($datos);

			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, "http://localhost/PROYECTO_REDDENTS/WEBSERVICES_REDDENTS/public/consultorios/nuevo");

			curl_setopt($ch,CURLOPT_POST , TRUE);

			curl_setopt($ch,CURLOPT_POSTFIELDS , $datosJson);

			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

			curl_setopt($ch,CURLOPT_RETURNTRANSFER, TRUE);

			$resultado = curl_exec($ch);

			curl_close($ch);

			return $resultado;

		}
	}

	
?>