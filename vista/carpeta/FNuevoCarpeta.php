<div class="modal-header">
  <h4 class="modal-title">Crear Carpeta</h4>
  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form id="FormRegCarpetas" enctype="multipart/form-data">
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label for="">Nombre Carpeta</label>
          <input type="text" class="form-control" id="nomCarpeta" name="nomCarpeta" placeholder="Ingrese nombre de la carpeta">
          <input type="hidden" name="directorio" value="<?php echo $_GET["dir"];?>">
        </div>
      </div>
      <div class="col-sm-12">

      </div>
    </div>
  </form>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
  <button type="button" class="btn btn-primary" onclick="FormRegCarpeta()">Guardar</button>
</div>
