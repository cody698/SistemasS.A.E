  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0">EQUIPOS Y HERRAMIENTAS DADOS DE BAJA</h3>
                  </div><!-- /.col -->
                  <div class="col-sm-6">

                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <div class="content">
          <div class="container-fluid">
              <table id="DataTableDBaja" class="table table-bordered table-striped">
                  <thead>
                  <button class="btn btn-success" onclick="MCargarRegistrosDBaja()">Importar Excel</button>
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
                              <button class="btn btn-primary" onclick="MNuevoDBaja()">Agregar</button>
                          </td>
                      </tr>
                  </thead>
                  <tbody>

                      <?php
                        $dbaja = ControladorDBajas::ctrInfoDbajas();
                        foreach ($dbaja as $value) {
                        ?>
                          <tr>
                              <td><?php echo $value["id_dbajas"]; ?></td>
                              <td><?php echo $value["descripcion_dbajas"]; ?></td>
                              <td><?php echo $value["pn_dbajas"]; ?></td>
                              <td><?php echo $value["numserie_dbajas"]; ?></td>
                              <td><?php echo $value["codigo_dbajas"]; ?></td>
                              <td><?php echo $value["ubicacion_dbajas"]; ?></td>
                              <td><?php echo $value["fechacali_dbajas"]; ?></td>
                              <td><?php echo $value["numcarpeta_dbajas"]; ?></td>
                              <td>
                                  <div class="btn-group">
                                      <button class="btn btn-secondary" onclick="MVerDBajas(<?php echo $value["id_dbajas"]; ?>)">
                                          <i class="fas fa-eye"></i>
                                      </button>
                                      <button class="btn btn-warning" onclick="MEditarDBajas(<?php echo $value["id_dbajas"]; ?>)">
                                          <i class="fas fa-edit"></i>
                                      </button>
                                      <button class="btn btn-danger" onclick="MEliDBajas(<?php echo $value["id_dbajas"]; ?>)">
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