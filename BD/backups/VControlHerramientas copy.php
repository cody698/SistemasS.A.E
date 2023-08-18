<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header pb-0">
    <div class="container-fluid">
      <div class="row mb-2" style="display: flex; justify-content: space-between;">
        <div class="col-sm-5">
          <h3 class="m-0">Panel Control Herramientas</h3>
        </div><!-- /.col -->
        <div class="col-sm-7">
          <div class="form-group col-sm-12" style="text-align: end;">
            <!-- <button type="button" class="btn btn-primary bg-info" onclick="impHerramientaSelec()">Imprimir Herramientas</button> -->
          </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="content">
    <div class="container-fluid">
      <form id="FormHerramientaSeleccionado" target="_blank">
        <table id="DataTableControlHerramientas" class="table table-bordered table-striped">
          <thead>
            <!-- <button class="btn btn-success" onclick="MCargarRegistrosControlHerramientas()">Importar Excel</button> -->
            <input type="button" class="btn btn-success" onclick="MCargarRegistrosControlHerramientas()" value="Importar Excel">
            <tr>
              <th></th>
              <th>ITEM</th>
              <th>DESCRIPCION</th>
              <th>NUMERO DE PARTE</th>
              <th>NUMERO DE SERIE</th>
              <th>CODIGO</th>
              <th>UBICACION</th>
              <th>FECHA VENCIMIENTO</th>
              <th>N° CARPETA</th>
              <td>
                <!-- <button class="btn btn-primary" onclick="MNuevoControlHerramientas()">Agregar</button> -->
                <input type="button" class="btn btn-primary" onclick="MNuevoControlHerramientas()" value="Agregar">
              </td>
            </tr>
          </thead>
          <tbody>
            <?php
            $controlherramienta = ControladorHerramientas::ctrInfoControlHerramientas();
            $idHerra = 0;

            /* FECHA ACTUAL */
            date_default_timezone_set("America/La_Paz");
            $fecha1 = new DateTime($fecha = date("Y-m-d"));

            foreach ($controlherramienta as $value) {
              $idHerra = $idHerra + 1;

              $fecha2 = new DateTime($value["fechavenci_controlherramientas"]);
              $diferencia = $fecha1->diff($fecha2);
              $totalDias = $diferencia->days * ($diferencia->invert ? -1 : 1);
            ?>
            <tr>

              <td>
                <input type="checkbox" id="inlineCheckbox4" name="idclase" value="<?php echo $value["id_controlherramientas"] ?>">
            </td>

              <td><?php echo $value["id_controlherramientas"]; ?></td>
              <td><?php echo $value["descripcion_controlherramientas"]; ?></td>
              <td><?php echo $value["pn_controlherramientas"]; ?></td>
              <td><?php echo $value["numserie_controlherramientas"]; ?></td>
              <td><?php echo $value["codigo_controlherramientas"]; ?></td>
              <td><?php echo $value["ubicacion_controlherramientas"]; ?></td>

              <?php
              if ($totalDias <= 10 and $totalDias >= 1) {
              ?>
              <td class="bg-warning"><?php echo $value["fechavenci_controlherramientas"]; ?></td>
              <?php
              } elseif ($totalDias < 1) {
              ?>
              <td class="bg-danger"><?php echo $value["fechavenci_controlherramientas"]; ?></td>
              <?php
              } else {
              ?>
              <td><?php echo $value["fechavenci_controlherramientas"]; ?></td>
              <?php
              }
              ?>

              <td><?php echo $value["numcarpeta_controlherramientas"] ?></td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-secondary" onclick="MVerControlHerramienta(<?php echo $value["id_controlherramientas"]; ?>)">
                    <i class="fas fa-eye"></i>
                  </button>
                  <button class="btn btn-warning" onclick="MEditarControlHerramienta(<?php echo $value["id_controlherramientas"]; ?>)">
                    <i class="fas fa-edit"></i>
                  </button>
                  <button class="btn btn-danger" onclick="MEliControlHerramienta(<?php echo $value["id_controlherramientas"]; ?>)">
                    <i class="fas fa-trash"></i>
                  </button>
                  <a class="btn btn-success" href="vista/reportes/repPorHerramienta.php?id=<?php echo $value["id_controlherramientas"]; ?>" target="_blank"><i class="fas fa-print"></i></a>
                </div>
              </td>
            </tr>

            <?php
            }
            ?>
            <!--  <button type="button" class="btn btn-primary bg-dark" onclick="impHerramientaSelec()">Enviar Selección</button> -->
            <button type="submit" id="button" class="btn btn-primary bg-dark" style="border: none;">Imprimir Selección</button>
          </tbody>
        </table>
      </form>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->