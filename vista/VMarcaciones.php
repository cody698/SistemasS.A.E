  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0">Panel Marcaciones Tarjetas</h3>
                  </div><!-- /.col -->
                  <div class="col-sm-6">

                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>

      <div class="content">
          <div class="container-fluid">
              <table id="DataTableMarcacion" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th>Código</th>
                          <th>Fecha Hora</th>
                          <th>Marcaciones</th>
                          <th>Usuario</th>
                      </tr>
                  </thead>
                  <tbody>

                      <?php
                     $marcacion=ControladorMarcacion::ctrInfoMarcaciones();
                      foreach($marcacion as $value){
                         ?>
                      <tr>
                          <td><?php echo $value["codigo_seguimiento"];?></td>
                          <td><?php echo $value["fecha_hora"];?></td>
                          <td><?php echo $value["tipo"];?></td>
                          <td><?php echo $value["nombre_usuario"];?></td>
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
