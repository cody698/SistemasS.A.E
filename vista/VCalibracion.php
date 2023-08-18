  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0">ACCESORIOS DE HERRAMIENTAS PARA AJUSTE AL PUNTO DE ORIGEN O CALIBRACION</h3>
                  </div><!-- /.col -->
                  <div class="col-sm-6">

                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <div class="content">
          <div class="container-fluid">
              <table id="DataTableCalibracion" class="table table-bordered table-striped">
                  <thead>
                  <button class="btn btn-success" onclick="MCargarRegistrosCalibracion()">Importar Excel</button>
                      <tr>
                          <th>ITEM</th>
                          <th>DESCRIPCION</th>
                          <th>NUMERO DE PARTE</th>
                          <th>NUMERO DE SERIE</th>
                          <th>CODIGO</th>
                          <th>UBICACION</th>
                          <th>FECHA CAL.</th>
                          <th>N° CARPETA</th>
                          <td>
                              <button class="btn btn-primary" onclick="MNuevoCalibracion()">Agregar</button>
                          </td>
                      </tr>
                  </thead>
                  <tbody>

                      <?php
                        $calibracion = ControladorCalibraciones::ctrInfoCalibraciones();
                        foreach ($calibracion as $value) {
                        ?>
                          <tr>
                              <td><?php echo $value["id_calibracion"]; ?></td>
                              <td><?php echo $value["descripcion_calibracion"]; ?></td>
                              <td><?php echo $value["pn_calibracion"]; ?></td>
                              <td><?php echo $value["numserie_calibracion"]; ?></td>
                              <td><?php echo $value["codigo_calibracion"]; ?></td>
                              <td><?php echo $value["ubicacion_calibracion"]; ?></td>
                              <td><?php echo $value["fechacali_calibracion"]; ?></td>
                              <td><?php echo $value["numcarpeta_calibracion"]; ?></td>
                              <td>
                                  <div class="btn-group">
                                      <button class="btn btn-secondary" onclick="MVerCalibraciones(<?php echo $value["id_calibracion"]; ?>)">
                                          <i class="fas fa-eye"></i>
                                      </button>
                                      <button class="btn btn-warning" onclick="MEditarCalibraciones(<?php echo $value["id_calibracion"]; ?>)">
                                          <i class="fas fa-edit"></i>
                                      </button>
                                      <button class="btn btn-danger" onclick="MEliCalibracion(<?php echo $value["id_calibracion"]; ?>)">
                                          <i class="fas fa-trash"></i>
                                      </button>
                                      <a class="btn btn-sm btn-success" href="vista/reportes/repPorCalibracion.php?id=<?php echo $value["id_calibracion"]; ?>" target="_blank"><i class="fas fa-print"></i></a>
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