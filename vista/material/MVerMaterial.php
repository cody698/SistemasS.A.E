<?php
require_once "../../controlador/materialControlador.php";
require_once "../../modelo/materialModelo.php";

$id = $_GET["id"];

$material = ControladorMaterial::ctrInfoMaterial($id);

?>

<div class="modal-header bg-dark">
    <h4 class="modal-title text-light">Información del Material</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-6">
            <table class="table">
                <tr>
                    <th>ITEM</th>
                    <td><?php echo $material["id_material"]; ?></td>
                </tr>

                <tr>
                    <th>DESCRIPCION</th>
                    <td><?php echo $material["descripcion_mat"]; ?></td>
                </tr>

                <tr>
                    <th>P/N</th>
                    <td><?php echo $material["pn_mat"]; ?></td>
                </tr>

                <tr>
                    <th>P/N ALT.</th>
                    <td><?php echo $material["pnalt_mat"]; ?></td>
                </tr>

                <tr>
                    <th>QTY PEDIDO</th>
                    <td><?php echo $material["qty_mat"]; ?></td>
                </tr>

                <tr>
                    <th>UNIDAD</th>
                    <td><?php echo $material["unidad_mat"]; ?></td>
                </tr>

                <tr>
                    <th>REF. IPC</th>
                    <td><?php echo $material["refmanual_mat"]; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-sm-6">
            <table class="table">
                <tr>
                    <th>REF. TARJETA</th>
                    <td><?php echo $material["codigo_seguimiento_mat"]; ?></td>
                </tr>

                <tr>
                    <th>AREA</th>
                    <td><?php echo $material["area_mat"]; ?></td>
                </tr>

                <tr>
                    <th>OBSERVACIONES</th>
                    <td><?php echo $material["observaciones_mat"]; ?></td>
                </tr>

                <tr>
                    <th>PRIORIDAD</th>
                    <td><?php echo $material["prioridad_mat"]; ?></td>
                </tr>

                <tr>
                    <th>ESTADO</th>
                    <td><?php echo $material["estado_mat"]; ?></td>
                </tr>

                <tr>
                    <th>QTY SAE ARRIBO</th>
                    <td><?php echo $material["qtysae_mat"]; ?></td>
                </tr>

                <tr>
                    <th>FECHA ARRIBO</th>
                    <td><?php echo $material["fechadearribo_mat"]; ?></td>
                </tr>

            </table>

        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
</div>
