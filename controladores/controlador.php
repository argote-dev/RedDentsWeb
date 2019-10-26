<?php 
require 'modelos/paginas.php';
require 'modelos/administrador/odontologos.php';
require 'modelos/administrador/pacientes.php';

class Controlador{

    public function mostrarPlantilla(){

    		include_once("vistas/plantilla.php");
    }

    public function enlancePaginasControl(){

    	if (isset($_GET['p'])) {
    		$pagina = $_GET['p'];

    	} else{
    		$pagina = "bienvenido";

    	}
    	$rta = Paginas::enlancePaginasModelo($pagina);
    	include_once($rta);
    }

    public function listarOdontologosControl(){
        $arOdontologos = listarOdontologosModelo();

        foreach ($arOdontologos as $odontologo) {
            echo '
                <tr>
                    <td>'.$odontologo->ODO_ID.'</td>
                    <td>'.$odontologo->ODO_TIPO_ID.'</td>
                    <td>'.$odontologo->ODO_PRIMER_NOMBRE.'</td>
                    <td>'.$odontologo->ODO_SEGUNDO_NOMBRE.'</td>
                    <td>'.$odontologo->ODO_PRIMER_APELLIDO.'</td>
                    <td>'.$odontologo->ODO_SEGUNDO_APELLIDO.'</td>
                    <td>'.$odontologo->ODO_DIRECCION.'</td>
                    <td>'.$odontologo->ODO_TELEFONO.'</td>
                    <td>'.$odontologo->ODO_ESPECIALIDAD.'</td>
                    <td>'.$odontologo->ODO_FECNACIMIENTO.'</td>
                    <td>'.$odontologo->ODO_FECREGISTRO.'</td>
                    <td>'.$odontologo->ODO_GENERO.'</td>
                    <td>'.$odontologo->ODO_FOTO.'</td>
                    <td>
                        <a class="botones" href="http://localhost/WEBSERVICES/buscarOdontologo/'.$odontologo->ODO_ID.'"><acronym lang="es" title="Actualizar"><img src="vistas/img/editar.png" class="acciones"></acronym></a>
                        <button type="button" class="botones" data-toggle="modal" data-target="#exampleModalCenter"><acronym lang="es" title="Eliminar"><img src="vistas/img/eliminar.png" class="acciones"></acronym></button>
                    </td>
                </tr>
                ';
        }
        
    }

    public function listarPacientesControl(){
        $arPacientes = listarPacientesModelo();

        foreach ($arPacientes as $pacientes) {
            echo '
                <tr>
                    <td>'.$pacientes->PAC_ID.'</td>
                    <td>'.$pacientes->PAC_TIPO_ID.'</td>
                    <td>'.$pacientes->PAC_PRIMER_NOMBRE.'</td>
                    <td>'.$pacientes->PAC_SEGUNDO_NOMBRE.'</td>
                    <td>'.$pacientes->PAC_PRIMER_APELLIDO.'</td>
                    <td>'.$pacientes->PAC_SEGUNDO_APELLIDO.'</td>
                    <td>'.$pacientes->PAC_DIRECCION.'</td>
                    <td>'.$pacientes->PAC_TELEFONO.'</td>
                    <td>'.$pacientes->PAC_FECNACIMIENTO.'</td>
                    <td>'.$pacientes->PAC_REGISTRO.'</td>
                    <td>'.$pacientes->PAC_GENERO.'</td>
                    <td>'.$pacientes->PAC_FOTO.'</td>
                </tr>
                ';
        }
    }

    public function registroOdontologosControl(){

        if (isset($_POST["guardar"])) {
            echo "Datos encontrados";
            $datosOdontologo = array($_POST["documento"],$_POST["tipoDocumento"],$_POST["nombres"],$_POST["apellidos"],$_POST["direccion"],$_POST["telefono"],$_POST["fecnacimiento"],$_POST["genero"]);

            $rta = registrarOdontologoModelo($datosOdontologo);

            echo $rta;
        }
    }

    public function actualizarOdontologosControl(){
        $dato = $_GET['id'];
        $arOdontologo = buscarOdontologoModelo($dato);
        return $arOdontologo;
    }

    public function eliminarOdontologoControl(){
        $dato = $_POST[''];
    }


}

/*
ODO_ID
ODO_TIPO_ID
ODO_PRIMER_NOMBRE
ODO_SEGUNDO_NOMBRE
ODO_PRIMER_APELLIDO
ODO_SEGUNDO_APELLIDO
ODO_DIRECCION
ODO_TELEFONO
ODO_ESPECIALIDAD
ODO_FECNACIMIENTO
ODO_FECREGISTRO
ODO_GENERO
ODO_FOTO
*/

/*
PAC_ID
PAC_TIPO_ID
PAC_PRIMER_NOMBRE
PAC_SEGUNDO_NOMBRE
PAC_PRIMER_APELLIDO
PAC_SEGUNDO_APELLIDO
PAC_DIRECCION
PAC_TELEFONO
PAC_FECNACIMIENTO
PAC_REGISTRO
PAC_GENERO
PAC_FOTO
*/
?>