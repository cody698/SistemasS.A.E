<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0">Panel Usuarios</h3>
        </div><!-- /.col -->
        <div class="col-sm-6">

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="content">
    <div class="container-fluid">
      <table id="DataTableUsuario" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Nombre Usuario</th>
            <th>E-mail</th>
            <th>Rol</th>
            <th>Fecha Creacion</th>
            <th>Estado</th>
            <td>
             <?php if(habilitado(2)!=null){
            ?>
              <button class="btn btn-primary" onclick="MNuevoUsuario()">Agregar Usuario</button>
              <?php }?>
            </td>
          </tr>
        </thead>
        <tbody>

          <?php
          $usuario=ControladorUsuario::ctrInfoUsuarios();
          foreach($usuario as $value){
          ?>
          <tr>
            <td><?php echo $value["nombre_usuario"];?></td>
            <td><?php echo $value["email_usuario"];?></td>
            <td><?php echo $value["rol_usuario"];?></td>
            <td><?php echo $value["fecha_creacion"];?></td>
            <td><?php if($value["estado_usuario"]==1){
              ?>
              <span class="badge badge-success">Activo</span>
              <?php
          }else{
              ?>
              <span class="badge badge-danger">Inactivo</span>
              <?php
          }?>
            </td>

            <td>
              <div class="btn-group">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"></button>

                <ul class="dropdown-menu">

                  <li>
                    <a href="permisos?<?php echo $value["id_usuario"];?>" class="dropdown-item" target="_blank">Permisos</a>
                  </li>
                  <li>
                    <a href="#" onclick="MVerUsuario(<?php echo $value["id_usuario"];?>)" class="dropdown-item">Información</a>
                  </li>

                </ul>

                <button class="btn btn-warning" onclick="MEditUsuario(<?php echo $value["id_usuario"];?>)">
                  <i class="fas fa-edit"></i>
                </button>
                <button class="btn btn-danger" onclick="MEliUsuario(<?php echo $value["id_usuario"];?>)">
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
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
