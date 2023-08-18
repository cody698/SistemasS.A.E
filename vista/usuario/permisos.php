<?php
//capturamos la url y separamos el id de usuario
$path = parse_url($_SERVER['REQUEST_URI']);
global $id;
$id = $path["query"];

function permiso($idPermiso)
{
    global $id;

    $permiso = ControladorUsuario::ctrUsuarioPermiso($id, $idPermiso);
    return $permiso;
}

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Permisos habiles para: <?php echo ""; ?></h3>
                            </div>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">

                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary1" <?php if (permiso(1) != false) : ?>checked<?php endif; ?> onChange="actualizarPermiso(<?php echo $id ?>,1)">
                                                <label for="checkboxPrimary1">
                                                    Usuario
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">

                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary2" <?php if (permiso(2) != NULL) : ?>checked<?php endif; ?> onChange="actualizarPermiso(<?php echo $id ?>,2)">
                                                <label for="checkboxPrimary2">
                                                    Agregar Usuario
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">

                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary3" <?php if (permiso(3) != NULL) : ?>checked<?php endif; ?> onChange="actualizarPermiso(<?php echo $id ?>,3)">
                                                <label for="checkboxPrimary3">
                                                    Autorización
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">

                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary4" <?php if (permiso(4) != NULL) : ?>checked<?php endif; ?> onChange="actualizarPermiso(<?php echo $id ?>,4)">
                                                <label for="checkboxPrimary4">
                                                    Buscar Tramite
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">

                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary5" <?php if (permiso(5) != NULL) : ?>checked<?php endif; ?> onChange="actualizarPermiso(<?php echo $id ?>,5)">
                                                <label for="checkboxPrimary5">
                                                    Registro Tarjetas
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">

                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary6" <?php if (permiso(6) != NULL) : ?>checked<?php endif; ?> onChange="actualizarPermiso(<?php echo $id ?>,6)">
                                                <label for="checkboxPrimary6">
                                                    Registrar Archivos
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">

                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary7" <?php if (permiso(7) != NULL) : ?>checked<?php endif; ?> onChange="actualizarPermiso(<?php echo $id ?>,7)">
                                                <label for="checkboxPrimary7">
                                                    Registrar Cliente
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">

                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary10" <?php if (permiso(10) != NULL) : ?>checked<?php endif; ?> onChange="actualizarPermiso(<?php echo $id ?>,10)">
                                                <label for="checkboxPrimary10">
                                                    Herramienta Reci/Entre
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">

                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary11" <?php if (permiso(11) != NULL) : ?>checked<?php endif; ?> onChange="actualizarPermiso(<?php echo $id ?>,11)">
                                                <label for="checkboxPrimary11">
                                                    Control Herramientas
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">

                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary12" <?php if (permiso(12) != NULL) : ?>checked<?php endif; ?> onChange="actualizarPermiso(<?php echo $id ?>,12)">
                                                <label for="checkboxPrimary12">
                                                    Paquete Servicio
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">

                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary8" <?php if (permiso(8) != NULL) : ?>checked<?php endif; ?> onChange="actualizarPermiso(<?php echo $id ?>,8)">
                                                <label for="checkboxPrimary8">
                                                    Materiales
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">

                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary14" <?php if (permiso(14) != NULL) : ?>checked<?php endif; ?> onChange="actualizarPermiso(<?php echo $id ?>,14)">
                                                <label for="checkboxPrimary14">
                                                    Reporte Control Tarjetas
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">

                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary15" <?php if (permiso(15) != NULL) : ?>checked<?php endif; ?> onChange="actualizarPermiso(<?php echo $id ?>,15)">
                                                <label for="checkboxPrimary15">
                                                    Informes Reporte
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">

                                    </div>
                                    <div class="col-sm-4">

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="card-footer clearfix">

                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->