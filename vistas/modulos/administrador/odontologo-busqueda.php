<div class="modal-registro">
  <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
    <thead>
      <tr><th scope="col" colspan="12" class="text-center"><h4 class="subtitulos">Busqueda de odontólogos</h4></th></tr>
        <tr>
            <th>Documento</th>
            <th>Tipo de Documento</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Especialidad</th>
            <th>Fecha de Nacimiento</th>
            <th>Fecha de Registro</th>
            <th>Genero</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php 
          $objControl = new Controlador();
          $objControl -> listarOdontologosControl();
        ?>
    </tbody>
  </table>
</div>

<!-- Modal Eliminar -->
  <div class="modal fade modal-delete" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Eliminar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Estas seguro de eliminar <?php echo $doc; ?>?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-info" data-dismiss="modal">No</button>
          <form method="POST" action="http://localhost/WEBSERVICES/eliminarOdontologo">
            <input type="hidden" name="id" value="<?php echo $odontologo->ODO_ID;?>">
            <button type="submit" class="btn btn-outline-info">Si</button>
          </form>
        </div>
      </div>
    </div>
  </div>