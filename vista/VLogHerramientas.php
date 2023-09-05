<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Salidas Entradas Herramientas</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="DataTableLogHerramienta" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nombre Tecnico</th>
                            <th>Fecha Hora</th>
                            <th>Tipo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <?php
                        $logherramientas = ControladorLogHerramientas::ctrInfoLogHerramientas();

                        /* FECHA ACTUAL */
                        date_default_timezone_set("America/La_Paz");
                        $fechaActual = new DateTime($fecha = date("Y-m-d"));

                        foreach ($logherramientas as $value) {
                            $fechas = new DateTime($value["fecha_hora"]);
                            $soloFecha = $fechas->format('Y-m-d');
                            $convert = new DateTime($soloFecha);

                            $diferencia = $fechaActual->diff($convert);
                            $totalDias = $diferencia->days * ($diferencia->invert ? -1 : 1);

                        ?>
                            <tr>
                                <td><?php echo $value["nombre_usuario"]; ?></td>

                                <?php
                                if ($totalDias == -5) {
                                ?>
                                    <td><?php echo $value["fecha_hora"]; ?></td>
                                    <script>
                                        function MEnviarEmails() {
                                           
                                            var obj = "";
                                            $.ajax({
                                                type: "POST",
                                                url: "vista/herramientas/EnviosCorreo.php",
                                                data: obj,
                                                success: function(data) {}
                                            })
                                        }
                                        MEnviarEmails();
                                    </script>
                                <?php

                                } else {
                                ?>
                                    <td><?php echo $value["fecha_hora"]; ?></td>
                                <?php
                                }
                          //evaluar si todos los items fueron devueltos
                          //ojo.- con esto el campo lod_herramientas.tipo queda obsoleto
                          $tipoAcm=0;
                          $cantHerr=json_decode($value["codigo_herramientas"]);

                          foreach($cantHerr as $cant){
                            
                              $tipoAcm=$tipoAcm+$cant->cantidad;
                            
                          }
                                ?>

                                <td><?php if ($tipoAcm == 0) {
                                    ?>
                                        <span class="badge badge-success">DEVUELTO</span>
                                    <?php
                                    } else {
                                    ?>
                                        <span class="badge badge-danger">PRESTADO</span>
                                    <?php
                                    } ?>
                                </td>
                                <td>

                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-secondary" onclick="MVerLogHerramienta(<?php echo $value['id_log_herramientas']; ?>)">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-warning" onclick="MDevolucionHerramienta(<?php echo $value['id_log_herramientas']; ?>)" <?php if($tipoAcm==0):?>disabled<?php endif;?>>
                                            <i class="fas fa-sign-out-alt"></i>
                                        </button>
                                    </div>

                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->