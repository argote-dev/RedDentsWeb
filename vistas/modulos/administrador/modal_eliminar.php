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
          ¿Estas seguro de eliminar?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-info" data-dismiss="modal">No</button>
          <form method="POST" action="http://localhost/WEBSERVICES/eliminarOdontologo">
            <input type="hidden" name="id">
            <button type="submit" class="btn btn-outline-info">Si</button>
          </form>
        </div>
      </div>
    </div>
  </div>