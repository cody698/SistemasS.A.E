<?php
$seguimiento = ControladorSeguimiento::ctrCantidadEstados();
$proceso = ControladorSeguimiento::ctrCantidadProcesos();
$PendienteMaterial = ControladorSeguimiento::ctrCantidadPendienteMaterial();
$limpieza = ControladorSeguimiento::ctrCantidadLimpiezas();
$observacion = ControladorSeguimiento::ctrCantidadObservaciones();
$final = ControladorSeguimiento::ctrCantidadFinalizaciones();


$respuesta = ModeloGrafica::mdlAD();
$totalAD='';
if(count($respuesta)){
    $totalAD=$respuesta[0]['total'];
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Panel Principal</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-window-close"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Sin Empezar</span>
                            <span class="info-box-number">
                                <?php echo $seguimiento["seguimiento"]; ?>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-secondary elevation-1"><i class="fa fa-tasks fa"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">En Proceso</span>
                            <span class="info-box-number">
                                <?php echo $proceso["seguimiento"]; ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-book-open"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Pendiente Material</span>
                            <span class="info-box-number">
                                <?php echo $PendienteMaterial["seguimiento"]; ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-magic"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Limpieza</span>
                            <span class="info-box-number">
                                <?php echo $limpieza["seguimiento"]; ?>

                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-clipboard-list"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Observaciones</span>
                            <span class="info-box-number">
                                <?php echo $observacion["seguimiento"]; ?>

                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fa fa-check"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Finalizado</span>
                            <span class="info-box-number">
                                <?php echo $final["seguimiento"]; ?>

                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- chart -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Reportes Tarjetas AD <?php echo $totalAD;?></h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    
                                </p>
                            </div>
                            <!-- /.d-flex -->

                            <div class="position-relative mb-4">
                                <canvas id="sales-chart" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- chart end -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->
