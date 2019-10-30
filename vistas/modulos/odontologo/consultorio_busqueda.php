<div class="modal-registro">
  <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
    <thead>
      <tr><th scope="col" colspan="12" class="text-center"><h4 class="subtitulos">Busqueda de consultorios</h4></th></tr>
        <tr>
            <th>ID consultorio</th>
            <th>ID usuario</th>
            <th>NIT</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
          require_once'controladores/controlador-consultorio.php'; 
          $objControl = new Controlador_consultorio();
          $objControl -> listarConsultoriosControl();
        ?>
    </tbody>
  </table>
</div>