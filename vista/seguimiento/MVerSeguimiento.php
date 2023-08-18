<?php
require_once "../../controlador/seguimientoControlador.php";
require_once "../../modelo/seguimientoModelo.php";

$id = $_GET["id"];

$seguimiento = ControladorSeguimiento::ctrInfoSeguimiento($id);

?>
<div class="page-content page-container">
    <div class="padding">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-12 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <?php if ($seguimiento["foto_seguimiento"] == "") {
                                    ?>

                                        <img src="assest/dist/img/seguimientos/user_default.png" alt="" class="img" width="300">
                                    <?php
                                    } else {
                                    ?>

                                        <img src="assest/dist/img/seguimientos/<?php echo $seguimiento["foto_seguimiento"]; ?>" alt="" class="img" width="250">
                                    <?php
                                    }
                                    ?>
                                </div>
                                <p><?php echo $seguimiento["cliente_seguimiento"]; ?></p>
                                <i class="mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h5 class="text-center">Información de la Tarjeta</h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">ID de la Tarjeta</p>
                                        <h6 class="text-muted f-w-400"><?php echo $seguimiento["id_seguimiento"]; ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Matricula Aeronave</p>
                                        <h6 class="text-muted f-w-400"><?php echo $seguimiento["matricula_seguimiento"]; ?></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Descripcion</p>
                                        <h6 class="text-muted f-w-400"><?php echo $seguimiento["descripcion_seguimiento"]; ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Observaciones</p>
                                        <h6 class="text-muted f-w-400"><?php echo $seguimiento["observaciones"]; ?></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Tipo Tarjeta</p>
                                        <h6 class="text-muted f-w-400"><?php echo $seguimiento["tipo_tarjeta"]; ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Codigo Tarjeta</p>
                                        <h6 class="text-muted f-w-400"><?php echo $seguimiento["codigo_seguimiento"]; ?></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Horas Minimo</p>
                                        <h6 class="text-muted f-w-400"><?php echo $seguimiento["horas_minimo"]; ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Horas Maximo</p>
                                        <h6 class="text-muted f-w-400"><?php echo $seguimiento["horas_maximo"]; ?></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Ubicacion</p>
                                        <h6 class="text-muted f-w-400"><?php echo $seguimiento["ubicacion_seguimiento"]; ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Estados de la Tarjeta</p>
                                        <h6 class="text-muted f-w-400"><?php echo $seguimiento["estados_seguimiento"]; ?></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Area</p>
                                        <h6 class="text-muted f-w-400"><?php echo $seguimiento["area_seguimiento"]; ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Numeracion</p>
                                            <h6 class="text-muted f-w-400"><?php echo $seguimiento["numeracion_seguimiento"]; ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>