<?php
require_once "../../controlador/calibracionControlador.php";
require_once "../../modelo/calibracionModelo.php";

$id = $_GET["id"];

$calibracion = ControladorCalibraciones::ctrInfoCalibracion($id);

?>
<div class="modal-header">
    <h4 class="modal-title">Actualizar Punto de Origen o Calibracion</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormEditCalibracion" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">DESCRIPCION</label>
                    <input type="text" class="form-control" id="desCalibracion" name="desCalibracion" value="<?php echo $calibracion["descripcion_calibracion"]; ?>">
                    <input type="hidden" name="idCalibracion" value="<?php echo $id; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">NUMERO DE PARTE</label>
                    <input type="text" class="form-control" id="pnCalibracion" name="pnCalibracion" value="<?php echo $calibracion["pn_calibracion"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">NUMERO DE PARTE ALT.</label>
                    <input type="text" class="form-control" id="pnaltCalibracion" name="pnaltCalibracion" value="<?php echo $calibracion["pnalt_calibracion"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">NUMERO DE SERIE</label>
                    <input type="text" class="form-control" id="numserieCalibracion" name="numserieCalibracion" value="<?php echo $calibracion["numserie_calibracion"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">CODIGO</label>
                    <input type="text" class="form-control" id="codigoCalibracion" name="codigoCalibracion" value="<?php echo $calibracion["codigo_calibracion"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">MARCA O FABRICANTE</label>
                    <input type="text" class="form-control" id="marcafabriCalibracion" name="marcafabriCalibracion" value="<?php echo $calibracion["marcaofabri_calibracion"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">CANTIDAD</label>
                    <input type="text" class="form-control" id="cantidadCalibracion" name="cantidadCalibracion" value="<?php echo $calibracion["cantidad_calibracion"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">UNIDAD</label>
                    <select name="unidadCalibracion" id="unidadCalibracion" class="form-control">
                        <option>Seleccione</option>
                        <option value="PIEZA" <?php if ($calibracion["unidad_calibracion"] == "PIEZA") : ?> selected <?php endif; ?>>PIEZA</option>
                        <option value="SET" <?php if ($calibracion["unidad_calibracion"] == "SET") : ?> selected <?php endif; ?>>SET</option>
                        <option value="KIT" <?php if ($calibracion["unidad_calibracion"] == "KIT") : ?> selected <?php endif; ?>>KIT</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">OBSERVACION</label>
                    <input type="text" class="form-control" id="observacionCalibracion" name="observacionCalibracion" value="<?php echo $calibracion["observacion_calibracion"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">UBICACION</label>
                    <input type="text" class="form-control" id="ubicacionCalibracion" name="ubicacionCalibracion" value="<?php echo $calibracion["ubicacion_calibracion"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">FECHA CAL.</label>
                    <input type="date" class="form-control" id="fechacalCalibracion" name="fechacalCalibracion" value="<?php echo $calibracion["fechacali_calibracion"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">PERIODO CAL. MESES</label>
                    <input type="text" class="form-control" id="periodocalCalibracion" name="periodocalCalibracion" value="<?php echo $calibracion["periodocali_calibracion"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">FECHA VENCIMIENTO</label>
                    <input type="date" class="form-control" id="fechavenciCalibracion" name="fechavenciCalibracion" value="<?php echo $calibracion["fechavenci_calibracion"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">ESTADO</label>
                    <select name="estadoCalibracion" id="estadoCalibracion" class="form-control">
                        <option>Seleccione</option>
                        <option value="CON TIEMPO" <?php if ($calibracion["estado_calibracion"] == "CON TIEMPO") : ?> selected <?php endif; ?>>CON TIEMPO</option>
                        <option value="VENCIDO" <?php if ($calibracion["estado_calibracion"] == "VENCIDO") : ?> selected <?php endif; ?>>VENCIDO</option>
                        <option value="N/A" <?php if ($calibracion["estado_calibracion"] == "N/A") : ?> selected <?php endif; ?>>N/A</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">DIAS DE ALERTA</label>
                    <input type="text" class="form-control" id="diasalertaCalibracion" name="diasalertaCalibracion" value="<?php echo $calibracion["diasalerta_calibracion"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">ORIGEN DE CALI.</label>
                    <select name="origencaliCalibracion" id="origencaliCalibracion" class="form-control">
                        <option>Seleccione</option>
                        <option value="3M" <?php if ($calibracion["origencali_calibracion"] == "3M") : ?> selected <?php endif; ?>>3M</option>
                        <option value="INGESTEC" <?php if ($calibracion["origencali_calibracion"] == "INGESTEC") : ?> selected <?php endif; ?>>INGESTEC</option>
                        <option value="METRIC" <?php if ($calibracion["origencali_calibracion"] == "METRIC") : ?> selected <?php endif; ?>>METRIC</option>
                        <option value="METROTEST" <?php if ($calibracion["origencali_calibracion"] == "METROTEST") : ?> selected <?php endif; ?>>METROTEST</option>
                        <option value="S.A.E." <?php if ($calibracion["origencali_calibracion"] == "S.A.E.") : ?> selected <?php endif; ?>>S.A.E.</option>
                        <option value="CAMPUS" <?php if ($calibracion["origencali_calibracion"] == "CAMPUS") : ?> selected <?php endif; ?>>CAMPUS</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">PROPIEDAD</label>
                    <select name="propiedaCalibracion" id="propiedaCalibracion" class="form-control">
                        <option>Seleccione</option>
                        <option value="LAB" <?php if ($calibracion["propiedad_calibracion"] == "LAB") : ?> selected <?php endif; ?>>LAB</option>
                        <option value="LATAM" <?php if ($calibracion["propiedad_calibracion"] == "LATAM") : ?> selected <?php endif; ?>>LATAM</option>
                        <option value="S.A.E." <?php if ($calibracion["propiedad_calibracion"] == "S.A.E.") : ?> selected <?php endif; ?>>S.A.E.</option>
                        <option value="SAUL. 14-11-22" <?php if ($calibracion["propiedad_calibracion"] == "SAUL. 14-11-22") : ?> selected <?php endif; ?>>SAUL. 14-11-22</option>
                        <option value="W. SEJAS" <?php if ($calibracion["propiedad_calibracion"] == "W. SEJAS") : ?> selected <?php endif; ?>>W. SEJAS</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">N° CARPETA</label>
                    <input type="text" class="form-control" id="numcarpetaCalibracion" name="numcarpetaCalibracion" value="<?php echo $calibracion["numcarpeta_calibracion"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">N° CERT. LABORATORIO</label>
                    <input type="text" class="form-control" id="numcertiCalibracion" name="numcertiCalibracion" value="<?php echo $calibracion["numcertifi_calibracion"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">N° REG. LABORATORIO</label>
                    <input type="text" class="form-control" id="numregistroCalibracion" name="numregistroCalibracion" value="<?php echo $calibracion["numregistro_calibracion"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">ALCANCE INSTRUMENTO</label>
                    <input type="text" class="form-control" id="alcaninstrucCalibracion" name="alcaninstrucCalibracion" value="<?php echo $calibracion["alcanceinstru_calibracion"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">RESOLUCION INSTRU.</label>
                    <input type="text" class="form-control" id="resinstruCalibracion" name="resinstruCalibracion" value="<?php echo $calibracion["resuinstru_calibracion"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">UBICACION AUTOR.</label>
                    <select name="ubicacionautoCalibracion" id="ubicacionautoCalibracion" class="form-control">
                        <option>Seleccione</option>
                        <option value="ALMACEN CBBA" <?php if ($calibracion["ubicacionautorizada_calibracion"] == "ALMACEN CBBA") : ?> selected <?php endif; ?>>ALMACEN CBBA</option>
                        <option value="EN CALIBRACION" <?php if ($calibracion["ubicacionautorizada_calibracion"] == "EN CALIBRACION") : ?> selected <?php endif; ?>>EN CALIBRACION</option>
                        <option value="N/A" <?php if ($calibracion["ubicacionautorizada_calibracion"] == "N/A") : ?> selected <?php endif; ?>>N/A</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">DOC. SALIDA</label>
                    <input type="text" class="form-control" id="docsalidaCalibracion" name="docsalidaCalibracion" value="<?php echo $calibracion["docsalida_calibracion"]; ?>">
                </div>
            </div>
        </div>
    </form>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="EditCalibracion()">Guardar</button>
</div>