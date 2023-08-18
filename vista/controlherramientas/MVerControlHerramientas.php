<?php
require_once "../../controlador/controlherramientasControlador.php";
require_once "../../modelo/controlherramientasModelo.php";

$id = $_GET["id"];

$controlherramientas = ControladorHerramientas::ctrInfoControlHerramienta($id);

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
                    <td><?php echo $controlherramientas["id_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>DESCRIPCION</th>
                    <td><?php echo $controlherramientas["descripcion_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>NUMERO DE PARTE</th>
                    <td><?php echo $controlherramientas["pn_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>NUMERO DE PARTE ALT.</th>
                    <td><?php echo $controlherramientas["pnalt_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>NUMERO DE SERIE</th>
                    <td><?php echo $controlherramientas["numserie_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>CODIGO</th>
                    <td><?php echo $controlherramientas["codigo_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>MARCA O FABRICANTE</th>
                    <td><?php echo $controlherramientas["marcaofabri_controlherramientas"]; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-sm-3">
            <table class="table">
                <tr>
                    <th>CANTIDAD</th>
                    <td><?php echo $controlherramientas["cantidad_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>UNIDAD</th>
                    <td><?php echo $controlherramientas["unidad_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>UBICACION</th>
                    <td><?php echo $controlherramientas["ubicacion_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>FECHA CAL.</th>
                    <td><?php echo $controlherramientas["fechacali_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>PERIODO CAL. MESES</th>
                    <td><?php echo $controlherramientas["periodocali_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>FECHA VENCIMIENTO</th>
                    <td><?php echo $controlherramientas["fechavenci_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>ESTADO</th>
                    <td><?php echo $controlherramientas["estado_controlherramientas"]; ?></td>
                </tr>

            </table>

        </div>
        <div class="col-sm-3">
            <table class="table">
                <tr>
                    <th>DIAS DE ALERTA</th>
                    <td><?php echo $controlherramientas["diasalerta_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>ORIGEN DE CALI.</th>
                    <td><?php echo $controlherramientas["origencali_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>PROPIEDAD</th>
                    <td><?php echo $controlherramientas["propiedad_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>N° CARPETA</th>
                    <td><?php echo $controlherramientas["numcarpeta_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>N° CERT. LABORATORIO</th>
                    <td><?php echo $controlherramientas["numcertifi_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>N° REG. LABORATORIO</th>
                    <td><?php echo $controlherramientas["numregistro_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>ALCANCE INSTRUMENTO</th>
                    <td><?php echo $controlherramientas["alcanceinstru_controlherramientas"]; ?></td>
                </tr>

            </table>

        </div>
        <div class="col-sm-3">
            <table class="table">
                <tr>
                    <th>RESOLUCION INSTRU.</th>
                    <td><?php echo $controlherramientas["resuinstru_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>UBICACION AUTOR.</th>
                    <td><?php echo $controlherramientas["ubicacionautorizada_controlherramientas"]; ?></td>
                </tr>

                <tr>
                    <th>DOC. SALIDA</th>
                    <td><?php echo $controlherramientas["docsalida_controlherramientas"]; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

