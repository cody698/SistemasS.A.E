<?php
require_once "../../controlador/herramientasControlador.php";
require_once "../../modelo/herramientasModelo.php";

$id = $_GET["id"];

$herramientas = ControladorHerramientasSalidas::ctrInfoHerramienta($id);

?>

<div class="modal-header bg-dark">
    <h4 class="modal-title text-light">Información Herramientas Recibidas/Entregadas SAE-LAB</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-3">
            <table class="table">
                <tr>
                    <th>ITEM</th>
                    <td><?php echo $herramientas["id_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>N°</th>
                    <td><?php echo $herramientas["num_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>DESCRIPCION</th>
                    <td><?php echo $herramientas["descripcion_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>P/N</th>
                    <td><?php echo $herramientas["pn_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>P/N ALT.</th>
                    <td><?php echo $herramientas["pnalt_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>S/N</th>
                    <td><?php echo $herramientas["sn_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>CODIGO</th>
                    <td><?php echo $herramientas["codigo_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>MARCA O FABRICANTE</th>
                    <td><?php echo $herramientas["marcaofabri_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>CANTIDAD</th>
                    <td><?php echo $herramientas["cantidad_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>UNIDAD</th>
                    <td><?php echo $herramientas["unidad_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>UBICACION</th>
                    <td><?php echo $herramientas["ubicacion_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>OBSERVACION</th>
                    <td><?php echo $herramientas["observacion_herramientas"]; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-sm-3">
            <table class="table">
                <tr>
                    <th>OBS (REP.) DOC.</th>
                    <td><?php echo $herramientas["obsrepdoc_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>N° CARPETA</th>
                    <td><?php echo $herramientas["numcarpeta_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>EQUIVALENCIA TECNICA</th>
                    <td><?php echo $herramientas["equivatecnica_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>REF. DEL MANUAL</th>
                    <td><?php echo $herramientas["hojamanual_herramientas"]; ?></td>
                </tr>
                <tr>
                    <th>IDENTIFICACION</th>
                    <td><?php echo $herramientas["identificacion_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>ULTIMO INVENTARIO</th>
                    <td><?php echo $herramientas["ultimoinven_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>AERONAVES</th>
                    <td><?php echo $herramientas["aeronaves_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>ATA</th>
                    <td><?php echo $herramientas["ata_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>RANGO MEDIDA</th>
                    <td><?php echo $herramientas["rangomedida_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>INVENTARIO</th>
                    <td><?php echo $herramientas["inventario"]; ?></td>
                </tr>

                <tr>
                    <th>ESTANTE</th>
                    <td><?php echo $herramientas["estante_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>SECCION</th>
                    <td><?php echo $herramientas["seccion_herramientas"]; ?></td>
                </tr>
            </table>

        </div>
        <div class="col-sm-3">
            <table class="table">
                <tr>
                    <th>PERMANT</th>
                    <td><?php echo $herramientas["permant_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>PERCAL</th>
                    <td><?php echo $herramientas["percal_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>TALLER</th>
                    <td><?php echo $herramientas["taller_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>STATUS</th>
                    <td><?php echo $herramientas["status_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>NOMBRE & CODIGO EMPLEADO</th>
                    <td><?php echo $herramientas["nombreemple_herramientas"] . " " . $herramientas["codigoemple_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>FECHA PREST.</th>
                    <td><?php echo $herramientas["fechaprest_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>FECHA DEV.</th>
                    <td><?php echo $herramientas["fechadev_herramientas"]; ?></td>
                </tr>
                <tr>
                    <th>ENCARGADO</th>
                    <td><?php echo $herramientas["encargado_herramientas"]; ?></td>
                </tr>
                <tr>
                    <th>FLOTA</th>
                    <td><?php echo $herramientas["flota_herramientas"]; ?></td>
                </tr>
                <tr>
                    <th>USO</th>
                    <td><?php echo $herramientas["uso_herramientas"]; ?></td>
                </tr>
                <tr>
                    <th>DOCMANT</th>
                    <td><?php echo $herramientas["docmant_herramientas"]; ?></td>
                </tr>
                <tr>
                    <th>DOC.</th>
                    <td><?php echo $herramientas["doc_herramientas"]; ?></td>
                </tr>

            </table>

        </div>
        <div class="col-sm-3">
            <table class="table">
                <tr>
                    <th>STICKER</th>
                    <td><?php echo $herramientas["sticker_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>CALIBRADA ESPECIALIZADA ESTANDAR</th>
                    <td><?php echo $herramientas["calibradaespecia_herramientas"]; ?></td>
                </tr>
                <tr>
                    <th>ESTADO DE HERRAMIENTA</th>
                    <td><?php echo $herramientas["estadoherramienta_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>REQUIERE INSP. PERIODICA</th>
                    <td><?php echo $herramientas["requiereinspecperiodica_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>UBICACION ACTUAL</th>
                    <td><?php echo $herramientas["ubicacionactual_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>OBSERVACIONES DELL</th>
                    <td><?php echo $herramientas["observacionesdel_herramientas"]; ?></td>
                </tr>

                <tr>
                    <th>IMAGEN
                        <?php
                        if ($herramientas["imagen_herramientas"] == "") {
                        ?>
                            <img src="assest/dist/img/herramientas/logosae.gif" alt="" width="100">

                        <?php
                        } else {
                        ?>
                            <img src="assest/dist/img/herramientas/<?php echo $herramientas["imagen_herramientas"]; ?>" alt="" width="100">
                        <?php
                        } ?>
                    </th>
                </tr>
            </table>
        </div>
    </div>
</div>