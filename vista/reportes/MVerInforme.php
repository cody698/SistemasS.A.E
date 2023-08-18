<?php
require_once "../../controlador/controlherramientasControlador.php";
require_once "../../modelo/controlherramientasModelo.php";

$id = $_GET["id"];

$informe = ControladorHerramientas::ctrInfoInforme($id);

?>
<div class="page-content page-container">
    <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal" arial-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="row container d-flex justify-content-center">
        <div class="col-xl-12 col-md-12">
            <div class="card user-card-full">

                <div class="col-sm-12">
                    <div class="card-block">
                        <h5 class="text-center bg-dark text-white p-2 mt-2 mb-2">Datos del Informe</h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-800">Fecha Informe</p>
                                <h6 class="text-muted f-w-400"><?php echo $informe["fecha_informe"]; ?></h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">De:</p>
                                <h6 class="text-muted f-w-400"><?php echo $informe["de_informe"]; ?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">A:</p>
                                <h6 class="text-muted f-w-400"><?php echo $informe["a_informe"]; ?></h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Número Informe</p>
                                <h6 class="text-muted f-w-400"><?php echo $informe["num_informe"]; ?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Asunto</p>
                                <h6 class="text-muted f-w-400"><?php echo $informe["asunto_informe"]; ?></h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Encargado Informe</p>
                                <h6 class="text-muted f-w-400"><?php echo $informe["encargado_informe"]; ?></h6>
                            </div>
                        </div>
                        <!-- <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Herramientas</p>
                                        <h6 class="text-muted f-w-400"><?php echo $informe["herra_seleccionados"]; ?></h6>
                                    </div>
                                </div> -->

                    </div>
                    <hr>
                    <div class="col-sm-12">
                        <p class="m-b-10 f-w-600 text-center">DESCRIPCION DE INFORME</p>
                        <h6 class="text-muted f-w-400"><?php echo $informe["conclusion_informe"]; ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
</div>