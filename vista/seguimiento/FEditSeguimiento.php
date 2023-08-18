<?php
require_once "../../controlador/seguimientoControlador.php";
require_once "../../modelo/seguimientoModelo.php";

$id = $_GET["id"];

$seguimiento = ControladorSeguimiento::ctrInfoSeguimiento($id);

?>


<div class="modal-header">
    <h4 class="modal-title">Actualizar Tarjetas Control</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormEditSeguimiento" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Cliente</label>
                    <input type="text" class="form-control" id="nomSeguimiento" name="nomSeguimiento" value="<?php echo $seguimiento["cliente_seguimiento"]; ?>">
                    <input type="hidden" name="idSeguimiento" value="<?php echo $id; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Matricula Aeronave</label>
                    <input type="text" class="form-control" id="matriculaSeguimiento" name="matriculaSeguimiento" value="<?php echo $seguimiento["matricula_seguimiento"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Descripcion</label>
                    <input type="text" class="form-control" id="descripcionSeguimiento" name="descripcionSeguimiento" value="<?php echo $seguimiento["descripcion_seguimiento"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Observaciones</label>
                    <input type="text" class="form-control" id="observacionSeguimiento" name="observacionSeguimiento" value="<?php echo $seguimiento["observaciones"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Tipo Tarjeta</label>
                    <input type="text" class="form-control" id="tipoSeguimiento" name="tipoSeguimiento" value="<?php echo $seguimiento["tipo_tarjeta"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Codigo Tarjeta</label>
                    <input type="text" class="form-control" id="codigoSeguimiento" name="codigoSeguimiento" value="<?php echo $seguimiento["codigo_seguimiento"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Horas Minimo Tarjeta</label>
                    <input type="time" class="form-control" id="minSeguimiento" name="minSeguimiento" value="<?php echo $seguimiento["horas_minimo"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Horas Maximo Tarjeta</label>
                    <input type="time" class="form-control" id="maxSeguimiento" name="maxSeguimiento" value="<?php echo $seguimiento["horas_maximo"]; ?>">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Ubicación</label>
                    <input type="text" class="form-control" id="ubicacionSeguimiento" name="ubicacionSeguimiento" value="<?php echo $seguimiento["ubicacion_seguimiento"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Estados de Tarjeta</label>
                    <select name="estadosSeguimiento" id="estadosSeguimiento" class="form-control">
                        <option value="EN PROCESO" <?php if ($seguimiento["estados_seguimiento"] == "EN PROCESO") : ?>selected<?php endif; ?>>EN PROCESO</option>
                        <option value="LIMPIEZA" <?php if ($seguimiento["estados_seguimiento"] == "LIMPIEZA") : ?>selected<?php endif; ?>>LIMPIEZA</option>
                        <option value="PARA CIERRE DE AREA" <?php if ($seguimiento["estados_seguimiento"] == "PARA CIERRE DE AREA") : ?>selected<?php endif; ?>>PARA CIERRE DE AREA</option>
                        <option value="PARA INSPECCION" <?php if ($seguimiento["estados_seguimiento"] == "PARA INSPECCION") : ?>selected<?php endif; ?>>PARA INSPECCION</option>
                        <option value="NDT" <?php if ($seguimiento["estados_seguimiento"] == "NDT") : ?>selected<?php endif; ?>>NDT</option>
                        <option value="PARA LUBRICACION" <?php if ($seguimiento["estados_seguimiento"] == "PARA LUBRICACION") : ?>selected<?php endif; ?>>PARA LUBRICACION</option>
                        <option value="PENDIENTE COMPONENTE" <?php if ($seguimiento["estados_seguimiento"] == "PENDIENTE COMPONENTE") : ?>selected<?php endif; ?>>PENDIENTE COMPONENTE</option>
                        <option value="PENDIENTE MATERIAL" <?php if ($seguimiento["estados_seguimiento"] == "PENDIENTE MATERIAL") : ?>selected<?php endif; ?>>PENDIENTE MATERIAL</option>
                        <option value="PRUEBAS FUN/OP" <?php if ($seguimiento["estados_seguimiento"] == "PRUEBAS FUN/OP") : ?>selected<?php endif; ?>>PRUEBAS FUN/OP</option>
                        <option value="SIN EMPEZAR" <?php if ($seguimiento["estados_seguimiento"] == "SIN EMPEZAR") : ?>selected<?php endif; ?>>SIN EMPEZAR</option>
                        <option value="VERIFICACION FINAL" <?php if ($seguimiento["estados_seguimiento"] == "VERIFICACION FINAL") : ?>selected<?php endif; ?>>VERIFICACION FINAL</option>
                        <option value="TARJETA CANCELADA" <?php if ($seguimiento["estados_seguimiento"] == "TARJETA CANCELADA") : ?>selected<?php endif; ?>>TARJETA CANCELADA</option>
                        <option value="POR INSTALACION" <?php if ($seguimiento["estados_seguimiento"] == "POR INSTALACION") : ?>selected<?php endif; ?>>POR INSTALACION</option>
                        <option value="TERMINADO" <?php if ($seguimiento["estados_seguimiento"] == "TERMINADO") : ?>selected<?php endif; ?>>TERMINADO</option>
                        <option value="N/A" <?php if ($seguimiento["estados_seguimiento"] == "N/A") : ?>selected<?php endif; ?>>N/A</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Areas</label>
                    <select name="areaSeguimiento" id="areaSeguimiento" class="form-control">
                        <option value="HYD" <?php if ($seguimiento["estados_seguimiento"] == "HYD") : ?> selected <?php endif; ?>>HYD</option>
                        <option value="MOT" <?php if ($seguimiento["area_seguimiento"] == "MOT") : ?> selected <?php endif; ?>>MOT</option>
                        <option value="BUZ" <?php if ($seguimiento["area_seguimiento"] == "BUZ") : ?> selected <?php endif; ?>>BUZ</option>
                        <option value="ALAS" <?php if ($seguimiento["area_seguimiento"] == "AL") : ?> selected <?php endif; ?>>AL</option>
                        <option value="AV" <?php if ($seguimiento["area_seguimiento"] == "AV") : ?> selected <?php endif; ?>>AV</option>
                        <option value="PINTURAS" <?php if ($seguimiento["area_seguimiento"] == "PINTURAS") : ?> selected <?php endif; ?>>PINTURAS</option>
                        <option value="EMPE" <?php if ($seguimiento["area_seguimiento"] == "EMPE") : ?> selected <?php endif; ?>>EMPE</option>
                        <option value="CAB" <?php if ($seguimiento["area_seguimiento"] == "CAB") : ?> selected <?php endif; ?>>CAB</option>
                        <option value="FUS" <?php if ($seguimiento["area_seguimiento"] == "FUS") : ?> selected <?php endif; ?>>FUS</option>
                        <option value="OTROS" <?php if ($seguimiento["area_seguimiento"] == "OTROS") : ?> selected <?php endif; ?>>OTROS</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Numeracion de la Tarjeta</label>
                    <input type="number" class="form-control" id="numeracionSeguimiento" name="numeracionSeguimiento" value="<?php echo $seguimiento["numeracion_seguimiento"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" id="imgProducto" name="imgProducto">
                    <input type="hidden" value="<?php echo $seguimiento["foto_seguimiento"]; ?>" name="imgProductoActual">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group text-center">

                    <?php
                    if ($seguimiento["foto_seguimiento"] == "") {
                    ?>
                        <img src="assest/dist/img/seguimientos/user_default.png" alt="" width="100">

                    <?php
                    } else {
                    ?>
                        <img src="assest/dist/img/seguimientos/<?php echo $seguimiento["foto_seguimiento"]; ?>" alt="" width="100">
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </form>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="EditSeguimiento()">Guardar</button>
</div>