<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Panel Registro Paquete Servicios</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <table id="DataTableServicio" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Aeronave</th>
                        <th>Horas Minimo</th>
                        <th>Horas Maximo</th>
                        <th>Horas</th>
                        <th>Porcentaje</th>
                        <th>Observaciones</th>
                        <th>Estado</th>
                        <td>
                            <button class="btn btn-primary" onclick="MNuevoServicio()">Nuevo</button>
                        </td>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $servicio = ControladorServicio::ctrInfoServicios();

                    foreach ($servicio as $value) {
                        $calculoServicios=ControladorServicio::ctrTotHoras($value["cliente"]);
                    ?>
                    <tr>
                        <td><?php echo $value["cliente"]; ?></td>
                        <td><?php echo $value["matricula"]; ?></td>
                        <td><?php echo $value["horasminimo"]; ?></td>
                        <td><?php echo $value["horasmaximo"]; ?></td>
                        <td><?php echo $calculoServicios['totHorasMin'];?></td>
                        <td><?php echo $calculoServicios['porcentaje'];?></td>
                        <td><?php echo $value["observacion_servicio"]; ?></td>
                        <td><?php if ($value["estado"] == 1) {
                            ?>
                            <span class="badge badge-success">Activo</span>
                            <?php
                    } else {
                            ?>
                            <span class="badge badge-danger">Inactivo</span>
                            <?php
                    } ?>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-warning" onclick="MEditServicio(<?php echo $value["id_servicio"]; ?>)">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger" onclick="MEliServicio(<?php echo $value["id_servicio"]; ?>)">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <?php
                    }
                    ?>

                </tbody>

            </table>
        </div><!-- /.container-fluid -->
    </div>

</div>

