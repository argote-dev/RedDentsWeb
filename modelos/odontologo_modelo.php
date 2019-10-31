<?php 
class Odontologo_modelo
{

	/**
	 * Método para obtener la lista de odontologos desde el WebService
	 * @return arreglo con objetos std_class
	 */
	public function listarOdontologosModelo(){

		$listaOdontologosurl = "http://localhost/PROYECTO_REDDENTS/WEBSERVICES_REDDENTS/public/odontologos";

		$listaOdontologosjson = file_get_contents($listaOdontologosurl);

		$listaOdontologos = json_decode($listaOdontologosjson);

		return $listaOdontologos;
	}

	/**
	 * Método para obtener los datos de un odontologo desde el WebService
	 * @return arreglo con objetos std_class
	 */
	public function buscarOdontologoModelo($dato){

		$listaOdontologosurl = "http://localhost/PROYECTO_REDDENTS/WEBSERVICES_REDDENTS/public/odontologos/".$dato;

		$listaOdontologosjson = file_get_contents($listaOdontologosurl);

		$listaOdontologos = json_decode($listaOdontologosjson);

		return $listaOdontologos;
	}

	/**
	 * Método para enviar a registrar un odontologo al WebService
	 * @param array asociativo con los datos a registrar
	 * @return boolean: true si se realizo el registro, false si no se pudo regiatrar en la BD
	 */
	public function registrarOdontologoModelo($datos){

		$datosJson = json_encode($datos);

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://localhost/PROYECTO_REDDENTS/WEBSERVICES_REDDENTS/public/odontologos/nuevo");

		curl_setopt($ch,CURLOPT_POST , TRUE);

		curl_setopt($ch,CURLOPT_POSTFIELDS , $datosJson);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

		curl_setopt($ch,CURLOPT_RETURNTRANSFER, TRUE);

		$resultado = curl_exec($ch);

		curl_close($ch);

		return $resultado;

	}

	public function actualizarOdontologoModelo($datos,$id){

		$datosJson = json_encode($datos);

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://localhost/PROYECTO_REDDENTS/WEBSERVICES_REDDENTS/public/odontologos/actualizar/".$id);

		//curl_setopt($ch,CURLOPT_PUT , TRUE);
		
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT',);
		
		curl_setopt($ch,CURLOPT_POSTFIELDS , $datosJson);

		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

		curl_setopt($ch,CURLOPT_RETURNTRANSFER, TRUE);

		$resultado = curl_exec($ch);

		curl_close($ch);

		return $resultado;
	}

	
}


 ?>