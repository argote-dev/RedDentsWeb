<?php 

/**
 * 
 */
class Odontologo
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

	public function registrarOdontologoModelo($datos){



		$datosJson = json_encode($datos);

		// var_dump($datosJson);

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://localhost/PROYECTO_REDDENTS/WEBSERVICES_REDDENTS/public/odontologos/nuevo");

		curl_setopt($ch,CURLOPT_POST , TRUE);


		curl_setopt($ch,CURLOPT_POSTFIELDS , $datosJson );

		curl_setopt($ch,CURLOPT_RETURNTRANSFER, TRUE );

		$resultado = curl_exec($ch);

		curl_close($ch);

		return $resultado;

	}
}



/*function buscarOdontologoModelo($dato){
	$listaOdontologourl = "http://localhost/WEBSERVICES/buscarOdontologo/".$dato;

	$listaOdontologojson = file_get_contents($listaOdontologourl);

	$listaOdontologo = json_decode($listaOdontologojson);

	return $listaOdontologo;
}*/

//http://localhost/WEBSERVICES/actualizarOdontologo/1
// Nduthr29*Ecali20%Mbog16=
 ?>