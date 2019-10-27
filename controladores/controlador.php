<?php 
require 'modelos/paginas.php';
require 'modelos/odontologo.php';


class Controlador{

    private $objOdontologo;

    function __construct()
    {
        $this->objOdontologo = new Odontologo();
    }

    /**
     * Método para imprimir la plantilla 
     */
    public function mostrarPlantilla(){

    		include_once("vistas/plantilla.php");
    }

    /**
     * Método para determinar que modulo de la vista se imprime en la 
     plantilla apartir de la variable GET 'p'
     */
    public function enlancePaginasControl(){

    	if (isset($_GET['p'])) {
    		$pagina = $_GET['p'];

    	} else{
    		$pagina = "bienvenido";

    	}
    	$rta = Paginas::enlancePaginasModelo($pagina);
    	include_once($rta);
    }

    #            Métodos para el CRUD de Odontologo
    #----------------------------------------------------------------------
    #

    

    /**
     * Método para listar a los odontologos de un consultorio
     */
    public function listarOdontologosControl(){

        $arOdontologos = $this->objOdontologo->listarOdontologosModelo();

        if ($arOdontologos) {

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
                    </tr>';
            }
        }
        else{
            echo "<h3 style='color:red;'>No Hay Odontologos Registrados</h3>";
        }
        
    }

    /**
     * Método registrar un odontologo en un consultorio
     */
    public function registroOdontologosControl(){

        if (isset($_POST["btnRegistrar"])) {
            
            $datosOdontologo =  array('documento' =>$_POST['documento'], 
                                      'tipoDocumento' =>$_POST['tipoDocumento'],
                                      'primer_nombre' =>$_POST['primer_nombre'],
                                      'segundo_nombre' =>$_POST['segundo_nombre'],
                                      'primer_apellido' =>$_POST['primer_apellido'],
                                      'segundo_apellido' =>$_POST['segundo_apellido'],
                                      'direccion' =>$_POST['direccion'],
                                      'telefono' =>$_POST['telefono'],
                                      'especialidad' =>$_POST['especialidad'],
                                      'fecnacimiento' =>$_POST['fecnacimiento'],
                                      'fecregistro' =>$_POST['fecregistro'],
                                      'genero' =>$_POST['genero'],
                                      'foto' =>$_POST['foto'],
              ); 


            $rta = $this->objOdontologo->registrarOdontologoModelo($datosOdontologo);

            if ($rta) {
                echo "se registro sus datos";
            }else{
                echo "error al registrar";
            }


            //echo $rta;
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