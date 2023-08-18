<style>
  .content-wrapper {
    margin-left: 0 !important;
  }

  .content {
    margin-top: 10%;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">

        </div><!-- /.col -->
        <div class="col-sm-6">

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4" style="text-align:center">
          <!-- Automatic element centering -->
          <?php
          //include '../ajax/asistencia.php' 
          ?>
          <div name="movimientos" id="movimientos">
          </div>

          <div class="lockscreen-logo">
            <a href="#"><b>SISTEMA</b> CONTROL TARJETAS</a>
          </div>
          <!-- User name -->
          <div class="lockscreen-name">CONTROL TARJETAS SAE</div>

          <!-- START LOCK SCREEN ITEM -->
          <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
              <img src="assest/files/negocio/logo.gif" alt="User Image">
            </div>
            <!-- /.lockscreen-image -->

            <!-- lockscreen credentials (contains the form) -->
            <form action="" class="lockscreen-credentials" name="formulario" id="formulario" method="POST">
              <div class="input-group">
                <select class="form-control select2Usu" name="codigo_tramite" id="codigo_tramite">
                  <option value="">Seleccione Codigo</option>
                  <?php
                  $nombre = ControladorSeguimiento::ctrInfoSeguimientos();
                  foreach ($nombre as $value) {
                  ?>
                    <option value="<?php echo $value["codigo_seguimiento"]; ?>"><?php echo $value["codigo_seguimiento"]; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <p class="text-danger" id="error-codTra"></p>
              <hr>
              <div class="input-group">
                <select class="form-control select2Usu" name="nomUsuario" id="nomUsuario">
                  <option value="">Seleccione Nombre</option>
                  <?php
                  $nombre = ControladorUsuario::ctrInfoUsuarios();
                  foreach ($nombre as $value) {
                  ?>
                    <option value="<?php echo $value["nombre_usuario"]; ?>"><?php echo $value["nombre_usuario"]; ?></option>
                  <?php
                  }
                  ?>
                </select>
                <div class="input-group-btn">
                  <button type="button" class="btn btn-primary" onclick="registrar_tramite()">
                    <i class="fa fa-arrow-right text-muted"></i>
                  </button>
                </div>
              </div>
              <p class="text-danger" id="error-nomUsuario"></p>
            </form>
            <!-- /.lockscreen credentials -->

          </div>
          <!-- /.lockscreen-item -->
          <div class="help-block text-center">
            <a href="login">Acceder Panel Administrativo</a>
          </div>
          <div class="text-center">

          </div>
          <!-- /.center -->

        </div>
        <div class="col-sm-8">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">VITACORA TARJETAS</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <table id="DTableVitacora" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Matricula</th>
                    <th>Codigo Tarjeta</th>
                    <th>Tipo Tarjeta</th>
                    <th>Estados</th>
                    <th>Disponible</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $seguimiento = ControladorSeguimiento::ctrInfoSeguimientos();
                  foreach ($seguimiento as $value) {
                  ?>
                    <tr>
                      <td><?php echo $value["numeracion_seguimiento"]; ?></td>
                      <td><?php echo $value["matricula_seguimiento"]; ?></td>
                      <td><?php echo $value["codigo_seguimiento"]; ?></td>
                      <td><?php echo $value["tipo_tarjeta"]; ?></td>
                      <td>
                        <select name="estadoSeg[<?php echo $value['codigo_seguimiento']; ?>]" id="estadoSeg[<?php echo $value['codigo_seguimiento']; ?>]" class="form-control-sm" onchange="cambioEstadoSeg('<?php echo $value['codigo_seguimiento']; ?>')">
                          <option value="EN PROCESO" <?php if ($value["estados_seguimiento"] == "EN PROCESO") : ?>selected<?php endif; ?>>EN PROCESO</option>
                          <option value="LIMPIEZA" <?php if ($value["estados_seguimiento"] == "LIMPIEZA") : ?>selected<?php endif; ?>>LIMPIEZA</option>
                          <option value="PARA CIERRE DE AREA" <?php if ($value["estados_seguimiento"] == "PARA CIERRE DE AREA") : ?>selected<?php endif; ?>>PARA CIERRE DE AREA</option>
                          <option value="PARA INSPECCION" <?php if ($value["estados_seguimiento"] == "PARA INSPECCION") : ?>selected<?php endif; ?>>PARA INSPECCION</option>
                          <option value="NDT" <?php if ($value["estados_seguimiento"] == "NDT") : ?>selected<?php endif; ?>>NDT</option>
                          <option value="PARA LUBRICACION" <?php if ($value["estados_seguimiento"] == "PARA LUBRICACION") : ?>selected<?php endif; ?>>PARA LUBRICACION</option>
                          <option value="PENDIENTE COMPONENTE" <?php if ($value["estados_seguimiento"] == "PENDIENTE COMPONENTE") : ?>selected<?php endif; ?>>PENDIENTE COMPONENTE</option>
                          <option value="PENDIENTE MATERIAL" <?php if ($value["estados_seguimiento"] == "PENDIENTE MATERIAL") : ?>selected<?php endif; ?>>PENDIENTE MATERIAL</option>
                          <option value="PRUEBAS FUN/OP" <?php if ($value["estados_seguimiento"] == "PRUEBAS FUN/OP") : ?>selected<?php endif; ?>>PRUEBAS FUN/OP</option>
                          <option value="SIN EMPEZAR" <?php if ($value["estados_seguimiento"] == "SIN EMPEZAR") : ?>selected<?php endif; ?>>SIN EMPEZAR</option>
                          <option value="VERIFICACION FINAL" <?php if ($value["estados_seguimiento"] == "VERIFICACION FINAL") : ?>selected<?php endif; ?>>VERIFICACION FINAL</option>
                          <option value="TARJETA CANCELADA" <?php if ($value["estados_seguimiento"] == "TARJETA CANCELADA") : ?>selected<?php endif; ?>>TARJETA CANCELADA</option>
                          <option value="POR INSTALACION" <?php if ($value["estados_seguimiento"] == "POR INSTALACION") : ?>selected<?php endif; ?>>POR INSTALACION</option>
                          <option value="TERMINADO" <?php if ($value["estados_seguimiento"] == "TERMINADO") : ?>selected<?php endif; ?>>TERMINADO</option>
                          <option value="N/A" <?php if ($value["estados_seguimiento"] == "N/A") : ?>selected<?php endif; ?>>N/A</option>
                        </select>
                      </td>
                      <?php
                      if ($value["disponible"] == 1) {
                      ?>
                        <td><span class="badge badge-success">Disponible</span></td>
                      <?php
                      } else {
                      ?>
                        <td><span class="badge badge-danger">No disponible</span></td>
                      <?php
                      }
                      ?>

                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-info btn-block btn-sm" onclick="VerDetalleVitacora('<?php echo $value["codigo_seguimiento"]; ?>')">
                            <i class="fas fa-eye"></i>
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

        </div>
      </div>

    </div>
  </div>
  <!-- /.content -->
</div>