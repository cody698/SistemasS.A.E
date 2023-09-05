<?php
require_once "../../controlador/logherramientasControlador.php";
require_once "../../modelo/logherramientasModelo.php";

$id = $_GET["id"];

$herramientas = ControladorLogHerramientas::ctrInfoLogHerramienta($id);

$herra = json_decode($herramientas["codigo_herramientas"]);

?>

<div class="modal-header bg-dark">
    <h4 class="modal-title text-light">Información Comprobante Herramienta Recibida/Entregada</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <tr>
                    <th>FECHA - HORA:</th>
                    <td><?php echo $herramientas["fecha_hora"]; ?></td>
                </tr>
                <tr>
                    <th>TIPO</th>
                    <td><?php echo $herramientas["tipo"]; ?></td>
                </tr>
                <tr>
                    <th>USUARIO</th>
                    <td><?php echo $herramientas["nombre_usuario"]; ?></td>
                </tr>
                <tr>
                    <th>OBSERVACIONES</th>
                    <td><?php echo $herramientas["observaciones"]; ?></td>
                </tr>
            </table>
            <table class="table" style="width: 80%; margin: auto;">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>UBICACION HERRA.</th>
                        <th>DESCRIPCION & CODIGO HERRAMIENTA</th>
                        <th>CANTIDAD</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($herra as $value) {
                        $herraDesc = ControladorLogHerramientas::ctrInfoLogHerramientaDesc($value->id);
                    ?>
                        <tr>
                            <td><?php echo $herraDesc['ubicacion_herramientas'] ?></td>
                            <td><?php echo $herraDesc['descripcion_herramientas']." - ".$herraDesc["codigo_herramientas"] ?></td>
                            <td><?php echo $value->cantidad ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-sm-3">
            <table class="table">


            </table>

        </div>
    </div>
</div>