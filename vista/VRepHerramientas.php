  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header pb-0">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-5">
                      <h3 class="m-0">Reporte por Herramientas</h3>
                  </div><!-- /.col -->

              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
          <div class="containter row">
              <div class="col-sm-5">

              </div><!-- /.col -->
              <div class="col-sm-7 row">
                  <form id="ReporteDeHerramientas">
                      <div class="form-group col-sm-12">
                          <div class="input-group mb-0">
                              <div class="input group-prepend">
                                  <span class="input-group-text">Por Ubicación: </span>
                              </div>

                              <select class="form-control input-group-append" name="nomHerramienta" id="nomHerramienta">
                                  <option value="">-- Seleccionar --</option>
                                  <?php
                                    $herra = ControladorHerramientas::ctrInfoControlHerramientas();
                                    foreach ($herra as $value) {
                                        $idHerramienta = $value["id_controlherramientas"];

                                        $ubicacionHerramienta = $value["ubicacion_controlherramientas"];
                                    ?>
                                      <option value="<?php echo $ubicacionHerramienta ?>"> <?php echo $ubicacionHerramienta ?> </option>
                                  <?php
                                    }
                                    ?>
                              </select>
                              <div class="input-group-append">
                                  <button type="button" class="btn btn-navbar bg-secondary" onclick="reporteHerramienta();">
                                      <i class="fas fa-search "></i>
                                  </button>
                              </div>
                              <a id="link" style="margin-left: 10px;" class="btn btn-success" href="vista/reportes/" target="_blank"><i class="fas fa-print">Imprimir</i></a>
                          </div>
                      </div>
                  </form>
              </div><!-- /.col -->
          </div>

      </div>
      <div class="content">
          <div class="container-fluid">
              <table id="DataTableHerramientas" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th>ITEM</th>
                          <th>DESCRIPCION</th>
                          <th>NRO DE PARTE</th>
                          <th>NRO DE SERIE</th>
                          <th>CODIGO</th>
                          <th>FECHA CAL.</th>
                          <th>FECHA VEN</th>
                          <th>UBICACION</th>
                          <th>N° CARPETA</th>
                      </tr>
                  </thead>
                  <tbody id="repHerramientas">

                  </tbody>
              </table>
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
      $('#nomHerramienta').on('change', function() {
          var valor_seleccionado = this.value;
          $("#link").attr("href", "vista/reportes/repHerramientasUbicacion.php?id=" + valor_seleccionado);
      })
  </script>