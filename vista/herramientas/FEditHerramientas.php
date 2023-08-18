<?php
require_once "../../controlador/herramientasControlador.php";
require_once "../../modelo/herramientasModelo.php";

$id = $_GET["id"];

$herramientas = ControladorHerramientasSalidas::ctrInfoHerramienta($id);

?>
<div class="modal-header">
    <h4 class="modal-title">Actualizar Control Herramientas</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormEditHerramienta" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">N°</label>
                    <input type="text" class="form-control" id="nHerramientas" name="nHerramientas" value="<?php echo $herramientas["num_herramientas"]; ?>">
                    <input type="hidden" name="idHerramientas" value="<?php echo $id; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">DESCRIPCION</label>
                    <input type="text" class="form-control" id="desHerramientas" name="desHerramientas" value="<?php echo $herramientas["descripcion_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">P/N</label>
                    <input type="text" class="form-control" id="pnHerramientas" name="pnHerramientas" value="<?php echo $herramientas["pn_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">P/N ALT.</label>
                    <input type="text" class="form-control" id="pnaltHerramientas" name="pnaltHerramientas" value="<?php echo $herramientas["pnalt_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">S/N</label>
                    <input type="text" class="form-control" id="numserieHerramientas" name="numserieHerramientas" value="<?php echo $herramientas["sn_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">CODIGO</label>
                    <input type="text" class="form-control" id="codigoHerramientas" name="codigoHerramientas" value="<?php echo $herramientas["codigo_herramientas"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">MARCA O FABRICANTE</label>
                    <input type="text" class="form-control" id="marcafabriHerramientas" name="marcafabriHerramientas" value="<?php echo $herramientas["marcaofabri_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">CANTIDAD</label>
                    <input type="text" class="form-control" id="cantidadHerramientas" name="cantidadHerramientas" value="<?php echo $herramientas["cantidad_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">UNIDAD</label>
                    <select name="unidadHerramientas" id="unidadHerramientas" class="form-control">
                        <option>Seleccione</option>
                        <option value="PIEZA" <?php if ($herramientas["unidad_herramientas"] == "PIEZA") : ?> selected <?php endif; ?>>PIEZA</option>
                        <option value="PIEZAS" <?php if ($herramientas["unidad_herramientas"] == "PIEZAS") : ?> selected <?php endif; ?>>PIEZAS</option>
                        <option value="ROLLO" <?php if ($herramientas["unidad_herramientas"] == "ROLLO") : ?> selected <?php endif; ?>>ROLLO</option>
                        <option value="ASSY" <?php if ($herramientas["unidad_herramientas"] == "ASSY") : ?> selected <?php endif; ?>>ASSY</option>
                        <option value="METROS" <?php if ($herramientas["unidad_herramientas"] == "METROS") : ?> selected <?php endif; ?>>METROS</option>
                        <option value="SET" <?php if ($herramientas["unidad_herramientas"] == "SET") : ?> selected <?php endif; ?>>SET</option>
                        <option value="PAR" <?php if ($herramientas["unidad_herramientas"] == "PAR") : ?> selected <?php endif; ?>>PAR</option>
                        <option value="KIT" <?php if ($herramientas["unidad_herramientas"] == "KIT") : ?> selected <?php endif; ?>>KIT</option>
                        <option value="N/A" <?php if ($herramientas["unidad_herramientas"] == "N/A") : ?> selected <?php endif; ?>>N/A</option>
                        <option value="CM" <?php if ($herramientas["unidad_herramientas"] == "CM") : ?> selected <?php endif; ?>>CM</option>
                        <option value="EA" <?php if ($herramientas["unidad_herramientas"] == "EA") : ?> selected <?php endif; ?>>EA</option>
                        <option value="M" <?php if ($herramientas["unidad_herramientas"] == "M") : ?> selected <?php endif; ?>>M</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">UBICACION</label>
                    <input type="text" class="form-control" id="ubicacionHerramientas" name="ubicacionHerramientas" value="<?php echo $herramientas["ubicacion_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">OBSERVACION</label>
                    <input type="text" class="form-control" id="observacionHerramientas" name="observacionHerramientas" value="<?php echo $herramientas["observacion_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">OBS (REP.) DOC.</label>
                    <select name="obsrepdocHerramientas" id="obsrepdocHerramientas" class="form-control">
                        <option>SELECCIONE OBS</option>
                        <option value="-" <?php if ($herramientas["obsrepdoc_herramientas"] == "-") : ?> selected <?php endif; ?>>-</option>
                        <option value="CON DOC." <?php if ($herramientas["obsrepdoc_herramientas"] == "CON DOC.") : ?> selected <?php endif; ?>>CON DOC.</option>
                        <option value="N/A" <?php if ($herramientas["obsrepdoc_herramientas"] == "N/A") : ?> selected <?php endif; ?>>N/A</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">N° CARPETA</label>
                    <input type="text" class="form-control" id="numcarpetaHerramientas" name="numcarpetaHerramientas" value="<?php echo $herramientas["numcarpeta_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">EQUIVALENCIA TECNICA</label>
                    <select name="equivalenciatecnicaHerramientas" id="equivalenciatecnicaHerramientas" class="form-control">
                        <option value="CONFECCIONADO" <?php if ($herramientas["equivatecnica_herramientas"] == "CONFECCIONADO") : ?> selected <?php endif; ?>>CONFECCIONADO</option>
                        <option value="ORIGINAL" <?php if ($herramientas["equivatecnica_herramientas"] == "ORIGINAL") : ?> selected <?php endif; ?>>ORIGINAL</option>
                        <option value="SAE412-6,SAE412-5,SAE412-3" <?php if ($herramientas["equivatecnica_herramientas"] == "SAE412-6,SAE412-5,SAE412-3") : ?> selected <?php endif; ?>>SAE412-6,SAE412-5,SAE412-3</option>
                        <option value="SAE413-4,SAE413-3,SAE413-2" <?php if ($herramientas["equivatecnica_herramientas"] == "SAE413-4,SAE413-3,SAE413-2") : ?> selected <?php endif; ?>>SAE413-4,SAE413-3,SAE413-2</option>
                        <option value="SI TIENE" <?php if ($herramientas["equivatecnica_herramientas"] == "SI TIENE") : ?> selected <?php endif; ?>>SI TIENE</option>
                        <option value="NO TIENE" <?php if ($herramientas["equivatecnica_herramientas"] == "NO TIENE") : ?> selected <?php endif; ?>>NO TIENE</option>
                        <option value="N/A" <?php if ($herramientas["equivatecnica_herramientas"] == "N/A") : ?> selected <?php endif; ?>>N/A</option>
                        <option value="-" <?php if ($herramientas["equivatecnica_herramientas"] == "-") : ?> selected <?php endif; ?>>-</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">REF. DE MANUAL</label>
                    <select name="hojamanualHerramientas" id="hojamanualHerramientas" class="form-control">
                        <option>SELECCIONE REF.</option>
                        <option value="NO TIENE" <?php if ($herramientas["hojamanual_herramientas"] == "NO TIENE") : ?> selected <?php endif; ?>>NO TIENE</option>
                        <option value="NO" <?php if ($herramientas["hojamanual_herramientas"] == "NO") : ?> selected <?php endif; ?>>NO</option>
                        <option value="OK" <?php if ($herramientas["hojamanual_herramientas"] == "OK") : ?> selected <?php endif; ?>>OK</option>
                        <option value="N/A" <?php if ($herramientas["hojamanual_herramientas"] == "N/A") : ?> selected <?php endif; ?>>N/A</option>
                        <option value="-" <?php if ($herramientas["hojamanual_herramientas"] == "-") : ?> selected <?php endif; ?>>-</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">IDENTIFICACION</label>
                    <select name="identificacionHerramientas" id="identificacionHerramientas" class="form-control">
                        <option>SELECCIONE IDENTIFICACION</option>
                        <option value="NO" <?php if ($herramientas["identificacion_herramientas"] == "NO") : ?> selected <?php endif; ?>>NO</option>
                        <option value="SI" <?php if ($herramientas["identificacion_herramientas"] == "SI") : ?> selected <?php endif; ?>>SI</option>
                        <option value="-" <?php if ($herramientas["identificacion_herramientas"] == "-") : ?> selected <?php endif; ?>>-</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">ULTIMO INVENTARIO</label>
                    <select name="ultimoinventarioHerramientas" id="ultimoinventarioHerramientas" class="form-control">
                        <option>SELECCIONE ULTIMO INVENTARIO</option>
                        <option value="NO" <?php if ($herramientas["ultimoinven_herramientas"] == "NO") : ?> selected <?php endif; ?>>NO</option>
                        <option value="SI" <?php if ($herramientas["ultimoinven_herramientas"] == "SI") : ?> selected <?php endif; ?>>SI</option>
                        <option value="N/A" <?php if ($herramientas["ultimoinven_herramientas"] == "N/A") : ?> selected <?php endif; ?>>N/A</option>
                        <option value="-" <?php if ($herramientas["ultimoinven_herramientas"] == "-") : ?> selected <?php endif; ?>>-</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">AERONAVE</label>
                    <input type="text" class="form-control" id="aeronaveHerramientas" name="aeronaveHerramientas" value="<?php echo $herramientas["aeronaves_herramientas"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">ATA</label>
                    <input type="text" class="form-control" id="ataHerramientas" name="ataHerramientas" value="<?php echo $herramientas["ata_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">RANGO MEDIDA</label>
                    <input type="text" class="form-control" id="rangomedidaHerramientas" name="rangomedidaHerramientas" value="<?php echo $herramientas["rangomedida_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">INVENTARIO</label>
                    <input type="text" class="form-control" id="inventarioHerramientas" name="inventarioHerramientas" value="<?php echo $herramientas["inventario"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">ESTANTE</label>
                    <input type="text" class="form-control" id="estanteHerramientas" name="estanteHerramientas" value="<?php echo $herramientas["estante_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">SECCION</label>
                    <input type="text" class="form-control" id="seccionHerramientas" name="seccionHerramientas" value="<?php echo $herramientas["seccion_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">PERMANT</label>
                    <input type="text" class="form-control" id="permantHerramientas" name="permantHerramientas" value="<?php echo $herramientas["permant_herramientas"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">PERCAL</label>
                    <input type="text" class="form-control" id="percalHerramientas" name="percalHerramientas" value="<?php echo $herramientas["percal_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">TALLER</label>
                    <select name="tallerHerramientas" id="tallerHerramientas" class="form-control">
                        <option>SELECCIONE TALLER</option>
                        <option value="MECANICAS" <?php if ($herramientas["taller_herramientas"] == "MECANICAS") : ?> selected <?php endif; ?>>MECANICAS</option>
                        <option value="MISCELANEOS" <?php if ($herramientas["taller_herramientas"] == "MISCELANEOS") : ?> selected <?php endif; ?>>MISCELANEOS</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">STATUS</label>
                    <input type="text" class="form-control" id="statusHerramientas" name="statusHerramientas" value="<?php echo $herramientas["status_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">NOMBRE EMPLEADO</label>
                    <input type="text" class="form-control" id="nomempleadoHerramientas" name="nomempleadoHerramientas" value="<?php echo $herramientas["nombreemple_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">CODIGO EMPLEADO</label>
                    <input type="text" class="form-control" id="codempleadoHerramientas" name="codempleadoHerramientas" value="<?php echo $herramientas["codigoemple_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">FECHA PRESTAMO</label>
                    <input type="date" class="form-control" id="fechaprestHerramientas" name="fechaprestHerramientas" value="<?php echo $herramientas["fechaprest_herramientas"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">FECHA DEVEVOLUCION</label>
                     <input type="date" class="form-control" id="fechadevHerramientas" name="fechadevHerramientas" value="<?php echo $herramientas["fechadev_herramientas"]; ?>">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ENCARGADO</label>
                     <input type="text" class="form-control" id="encargadoHerramientas" name="encargadoHerramientas" placeholder="Encargado" value="<?php echo $herramientas["encargado_herramientas"]; ?>">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">FLOTA</label>
                     <input type="text" class="form-control" id="flotaHerramientas" name="flotaHerramientas" value="<?php echo $herramientas["flota_herramientas"]; ?>">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">USO</label>
                     <input type="text" class="form-control" id="usoHerramientas" name="usoHerramientas" value="<?php echo $herramientas["uso_herramientas"]; ?>">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">DOCMANT</label>
                     <input type="text" class="form-control" id="docmantHerramientas" name="docmantHerramientas" value="<?php echo $herramientas["docmant_herramientas"]; ?>">
                 </div>
             </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">DOC</label>
                    <select name="docHerramientas" id="docHerramientas" class="form-control">
                        <option>SELECCIONE DOC</option>
                        <option value="CON DOC." <?php if ($herramientas["doc_herramientas"] == "CON DOC.") : ?> selected <?php endif; ?>>CON DOC.</option>
                        <option value="N/A" <?php if ($herramientas["doc_herramientas"] == "N/A") : ?> selected <?php endif; ?>>N/A</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-2">
                <div class="form-group">
                    <label for="">STICKER</label>
                    <select name="stickerHerramientas" id="stickerHerramientas" class="form-control">
                        <option>SELECCIONE STICKER</option>
                        <option value="NO" <?php if ($herramientas["sticker_herramientas"] == "NO") : ?> selected <?php endif; ?>>NO</option>
                        <option value="SI" <?php if ($herramientas["sticker_herramientas"] == "SI") : ?> selected <?php endif; ?>>SI</option>
                        <option value="N/A" <?php if ($herramientas["sticker_herramientas"] == "N/A") : ?> selected <?php endif; ?>>N/A</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">CAL. ESPECIALIZADA</label>
                    <select name="calibradaespecializadaHerramientas" id="calibradaespecializadaHerramientas" class="form-control">
                        <option>SELECCIONE CALIBRADAS ESPECIALIZADA</option>
                        <option value="CALIBRADA" <?php if ($herramientas["calibradaespecia_herramientas"] == "CALIBRADA") : ?> selected <?php endif; ?>>CALIBRADA</option>
                        <option value="ESPECIALIZADA" <?php if ($herramientas["calibradaespecia_herramientas"] == "ESPECIALIZADA") : ?> selected <?php endif; ?>>ESPECIALIZADA</option>
                        <option value="ESPECIALIZADA NO CAL. REQUIRED" <?php if ($herramientas["calibradaespecia_herramientas"] == "ESPECIALIZADA NO CAL. REQUIRED") : ?> selected <?php endif; ?>>ESPECIALIZADA NO CAL. REQUIRED</option>
                        <option value="ESTANDAR" <?php if ($herramientas["calibradaespecia_herramientas"] == "ESTANDAR") : ?> selected <?php endif; ?>>ESTANDAR</option>
                        <option value="N/A" <?php if ($herramientas["calibradaespecia_herramientas"] == "N/A") : ?> selected <?php endif; ?>>N/A</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">ESTADO HERRAMIEN.</label>
                    <select name="estadoHerramientas" id="estadoHerramientas" class="form-control">
                        <option>SELECCIONE ESTADO HERRAMIENTAS</option>
                        <option value="OK" <?php if ($herramientas["estadoherramienta_herramientas"] == "OK") : ?> selected <?php endif; ?>>OK</option>
                        <option value="BIEN" <?php if ($herramientas["estadoherramienta_herramientas"] == "BIEN") : ?> selected <?php endif; ?>>BIEN</option>
                        <option value="EN MAL ESTADO" <?php if ($herramientas["estadoherramienta_herramientas"] == "EN MAL ESTADO") : ?> selected <?php endif; ?>>EN MAL ESTADO</option>
                        <option value="FALTA GLAS PAINT & HOSE" <?php if ($herramientas["estadoherramienta_herramientas"] == "FALTA GLAS PAINT & HOSE") : ?> selected <?php endif; ?>>FALTA GLAS PAINT & HOSE</option>
                        <option value="N/A" <?php if ($herramientas["estadoherramienta_herramientas"] == "N/A") : ?> selected <?php endif; ?>>N/A</option>
                        <option value="NUEVO" <?php if ($herramientas["estadoherramienta_herramientas"] == "NUEVO") : ?> selected <?php endif; ?>>NUEVO</option>
                        <option value="NUEVO OK" <?php if ($herramientas["estadoherramienta_herramientas"] == "NUEVO OK") : ?> selected <?php endif; ?>>NUEVO OK</option>
                        <option value="OK SEMINUEVO" <?php if ($herramientas["estadoherramienta_herramientas"] == "OK SEMINUEVO") : ?> selected <?php endif; ?>>OK SEMINUEVO</option>
                        <option value="N/A" <?php if ($herramientas["estadoherramienta_herramientas"] == "N/A") : ?> selected <?php endif; ?>>N/A</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">REQUIERE INSP. PERIO.</label>
                    <select name="requiereinspeperiodicaHerramientas" id="requiereinspeperiodicaHerramientas" class="form-control">
                        <option>SELECCIONE REQUIERE INSPECCION PERIODICA</option>
                        <option value="INSPECCION PERIODICA" <?php if ($herramientas["requiereinspecperiodica_herramientas"] == "INSPECCION PERIODICA") : ?> selected <?php endif; ?>>INSPECCION PERIODICA</option>
                        <option value="N/A" <?php if ($herramientas["requiereinspecperiodica_herramientas"] == "N/A") : ?> selected <?php endif; ?>>N/A</option>
                        <option value="SI" <?php if ($herramientas["requiereinspecperiodica_herramientas"] == "SI") : ?> selected <?php endif; ?>>SI</option>
                        <option value="-" <?php if ($herramientas["requiereinspecperiodica_herramientas"] == "-") : ?> selected <?php endif; ?>>-</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">UBICACION ACTUAL</label>
                    <input type="text" class="form-control" id="ubicacionactualHerramientas" name="ubicacionactualHerramientas" value="<?php echo $herramientas["ubicacionactual_herramientas"]; ?>">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">OBSERVACIONES DEL</label>
                    <input type="text" class="form-control" id="observacionesdelHerramientas" name="observacionesdelHerramientas" value="<?php echo $herramientas["observacionesdel_herramientas"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-2">
                <div class="form-group">
                    <label for="">IMAGENES</label>
                    <input type="file" class="form-control" id="imgHerramientas" name="imgHerramientas">
                    <input type="hidden" value="<?php echo $herramientas["imagen_herramientas"]; ?>" name="imgHerramientasActual">
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group text-center">

                    <?php
                    if ($herramientas["imagen_herramientas"] == "") {
                    ?>
                        <img src="assest/dist/img/herramientas/logo.png" alt="" width="100">

                    <?php
                    } else {
                    ?>
                        <img src="assest/dist/img/herramientas/<?php echo $herramientas["imagen_herramientas"]; ?>" alt="" width="100">
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </form>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="EditHerramientas()">Guardar</button>
</div>