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
          require_once'controladores/controlador-odontologo.php'; 
          $objControl = new Controlador_odontologo();
          $objControl -> listarOdontologosControl();
        ?>
    </tbody>
  </table>
</div>
<?php  
  //include 'vistas/modulos/administrador/modal_eliminar.php';
?>
