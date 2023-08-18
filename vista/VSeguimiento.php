  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0">Panel Registro Tarjetas</h3>
                  </div><!-- /.col -->
                  <div class="col-sm-6">

                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>

      <div class="content">
          <div class="container-fluid">
              <table id="DataTableSeguimiento" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th>N°</th>
                          <th>Matricula</th>
                          <th>Observaciones</th>
                          <th>Codigo Tarjeta</th>
                          <th>Area</th>
                          <th>Tipo Tarjeta</th>
                          <th>Estados</th>
                          <td>
                              <button class="btn btn-primary" onclick="MNuevoSeguimiento()">Nuevo</button>
                          </td>
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
                              <td><?php echo $value["descripcion_seguimiento"]; ?></td>
                              <td><?php echo $value["codigo_seguimiento"]; ?></td>
                              <td><?php echo $value["area_seguimiento"]; ?></td>
                              <td><?php echo $value["tipo_tarjeta"]; ?></td>
                              <td><?php echo $value["estados_seguimiento"]; ?></td>

                              <td>
                                  <div class="btn-group">
                                      <button class="btn btn-secondary" onclick="MVerSeguimiento(<?php echo $value["id_seguimiento"]; ?>)">
                                          <i class="fas fa-eye"></i>
                                      </button>
                                      <button class="btn btn-warning" onclick="MEditSeguimiento(<?php echo $value["id_seguimiento"]; ?>)">
                                          <i class="fas fa-edit"></i>
                                      </button>
                                      <button class="btn btn-danger" onclick="MEliSeguimiento(<?php echo $value["id_seguimiento"]; ?>)">
                                          <i class="fas fa-trash"></i>
                                      </button>
                                      <button class="btn btn-success" onclick="MInfoAdicional('<?php echo $value["codigo_seguimiento"]; ?>')">
                                          <i class="fas fa-list"></i>
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