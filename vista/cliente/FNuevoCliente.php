<form action="" id="RegNuevoCliente" enctype="multipart/form-data">
    <div class="modal-header">
        <h4 class="modal-title">Registro de Cliente</h4>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">

        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Carnet Identidad</label>
                    <input type="text" class="form-control" name="ciCliente" id="ciCliente">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Nombre(s)</label>
                    <input type="text" class="form-control" name="nomCliente" id="nomCliente">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apPatCliente" id="apPatCliente">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Apellido Materno</label>
                    <input type="text" class="form-control" name="apMatCliente" id="apMatCliente">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Fecha Nacimiento</label>
                    <?php date_default_timezone_set('America/La_Paz'); ?>
                    <input type="date" class="form-control" name="fechNacimiento" id="fechNacimiento" value="<?php echo date("d-m-y"); ?>">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Direccion</label>
                    <input type="text" class="form-control" name="direccion" id="direccion">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Telefono(s)</label>
                    <input type="text" class="form-control" name="teleCliente" id="teleCliente">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Correo Electronico</label>
                    <input type="email" class="form-control" name="correoCliente" id="correoCliente">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" name="fotoCliente" id="fotoCliente">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="RegNuevoClientes()">Guardar</button>
    </div>
</form>