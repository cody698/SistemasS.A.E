  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0">Panel Materiales</h3>
                  </div><!-- /.col -->
                  <div class="col-sm-6">

                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>

      <div class="content">
          <div class="container-fluid">
              <table id="DataTableMateriales" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th>ITEM</th>
                          <th>DESCRIPCION</th>
                          <th>REF. IPC</th>
                          <th>COD. TARJETA</th>
                          <th>AREA</th>
                          <th>ESTADO MATERIAL</th>
                          <th>FECHA ARRIBO</th>
                          <td>
                              <button class="btn btn-primary" onclick="MNuevoMaterial()">Agregar</button>
                          </td>
                      </tr>
                  </thead>
                  <tbody>

                      <?php
                        $material = ControladorMaterial::ctrInfoMateriales();
                        foreach ($material as $value) {
                        ?>
                          <tr>
                              <td><?php echo $value["id_material"]; ?></td>
                              <td><?php echo $value["descripcion_mat"]; ?></td>
                              <td><?php echo $value["refmanual_mat"]; ?></td>
                              <td><?php echo $value["codigo_seguimiento_mat"]; ?></td>
                              <td><?php echo $value["area_mat"]; ?></td>
                              <td>
                                  <select name="estadoMat[<?php echo $value['codigo_seguimiento_mat']; ?>]" id="estadoMat[<?php echo $value['codigo_seguimiento_mat']; ?>]" class="form-control-sm" onchange="cambioEstadoMat('<?php echo $value['codigo_seguimiento_mat']; ?>')">
                                      <option value="LLEGO MATERIAL" <?php if ($value["estado_mat"] == "LLEGO MATERIAL") : ?>selected<?php endif; ?>>LLEGO MATERIAL</option>
                                      <option value="NO LLEGO MATERIAL" <?php if ($value["estado_mat"] == "NO LLEGO MATERIAL") : ?>selected<?php endif; ?>>NO LLEGO MATERIAL</option>
                                      <option value="PARCIALMENTE COMPLETADO" <?php if ($value["estado_mat"] == "PARCIALMENTE COMPLETADO") : ?>selected<?php endif; ?>>PARCIALMENTE COMPLETADO</option>
                                      <option value="SIN PEDIDO" <?php if ($value["estado_mat"] == "SIN PEDIDO") : ?>selected<?php endif; ?>>SIN PEDIDO</option>
                                  </select>
                              </td>
                              <td><?php echo $value["fechadearribo_mat"]; ?></td>
                              <td>
                                  <div class="btn-group">
                                      <button class="btn btn-secondary" onclick="MVerMaterial(<?php echo $value["id_material"]; ?>)">
                                          <i class="fas fa-eye"></i>
                                      </button>
                                      <button class="btn btn-warning" onclick="MEditarMaterial(<?php echo $value["id_material"]; ?>)">
                                          <i class="fas fa-edit"></i>
                                      </button>
                                      <button class="btn btn-danger" onclick="MEliMaterial(<?php echo $value["id_material"]; ?>)">
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