<script src="assest/js/cliente.js"></script>
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
                <h1 class="card-title">Lista de Clientes</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="DataTableCliente" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre(s)</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Fecha Nacimiento</th>
                            <th>Foto</th>
                            <td>
                                <button class="btn btn-primary" onclick="MNuevoCliente()">Agregar Cliente</button>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $cliente = ControladorCliente::ctrInfoClientes();

                        foreach ($cliente as $value) {
                        ?>
                        <tr>

                            <td><?php echo $value["id_cliente"]; ?></td>
                            <td><?php echo $value["nombre_cliente"]; ?></td>
                            <td><?php echo $value["apellido_pat_cliente"]; ?></td>
                            <td><?php echo $value["apellido_mat_cliente"]; ?></td>                       
                            <td><?php echo $value["fecha_nacimiento"]; ?></td>
                            <?php
                            if ($value["foto"] == "") {
                            ?>
                            <td><img src="assest/img/user.jpg" alt="" width="50px"></td>
                            <?php
                            } else {
                            ?>
                            <td><img src="assest/dist/img/cliente/<?php echo $value["foto"]; ?>" alt="" width="50px"></td>
                            <?php
                            }
                            ?>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-secondary" onclick="MVerCliente(<?php echo $value["id_cliente"];?>)">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-warning" onclick="MEditarCliente(<?php echo $value["id_cliente"];?>)">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger" onclick="MEliCliente(<?php echo $value["id_cliente"]; ?>)">
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
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
