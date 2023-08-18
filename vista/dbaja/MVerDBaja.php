<?php
require_once "../../controlador/dbajaControlador.php";
require_once "../../modelo/dbajaModelo.php";

$id = $_GET["id"];

$dbajas = ControladorDBajas::ctrInfoDbaja($id);

?>

<div class="modal-header bg-dark">
    <h4 class="modal-title text-light">Información De Equipos y Herramientas Dados De Baja</h4>
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
                    <td><?php echo $dbajas["id_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>DESCRIPCION</th>
                    <td><?php echo $dbajas["descripcion_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>NUMERO DE PARTE</th>
                    <td><?php echo $dbajas["pn_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>NUMERO DE PARTE ALT.</th>
                    <td><?php echo $dbajas["pnalt_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>NUMERO DE SERIE</th>
                    <td><?php echo $dbajas["numserie_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>CODIGO</th>
                    <td><?php echo $dbajas["codigo_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>MARCA O FABRICANTE</th>
                    <td><?php echo $dbajas["marcaofabri_dbajas"]; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-sm-3">
            <table class="table">
                <tr>
                    <th>CANTIDAD</th>
                    <td><?php echo $dbajas["cantidad_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>UNIDAD</th>
                    <td><?php echo $dbajas["unidad_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>UBICACION</th>
                    <td><?php echo $dbajas["ubicacion_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>FECHA CAL.</th>
                    <td><?php echo $dbajas["fechacali_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>PERIODO CAL. MESES</th>
                    <td><?php echo $dbajas["periodocali_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>FECHA VENCIMIENTO</th>
                    <td><?php echo $dbajas["fechavenci_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>ESTADO</th>
                    <td><?php echo $dbajas["estado_dbajas"]; ?></td>
                </tr>

            </table>

        </div>
        <div class="col-sm-3">
            <table class="table">
                <tr>
                    <th>DIAS DE ALERTA</th>
                    <td><?php echo $dbajas["diasalerta_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>ORIGEN DE CALI.</th>
                    <td><?php echo $dbajas["origencali_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>PROPIEDAD</th>
                    <td><?php echo $dbajas["propiedad_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>N° CARPETA</th>
                    <td><?php echo $dbajas["numcarpeta_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>N° CERT. LABORATORIO</th>
                    <td><?php echo $dbajas["numcertifi_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>N° REG. LABORATORIO</th>
                    <td><?php echo $dbajas["numregistro_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>ALCANCE INSTRUMENTO</th>
                    <td><?php echo $dbajas["alcanceinstru_dbajas"]; ?></td>
                </tr>

            </table>

        </div>
        <div class="col-sm-3">
            <table class="table">
                <tr>
                    <th>RESOLUCION INSTRU.</th>
                    <td><?php echo $dbajas["resuinstru_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>UBICACION AUTOR.</th>
                    <td><?php echo $dbajas["ubicacionautorizada_dbajas"]; ?></td>
                </tr>

                <tr>
                    <th>DOC. SALIDA</th>
                    <td><?php echo $dbajas["docsalida_dbajas"]; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

