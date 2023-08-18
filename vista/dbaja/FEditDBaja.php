<?php
require_once "../../controlador/dbajaControlador.php";
require_once "../../modelo/dbajaModelo.php";

$id = $_GET["id"];

$dbajas = ControladorDBajas::ctrInfoDbaja($id);

?>
<div class="modal-header">
    <h4 class="modal-title">Actualizar Equipos y Herramientas Dados De Baja</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormEditDBaja" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">DESCRIPCION</label>
                    <input type="text" class="form-control" id="desDBaja" name="desDBaja" value="<?php echo $dbajas["descripcion_dbajas"]; ?>">
                    <input type="hidden" name="idDBaja" value="<?php echo $id; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">NUMERO DE PARTE</label>
                    <input type="text" class="form-control" id="pnDBaja" name="pnDBaja" value="<?php echo $dbajas["pn_dbajas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">NUMERO DE PARTE ALT.</label>
                    <input type="text" class="form-control" id="pnaltDBaja" name="pnaltDBaja" value="<?php echo $dbajas["pnalt_dbajas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">NUMERO DE SERIE</label>
                    <input type="text" class="form-control" id="numserieDBaja" name="numserieDBaja" value="<?php echo $dbajas["numserie_dbajas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">CODIGO</label>
                    <input type="text" class="form-control" id="codigoDBaja" name="codigoDBaja" value="<?php echo $dbajas["codigo_dbajas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">MARCA O FABRICANTE</label>
                    <input type="text" class="form-control" id="marcafabriDBaja" name="marcafabriDBaja" value="<?php echo $dbajas["marcaofabri_dbajas"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">CANTIDAD</label>
                    <input type="text" class="form-control" id="cantidadDBaja" name="cantidadDBaja" value="<?php echo $dbajas["cantidad_dbajas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">UNIDAD</label>
                    <select name="unidadDBaja" id="unidadDBaja" class="form-control">
                        <option>Seleccione</option>
                        <option value="PIEZA" <?php if ($dbajas["unidad_dbajas"] == "PIEZA") : ?> selected <?php endif; ?>>PIEZA</option>
                        <option value="SET" <?php if ($dbajas["unidad_dbajas"] == "SET") : ?> selected <?php endif; ?>>SET</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">OBSERVACION</label>
                    <input type="text" class="form-control" id="observacionDBaja" name="observacionDBaja" value="<?php echo $dbajas["observacion_dbajas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">UBICACION</label>
                    <input type="text" class="form-control" id="ubicacionDBaja" name="ubicacionDBaja" value="<?php echo $dbajas["ubicacion_dbajas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">FECHA CAL.</label>
                    <input type="date" class="form-control" id="fechacalDBaja" name="fechacalDBaja" value="<?php echo $dbajas["fechacali_dbajas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">PERIODO CAL. MESES</label>
                    <input type="text" class="form-control" id="periodocalDBaja" name="periodocalDBaja" value="<?php echo $dbajas["periodocali_dbajas"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">FECHA VENCIMIENTO</label>
                    <input type="date" class="form-control" id="fechavenciDBaja" name="fechavenciDBaja" value="<?php echo $dbajas["fechavenci_dbajas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">ESTADO</label>
                    <select name="estadoDBaja" id="estadoDBaja" class="form-control">
                        <option>Seleccione</option>
                        <option value="CON TIEMPO" <?php if ($dbajas["estado_dbajas"] == "CON TIEMPO") : ?> selected <?php endif; ?>>CON TIEMPO</option>
                        <option value="VENCIDO" <?php if ($dbajas["estado_dbajas"] == "VENCIDO") : ?> selected <?php endif; ?>>VENCIDO</option>
                        <option value="N/A" <?php if ($dbajas["estado_dbajas"] == "N/A") : ?> selected <?php endif; ?>>N/A</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">DIAS DE ALERTA</label>
                    <input type="text" class="form-control" id="diasalertaDBaja" name="diasalertaDBaja" value="<?php echo $dbajas["diasalerta_dbajas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">ORIGEN DE CALI.</label>
                    <select name="origencaliDBaja" id="origencaliDBaja" class="form-control">
                        <option>Seleccione</option>
                        <option value="3M" <?php if ($dbajas["origencali_dbajas"] == "3M") : ?> selected <?php endif; ?>>3M</option>
                        <option value="INGESTEC" <?php if ($dbajas["origencali_dbajas"] == "INGESTEC") : ?> selected <?php endif; ?>>INGESTEC</option>
                        <option value="METRIC" <?php if ($dbajas["origencali_dbajas"] == "METRIC") : ?> selected <?php endif; ?>>METRIC</option>
                        <option value="METROTEST" <?php if ($dbajas["origencali_dbajas"] == "METROTEST") : ?> selected <?php endif; ?>>METROTEST</option>
                        <option value="S.A.E." <?php if ($dbajas["origencali_dbajas"] == "S.A.E.") : ?> selected <?php endif; ?>>S.A.E.</option>
                        <option value="CAMPUS" <?php if ($dbajas["origencali_dbajas"] == "CAMPUS") : ?> selected <?php endif; ?>>CAMPUS</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">PROPIEDAD</label>
                    <select name="propiedaDBaja" id="propiedaDBaja" class="form-control">
                        <option>Seleccione</option>
                        <option value="LAB" <?php if ($dbajas["propiedad_dbajas"] == "LAB") : ?> selected <?php endif; ?>>LAB</option>
                        <option value="LATAM" <?php if ($dbajas["propiedad_dbajas"] == "LATAM") : ?> selected <?php endif; ?>>LATAM</option>
                        <option value="S.A.E." <?php if ($dbajas["propiedad_dbajas"] == "S.A.E.") : ?> selected <?php endif; ?>>S.A.E.</option>
                        <option value="SAUL. 14-11-22" <?php if ($dbajas["propiedad_dbajas"] == "SAUL. 14-11-22") : ?> selected <?php endif; ?>>SAUL. 14-11-22</option>
                        <option value="W. SEJAS" <?php if ($dbajas["propiedad_dbajas"] == "W. SEJAS") : ?> selected <?php endif; ?>>W. SEJAS</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">N° CARPETA</label>
                    <input type="text" class="form-control" id="numcarpetaDBaja" name="numcarpetaDBaja" value="<?php echo $dbajas["numcarpeta_dbajas"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">N° CERT. LABORATORIO</label>
                    <input type="text" class="form-control" id="numcertiDBaja" name="numcertiDBaja" value="<?php echo $dbajas["numcertifi_dbajas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">N° REG. LABORATORIO</label>
                    <input type="text" class="form-control" id="numregistroDBaja" name="numregistroDBaja" value="<?php echo $dbajas["numregistro_dbajas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">ALCANCE INSTRUMENTO</label>
                    <input type="text" class="form-control" id="alcaninstrucDBaja" name="alcaninstrucDBaja" value="<?php echo $dbajas["alcanceinstru_dbajas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">RESOLUCION INSTRU.</label>
                    <input type="text" class="form-control" id="resinstruDBaja" name="resinstruDBaja" value="<?php echo $dbajas["resuinstru_dbajas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">UBICACION AUTOR.</label>
                    <select name="ubicacionautoDBaja" id="ubicacionautoDBaja" class="form-control">
                        <option>Seleccione</option>
                        <option value="ALMACEN CBBA" <?php if ($dbajas["ubicacionautorizada_dbajas"] == "ALMACEN CBBA") : ?> selected <?php endif; ?>>ALMACEN CBBA</option>
                        <option value="EN CALIBRACION" <?php if ($dbajas["ubicacionautorizada_dbajas"] == "EN CALIBRACION") : ?> selected <?php endif; ?>>EN CALIBRACION</option>
                        <option value="N/A" <?php if ($dbajas["ubicacionautorizada_dbajas"] == "N/A") : ?> selected <?php endif; ?>>N/A</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">DOC. SALIDA</label>
                    <input type="text" class="form-control" id="docsalidaDBaja" name="docsalidaDBaja" value="<?php echo $dbajas["docsalida_dbajas"]; ?>">
                </div>
            </div>
        </div>
    </form>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="EditDBaja()">Guardar</button>
</div>