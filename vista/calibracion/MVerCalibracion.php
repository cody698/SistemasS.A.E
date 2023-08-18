<?php
require_once "../../controlador/calibracionControlador.php";
require_once "../../modelo/calibracionModelo.php";

$id = $_GET["id"];

$calibracion = ControladorCalibraciones::ctrInfoCalibracion($id);

?>

<div class="modal-header bg-dark">
    <h4 class="modal-title text-light">Información del Control Herramientas</h4>
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
                    <td><?php echo $calibracion["id_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>DESCRIPCION</th>
                    <td><?php echo $calibracion["descripcion_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>NUMERO DE PARTE</th>
                    <td><?php echo $calibracion["pn_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>NUMERO DE PARTE ALT.</th>
                    <td><?php echo $calibracion["pnalt_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>NUMERO DE SERIE</th>
                    <td><?php echo $calibracion["numserie_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>CODIGO</th>
                    <td><?php echo $calibracion["codigo_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>MARCA O FABRICANTE</th>
                    <td><?php echo $calibracion["marcaofabri_calibracion"]; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-sm-3">
            <table class="table">
                <tr>
                    <th>CANTIDAD</th>
                    <td><?php echo $calibracion["cantidad_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>UNIDAD</th>
                    <td><?php echo $calibracion["unidad_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>UBICACION</th>
                    <td><?php echo $calibracion["ubicacion_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>FECHA CAL.</th>
                    <td><?php echo $calibracion["fechacali_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>PERIODO CAL. MESES</th>
                    <td><?php echo $calibracion["periodocali_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>FECHA VENCIMIENTO</th>
                    <td><?php echo $calibracion["fechavenci_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>ESTADO</th>
                    <td><?php echo $calibracion["estado_calibracion"]; ?></td>
                </tr>

            </table>

        </div>
        <div class="col-sm-3">
            <table class="table">
                <tr>
                    <th>DIAS DE ALERTA</th>
                    <td><?php echo $calibracion["diasalerta_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>ORIGEN DE CALI.</th>
                    <td><?php echo $calibracion["origencali_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>PROPIEDAD</th>
                    <td><?php echo $calibracion["propiedad_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>N° CARPETA</th>
                    <td><?php echo $calibracion["numcarpeta_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>N° CERT. LABORATORIO</th>
                    <td><?php echo $calibracion["numcertifi_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>N° REG. LABORATORIO</th>
                    <td><?php echo $calibracion["numregistro_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>ALCANCE INSTRUMENTO</th>
                    <td><?php echo $calibracion["alcanceinstru_calibracion"]; ?></td>
                </tr>

            </table>

        </div>
        <div class="col-sm-3">
            <table class="table">
                <tr>
                    <th>RESOLUCION INSTRU.</th>
                    <td><?php echo $calibracion["resuinstru_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>UBICACION AUTOR.</th>
                    <td><?php echo $calibracion["ubicacionautorizada_calibracion"]; ?></td>
                </tr>

                <tr>
                    <th>DOC. SALIDA</th>
                    <td><?php echo $calibracion["docsalida_calibracion"]; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>


