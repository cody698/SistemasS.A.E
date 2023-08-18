<?php
require_once "../../controlador/autorizacionControlador.php";
require_once "../../modelo/autorizacionModelo.php";

$idAutorizacion = $_GET["idAutorizacion"];

$autorizacion = ControladorAutorizacion::ctrInfoAutorizacion($idAutorizacion);
?>
<div class="modal-header">
    <h4 class="modal-title">Informacion de Autorizacion:</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-6">
            <table>
                <tr>
                    <th>Id Autorizacion:</th>
                    <td><?php echo $autorizacion["id_autorizacion"]; ?></td>
                </tr>
                <tr>
                    <th>Nombre(s):</th>
                    <?php
                    require_once "../../controlador/clienteControlador.php";
                    require_once "../../modelo/clienteModelo.php";
                    $autorizacion = ControladorCliente::ctrInfoClientes();

                    ?>
                    <td><?php echo $autorizacion["nombre_cliente"]; ?></td>
                </tr>
                <tr>
                    <th>Estado:</th>
                    <td>
                        <?php
                        if ($autorizacion["estado"] == "1") {
                            echo "<small class='badge badge-success'>Habilitado</small>";
                        } else {
                            echo "<small class='badge badge-danger'>Deshabilitado</small>";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Fecha de registro:</th>
                    <td><?php echo $autorizacion["fecha"]; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancelar</button>
</div>