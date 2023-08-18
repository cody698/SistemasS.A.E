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
        <h3 class="card-title">Lista de Consentimiento</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="dataTableAutorizacion" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre Cliente</th>
              <th>Estado</th>
              <th>Fecha Creacion</th>
              <th>Area</th>
              <th>Firma</th>
              <td>
                <button class="btn btn-primary" onclick="MNuevoAutorizacion()">Nuevo Registro</button>
              </td>
            </tr>
          </thead>
          <tbody>
            <?php
            $autorizacion = ControladorAutorizacion::ctrInfoAutorizaciones();

            foreach ($autorizacion as $value) {
            ?>
            <tr>

              <td><?php echo $value["id_autorizacion"]; ?></td>
              <td><?php echo $value["nombre_cliente"]." ".$value["apellido_pat_cliente"]." ".$value["apellido_mat_cliente"]; ?></td>
              <td><?php if($value["estado"]==1){
                ?>
                <span class="badge badge-success">Activo</span>
                <?php
            }else{
                ?>
                <span class="badge badge-danger">Inactivo</span>
                <?php
            }?>
              </td>
              <td><?php echo $value["fecha"]; ?></td>
              <td><?php echo $value["area"]; ?></td>
              <td><?php
              $firmaAutorizacion = base64_decode(
                preg_replace('/^[^,]*,/', '', $value['firma']));

              file_put_contents($value["id_autorizacion"].'.png', $firmaAutorizacion);
                ?>
                <img src="<?php echo $value["id_autorizacion"];?>.png" alt="" width="150">
              </td>
              <td>
                <div class="btn-group">
                  <a href="vista/autorizacion/ImpAutorizacion.php?id=<?php echo $value["id_autorizacion"];?>" class="btn btn-success" target="_blank">
                    <i class="fas fa-print"></i>
                  </a>
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
