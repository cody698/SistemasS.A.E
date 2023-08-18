<?php
require_once "../../controlador/materialControlador.php";
require_once "../../modelo/materialModelo.php";

$id = $_GET["id"];

$material = ControladorMaterial::ctrInfoMaterial($id);

?>
<div class="modal-header">
    <h4 class="modal-title">Actualizar Material</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormEditMaterial" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">DESCRIPCION</label>
                    <input type="text" class="form-control" id="desMaterial" name="desMaterial" value="<?php echo $material["descripcion_mat"]; ?>">
                    <input type="hidden" name="idMaterial" value="<?php echo $id; ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="">P/N</label>
                    <input type="text" class="form-control" id="pnMaterial" name="pnMaterial" value="<?php echo $material["pn_mat"]; ?>"">
                </div>
            </div>
            <div class=" col-sm-3">
                    <div class="form-group">
                        <label for="">P/N ALT.</label>
                        <input type="text" class="form-control" id="pnaltMaterial" name="pnaltMaterial" value="<?php echo $material["pnalt_mat"]; ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">QTY PEDIDO</label>
                        <input type="text" class="form-control" id="qtyMaterial" name="qtyMaterial" value="<?php echo $material["qty_mat"]; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">UNIDAD</label>
                        <input type="text" class="form-control" id="unidadMaterial" name="unidadMaterial" value="<?php echo $material["unidad_mat"]; ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">REF. IPC</label>
                        <input type="text" class="form-control" id="refmanualMaterial" name="refmanualMaterial" value="<?php echo $material["refmanual_mat"]; ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">REF. TARJETA</label>
                        <input type="text" class="form-control" id="reftarjetaMaterial" name="reftarjetaMaterial" value="<?php echo $material["codigo_seguimiento_mat"]; ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">AREA</label>
                        <select name="areaMaterial" id="areaMaterial" class="form-control">
                            <option>Seleccione</option>
                            <option value="ALAS" <?php if ($material["area_mat"] == "ALAS") : ?> selected <?php endif; ?>>ALAS</option>
                            <option value="EMP" <?php if ($material["area_mat"] == "EMP") : ?> selected <?php endif; ?>>EMP</option>
                            <option value="HYD" <?php if ($material["area_mat"] == "HYD") : ?> selected <?php endif; ?>>HYD</option>
                            <option value="MOT" <?php if ($material["area_mat"] == "MOT") : ?> selected <?php endif; ?>>MOT</option>
                            <option value="AV" <?php if ($material["area_mat"] == "AV") : ?> selected <?php endif; ?>>AV</option>
                            <option value="CAB" <?php if ($material["area_mat"] == "CAB") : ?> selected <?php endif; ?>>CAB</option>
                            <option value="FUS" <?php if ($material["area_mat"] == "FUS") : ?> selected <?php endif; ?>>FUS</option>
                            <option value="BUZ" <?php if ($material["area_mat"] == "BUZ") : ?> selected <?php endif; ?>>BUZ</option>
                            <option value="CAAB" <?php if ($material["area_mat"] == "CAAB") : ?> selected <?php endif; ?>>CAAB</option>
                            <option value="PINTURA" <?php if ($material["area_mat"] == "PINTURA") : ?> selected <?php endif; ?>>PINTURA</option>
                            <option value="VACIAS" <?php if ($material["area_mat"] == "VACIAS") : ?> selected <?php endif; ?>>VACIAS</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">OBSERVACIONES</label>
                        <input type="text" class="form-control" id="obMaterial" name="obMaterial" value="<?php echo $material["observaciones_mat"]; ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">PRIORIDAD</label>
                        <input type="text" class="form-control" id="prioMaterial" name="prioMaterial" value="<?php echo $material["prioridad_mat"]; ?>">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">ESTADO</label>
                        <select name="estadoMaterial" id="estadoMaterial" class="form-control">
                            <option value="LLEGO MATERIAL" <?php if ($material["estado_mat"] == "LLEGO MATERIAL") : ?>selected<?php endif; ?>>LLEGO MATERIAL</option>
                            <option value="NO LLEGO MATERIAL" <?php if ($material["estado_mat"] == "NO LLEGO MATERIAL") : ?>selected<?php endif; ?>>NO LLEGO MATERIAL</option>
                            <option value="PARCIALMENTE COMPLETADO" <?php if ($material["estado_mat"] == "PARCIALMENTE COMPLETADO") : ?>selected<?php endif; ?>>PARCIALMENTE COMPLETADO</option>
                            <option value="SIN PEDIDO" <?php if ($material["estado_mat"] == "SIN PEDIDO") : ?>selected<?php endif; ?>>SIN PEDIDO</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">QTY SAE ARRIBO</label>
                        <input type="text" class="form-control" id="qtysaeMaterial" name="qtysaeMaterial" value="<?php echo $material["qtysae_mat"]; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">FECHA DE ARRIBO</label>
                        <input type="date" class="form-control" id="fechaMaterial" name="fechaMaterial" value="<?php echo $material["fechadearribo_mat"]; ?>">
                    </div>
                </div>
            </div>
    </form>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="EditMaterial()">Guardar</button>
</div>