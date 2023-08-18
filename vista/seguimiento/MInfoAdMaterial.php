<?php
require_once "../../controlador/seguimientoControlador.php";
require_once "../../modelo/seguimientoModelo.php";

$codSeg = $_GET["codSeg"];

//cuando la consulta devuelve un falso porque no hay datos para devolver
$seguimiento = ControladorSeguimiento::ctrInfoAdicional($codSeg);
if ($seguimiento == false) {
    $seguimiento["descripcion_mat"] = "";
    $seguimiento["pn_mat"] = "";
    $seguimiento["pnalt_mat"] = "";
    $seguimiento["qty_mat"] = "";
    $seguimiento["qtysae_mat"] = "";
}

?>


<div class="modal-header">
    <h4 class="modal-title">Información Adicional de Material</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-4 border-right">
            <div class="description-block">
                <dt class="description-header">DESCRIPCION</dt>
                <span class="description-text"><?php echo $seguimiento["descripcion_mat"]; ?></span>
            </div>
        </div>

        <div class="col-sm-4 border-right">
            <div class="description-block">
                <dt class="description-header">P/N</dt>
                <span class="description-text"><?php echo $seguimiento["pn_mat"]; ?></span>
            </div>
        </div>

        <div class="col-sm-4 border-right">
            <div class="description-block">
                <dt class="description-header">P/N ALT.</dt>
                <span class="description-text"><?php echo $seguimiento["pnalt_mat"]; ?></span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4 border-right">
            <div class="description-block">
                <dt class="description-header">QTY PEDIDO</dt>
                <span class="description-text"><?php echo $seguimiento["qty_mat"]; ?></span>
            </div>
        </div>

        <div class="col-sm-4 border-right">
            <div class="description-block">
                <dt class="description-header">QTY SAE ARRIBO</dt>
                <span class="description-text"><?php echo $seguimiento["qtysae_mat"]; ?></span>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
</div>