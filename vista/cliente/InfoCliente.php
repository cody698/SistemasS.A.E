<?php
require_once "../../controlador/clienteControlador.php";
require_once "../../modelo/clienteModelo.php";

$idCliente = $_GET["idCliente"];

$cliente = ControladorCliente::ctrInfoCliente($idCliente);
?>
<div class="modal-header">
    <h4 class="modal-title">Informacion de Cliente:</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-6">
            <table>
                <tr>
                    <th>Id Cliente:</th>
                    <td class="text-info"><?php echo $cliente["id_cliente"]; ?></td>
                </tr>
                <tr>
                    <th>Carnet Identidad:</th>
                    <td class="text-info"><?php echo $cliente["ci_cliente"]; ?></td>
                </tr>
                <tr>
                    <th>Nombre(s):</th>
                    <td class="text-info"><?php echo $cliente["nombre_cliente"]; ?></td>
                </tr>
                <tr>
                    <th>Apellido Paterno:</th>
                    <td class="text-info"><?php echo $cliente["apellido_pat_cliente"]; ?></td>
                </tr>
                <tr>
                    <th>Apellido Materno:</th>
                    <td class="text-info"><?php echo $cliente["apellido_mat_cliente"]; ?></td>
                </tr>
                <tr>
                    <th>Fecha de nacimiento:</th>
                    <td class="text-info"><?php echo $cliente["fecha_nacimiento"]; ?></td>
                </tr>
                <tr>
                    <th>Direccion:</th>
                    <td class="text-info"><?php echo $cliente["direccion_cliente"]; ?></td>
                </tr>
                <tr>
                    <th>Telefono(s):</th>
                    <td class="text-info"><?php echo $cliente["telefono_cliente"]; ?></td>
                </tr>
                <tr>
                    <th>Correo Electronico:</th>
                    <td class="text-info"><?php echo $cliente["correo_cliente"]; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-6">
            <img src="assest/dist/img/cliente/<?php echo $cliente["foto"]; ?>" alt="" width="300px">
        </div>
    </div>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
</div>