<?php  
	$objControl = new Controlador();
  $datos = $objControl->actualizarOdontologosControl();

  $doc = $datos[0]->ODO_ID;
  $tipo_doc = $datos[0]->ODO_TIPO_ID;
  $primer_nombre = $datos[0]->ODO_PRIMER_NOMBRE;
  $segundo_nombre = $datos[0]->ODO_SEGUNDO_NOMBRE;
  $primer_apellido = $datos[0]->ODO_PRIMER_APELLIDO;
  $segundo_apellido = $datos[0]->ODO_SEGUNDO_APELLIDO;
  $direccion = $datos[0]->ODO_DIRECCION;
  $telefono = $datos[0]->ODO_TELEFONO;
  $especialidad = $datos[0]->ODO_ESPECIALIDAD;
  $fecregistro = $datos[0]->ODO_FECREGISTRO;
  $fecnacimiento = $datos[0]->ODO_FECNACIMIENTO;
  $genero = $datos[0]->ODO_GENERO;
  $foto = $datos[0]->ODO_FOTO;

?>

<section class="row">
        <div class="col-md-12">
          <div class="modal-registro">
          <form method="POST" action='http://localhost/WEBSERVICES/actualizarOdontologo'>
            <legend class="subtitulos text-center">Actualizar Odontólogo</legend>
            <div class="form-row justify-content-around">
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="exampleFormControlSelect1" class="col-md-4 col-form-label">Tipo de Documento</label>
                  <div class="col-md-7">
                    <select class="form-control" id="exampleFormControlSelect1" name="tipoDocumento">
                      <option value="<?php echo $tipo_doc;?>"><?php echo $tipo_doc;?></option>
                      <option value="CC">Cedula de Ciudadanía</option>
                      <option value="RC">Regitro Civil</option>
                      <option value="PS">Pasaporte</option>
                      <option value="CE">Cedula Extrangera</option>
                    </select>
                  </div>
                </div>

              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="documento" class="col-md-4 col-form-label">N° Documento</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" id="documento" name="documento" placeholder="Ingrese su N° documento" readonly="" value="<?php echo $doc; ?>">
                  </div>
                </div>       
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label for="primer-nombre" class="col-md-4 col-form-label">Primer Nombre</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" value="<?php echo $primer_nombre; ?>" id="primer-nombre" placeholder="Ingrese su primer nombre" name="primer-nombre">
                  </div>
                </div>                   
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="segundo-nombre" class="col-md-4 col-form-label">Segundo Nombre</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" id="segundo-nombre" placeholder="Ingrese su segundo nombre" name="segundo-nombre" value="<?php echo $segundo_nombre; ?>">
                  </div>
                </div>                   
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="primer-apellido" class="col-md-4 col-form-label">Primer Apellido</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" id="primer-apellido" placeholder="Ingrese su primer apellido" name="primer-apellido" value="<?php echo $primer_apellido; ?>">
                  </div>
                </div>                
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="segundo-apellido" class="col-md-4 col-form-label">Segundo Apellido</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" id="segundo-apellido" placeholder="Ingrese su segundo apellido" name="segundo-apellido" value="<?php echo $segundo_apellido; ?>">
                  </div>
                </div>                
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="direccion" class="col-md-4 col-form-label">Dirección</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" id="direccion" placeholder="Ingrese su direccion" name="direccion" value="<?php echo $direccion; ?>">
                  </div>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="telefono" class="col-md-4 col-form-label">Teléfono</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" id="telefono" placeholder="Ingrese su teléfono" name="telefono" value="<?php echo $telefono; ?>">
                  </div>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="especialidad" class="col-md-4 col-form-label">Especialidad</label>
                  <div class="col-md-7">
                    <select class="form-control" id="especialidad" name="especialidad">
                      <option value="<?php echo $especialidad;?>"><?php echo $especialidad; ?></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="fecnac" class="col-md-4 col-form-label">Fecha de Nacimiento</label>
                  <div class="col-md-7">
                    <input type="date" class="form-control" id="fecnac" name="fecnacimiento" value="<?php echo $fecnacimiento; ?>">
                  </div>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="fecregistro" class="col-md-4 col-form-label">Fecha de Registro</label>
                  <div class="col-md-7">
                    <input type="date" class="form-control" id="fecregistro" name="fecregistro" value="<?php echo $fecregistro; ?>" >
                  </div>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="genero" class="col-md-4 col-form-label">Genero</label>
                  <div class="col-md-7">
                    <select class="form-control" id="genero" name="genero">
                      <option value="<?php echo $genero;?>"><?php echo $genero;?></option>
                      <option value="M">Masculino</option>
                      <option value="F">Femenino</option>
                    </select>
                  </div>
                </div>

              </div>
              <div class="col-md-6">
                <div class="form-group row ">
                  <label for="documento" class="col-md-4 col-form-label">Foto</label>
                  <div class="col-md-7">  
                    <div class="custom-file">
                      <input type="file" class="custom-file-input " id="customFile" name="foto" value="<?php echo $foto;?>">
                      <label class="custom-file-label" for="customFile">Escoger foto</label>
                    </div>
                  </div>    
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group row">                    
                    <div class="col-md-11 d-flex justify-content-end">
                     
                      <button class="btn btn-outline-info" type="submit" name="actualizar">Actualizar</button>
                    
                    </div>  
                </div>
              </div>
            </div>   
          </form>
        </div>
      </div>
<!-- Modal Eliminar -->
  <div class="modal fade modal-delete" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Eliminar<?php echo " ola"; ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Estas seguro de eliminar ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-info" data-dismiss="modal">No</button>
          <a class="btn btn-outline-info" href="http://localhost/WEBSERVICES/eliminarOdontologo">Si</a>
        </div>
      </div>
    </div>
  </div>           
</section>