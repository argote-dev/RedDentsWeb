<section class="row">
        <div class="col-md-12">
          <div class="modal-registro">
          <form method="POST">
            <legend class="subtitulos text-center">Registro Odontólogo</legend>
            <div class="form-row justify-content-around">
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="exampleFormControlSelect1" class="col-md-4 col-form-label">Tipo de Documento</label>
                  <div class="col-md-7">
                    <select class="form-control" id="exampleFormControlSelect1" name="tipoDocumento">
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
                    <input type="text" class="form-control" id="documento" name="documento" placeholder="Ingrese su N° documento">
                  </div>
                </div>       
              </div>

              <div class="col-md-6">
                <div class="form-group row">
                  <label for="primer-nombre" class="col-md-4 col-form-label">Primer Nombre</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" id="primer-nombre" placeholder="Ingrese su primer nombre" name="primer_nombre">
                  </div>
                </div>                   
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="segundo-nombre" class="col-md-4 col-form-label">Segundo Nombre</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" id="segundo-nombre" placeholder="Ingrese su segundo nombre" name="segundo_nombre">
                  </div>
                </div>                   
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="primer-apellido" class="col-md-4 col-form-label">Primer Apellido</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" id="primer-apellido" placeholder="Ingrese su primer apellido" name="primer_apellido">
                  </div>
                </div>                
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="segundo-apellido" class="col-md-4 col-form-label">Segundo Apellido</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" id="segundo-apellido" placeholder="Ingrese su segundo apellido" name="segundo_apellido">
                  </div>
                </div>                
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="direccion" class="col-md-4 col-form-label">Dirección</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" id="direccion" placeholder="Ingrese su direccion" name="direccion">
                  </div>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="telefono" class="col-md-4 col-form-label">Teléfono</label>
                  <div class="col-md-7">
                    <input type="text" class="form-control" id="telefono" placeholder="Ingrese su teléfono" name="telefono">
                  </div>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="especialidad" class="col-md-4 col-form-label">Especialidad</label>
                  <div class="col-md-7">
                    <select class="form-control" id="especialidad" name="especialidad">
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
                    <input type="date" class="form-control" id="fecnac" name="fecnacimiento">
                  </div>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="fecregistro" class="col-md-4 col-form-label">Fecha de Registro</label>
                  <div class="col-md-7">
                    <input type="date" class="form-control" id="fecregistro" name="fecregistro" >
                  </div>
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label for="genero" class="col-md-4 col-form-label">Genero</label>
                  <div class="col-md-7">
                    <select class="form-control" id="genero" name="genero">
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
                      <input type="file" class="custom-file-input " id="customFile" name="foto">
                      <label class="custom-file-label" for="customFile">Escoger foto</label>
                    </div>
                  </div>    
                </div> 
              </div>
              <div class="col-md-6">
                <div class="form-group row">                    
                    <div class="col-md-11 d-flex justify-content-end">
                     
                      <button class="btn btn-outline-info" type="submit" name="btnRegistrar">Registrar</button>
                    
                    </div>  
                </div>
              </div>
            </div>   
          </form>
        </div>
      </div>           
</section>

<?php 
$objControl = new Controlador();
$objControl->registroOdontologosControl();

 ?>