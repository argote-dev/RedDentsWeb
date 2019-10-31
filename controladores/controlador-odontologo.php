<?php
require 'modelos/odontologo_modelo.php';

class Controlador_odontologo
{
    private $objOdontologo;

    public function __construct(){

        $this->objOdontologo = new Odontologo_modelo();
    }

    #            Métodos para el CRUD de Odontologo
    #----------------------------------------------------------------------
    #

    
    /**
     * Método que a partir del método listarOdontologosModelo() puede obtener 
     * un array con los odontologos para listarlo en una tabla o un valor 
     * false con el cual enviara un mensaje 
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
                            <a class="botones" href="index.php?p=buscarOdontologo&id='.$odontologo->ODO_ID.'">
                              <acronym lang="es" title="Actualizar">
                                <img src="vistas/img/editar.png" class="acciones">
                              </acronym>
                            </a>
                            <button onclick="" class="botones" data-toggle="modal" id='.$odontologo->ODO_ID.'" data-target="#exampleModalCenter">
                              <acronym lang="es" title="Eliminar">
                                <img src="vistas/img/eliminar.png" class="acciones">
                              </acronym>
                            </button>
                        </td>
                    </tr>';
            }
        }
        else{
            echo "<h3 style='color:red;'>No Hay Odontologos Registrados</h3>";
        }
        
    }

    /**
     * Método para validar los campos del formulario de registro de odontologo
     * y guardarlos en un array asociativo y enviarlos al método 
     * registroOdontologosControl()
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
                                      'foto' =>$_POST['foto']
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


    /**
     * Método para buscar por el id del odontologo
     * y guardarlos en un array asociativo y enviarlos al método 
     * buscarOdontologosControl()
     */
    public function buscarOdontologosControl(){
        $dato = $_GET['id'];
        $arOdontologo = $this->objOdontologo->buscarOdontologoModelo($dato);
        return $arOdontologo;
    }


    public function actualizarOdontologoControl(){

      if (isset($_POST['btnActualizar'])) {

        $id = $_POST['documento'];

        $datosOdontologo =  array('tipoDocumento' =>$_POST['tipoDocumento'],
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
                                  'foto' =>$_POST['foto']
        );

        //var_dump($datosOdontologo);

        /**/
          $rta = $this->objOdontologo->actualizarOdontologoModelo($datosOdontologo,$id);

          echo $rta;

          if ($rta) {
              echo "Se actualizó sus datos";
          }else{
              echo "Error al actualizar";
          }
        
            
      }
      
    }



    public function eliminarOdontologoControl(){
        $dato = $_POST[''];

        //
    }

}

?>