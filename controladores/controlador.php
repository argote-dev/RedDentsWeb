<?php 
require 'modelos/paginas_modelo.php';


class Controlador{

    /**
     * Método para imprimir la plantilla 
     */
    public function mostrarPlantilla(){

    		include_once("vistas/plantilla.php");
    }

    /**
     * Método para determinar que modulo de la vista se imprime en la 
     * plantilla apartir de la variable GET 'p'
     */
    public function enlacePaginasControl(){

    	if (isset($_GET['p'])) {
    		$pagina = $_GET['p'];

    	} else{
    		$pagina = "bienvenido";

    	}
    	$rta = Paginas::enlacePaginasModelo($pagina);
    	include_once($rta);
    }

}

?>