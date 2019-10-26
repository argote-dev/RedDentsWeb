<?php 

function listarOdontologosModelo(){

	$listaOdontologosurl = "http://localhost/WEBSERVICES/listaOdontologos/lista";

	$listaOdontologosjson = file_get_contents($listaOdontologosurl);

	$listaOdontologos = json_decode($listaOdontologosjson);

	return $listaOdontologos;
}

function buscarOdontologoModelo($dato){
	$listaOdontologourl = "http://localhost/WEBSERVICES/buscarOdontologo/".$dato;

	$listaOdontologojson = file_get_contents($listaOdontologourl);

	$listaOdontologo = json_decode($listaOdontologojson);

	return $listaOdontologo;
}

http://localhost/WEBSERVICES/actualizarOdontologo/1
// Nduthr29*Ecali20%Mbog16=
 ?>