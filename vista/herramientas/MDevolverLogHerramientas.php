<?php
require_once "../../controlador/logherramientasControlador.php";
require_once "../../modelo/logherramientasModelo.php";

$id = $_GET["id"];

$herramientas = ControladorLogHerramientas::ctrInfoLogHerramienta($id);

$herra = json_decode($herramientas["codigo_herramientas"]);

?>

<div class="modal-header bg-dark">
    <h4 class="modal-title text-light">Devolución de Herramientas</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-12">
            <form id="FDevHerramientas">
                <input type="hidden" name="idPrestamo" id="idPrestamo" value="<?php echo $id ?>">
                
                <table class="table" style="width: 80%; margin: auto;">
                    <thead >
                        <tr >
                            <th style="background-color: #000000; color: white;">UBICACION HERRA.</th>
                            <th style="background-color: #000000; color: white;">DESCRIPCION & CODIGO HERRAMIENTA</th>
                            <th style="background-color: #000000; color: white;">CANTIDAD</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($herra as $value) {
                            $herraDesc = ControladorLogHerramientas::ctrInfoLogHerramientaDesc($value->id);
                        ?>
                            <tr>
                                <td><?php echo $herraDesc['ubicacion_herramientas'] ?></td>
                                <td><?php echo $herraDesc['descripcion_herramientas'] . " - " . $herraDesc["codigo_herramientas"] ?></td>
                                <td><input class="text-center" type="number" name="cantidad[]" id="cantHerramienta" value="<?php echo $value->cantidad ?>" max="<?php echo $value->cantidad ?>" min="0"></td>

                                <input type="hidden" name="cantidadActual[]" value="<?php echo $value->cantidad ?>">

                                <td><input class="text-center" type="hidden" name="ids[]" value="<?php echo $herraDesc["id_herramientas"] ?>"></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="RegDevHerramientas()">Realizar Devolución</button>
            </div>
        </div>
    </div>
</div>