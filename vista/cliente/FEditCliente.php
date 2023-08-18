<?php
require_once "../../controlador/clienteControlador.php";
require_once "../../modelo/clienteModelo.php";

$idCliente = $_GET["idCliente"];

$cliente = ControladorCliente::ctrInfoCliente($idCliente);
?>


<form action="" id="EditCliente" enctype="multipart/form-data">
    <div class="modal-header">
        <h4 class="modal-title">Editar Cliente</h4>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">

        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Carnet Identidad</label>
                    <input type="text" class="form-control" name="ciCliente" id="ciCliente" value="<?php echo $cliente["ci_cliente"]; ?>">
                    <input type="hidden" name="idCliente" id="idCliente" value="<?php echo $idCliente; ?>">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Nombre(s)</label>
                    <input type="text" class="form-control" name="nomCliente" id="nomCliente" value="<?php echo $cliente["nombre_cliente"]; ?>">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apPatCliente" id="apPatCliente" value="<?php echo $cliente["apellido_pat_cliente"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Apellido Materno</label>
                    <input type="text" class="form-control" name="apMatCliente" id="apMatCliente" value="<?php echo $cliente["apellido_mat_cliente"]; ?>">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Fecha Nacimiento</label>
                    <input type="date" class="form-control" name="fechNacimiento" id="fechNacimiento" value="<?php echo $cliente["fecha_nacimiento"]; ?>">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Direccion</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $cliente["direccion_cliente"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group">
                    <label for="">Telefono(s)</label>
                    <input type="text" class="form-control" name="teleCliente" id="teleCliente" value="<?php echo $cliente["telefono_cliente"]; ?>">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Correo Electronico</label>
                    <input type="email" class="form-control" name="correoCliente" id="correoCliente" value="<?php echo $cliente["correo_cliente"]; ?>">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" name="fotoCliente" id="fotoCliente">
                    <input type="hidden" name="fotoClienteActual" id="fotoClienteActual" value="<?php echo $cliente["foto"]; ?>">
                    <img src="assest/dist/img/cliente/<?php echo $cliente["foto"]; ?>" alt="" width="100px">
                </div>
            </div>
        </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="EditarCliente()">Actualizar</button>
    </div>
</form>