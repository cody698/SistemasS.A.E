<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header pb-0">
    <div class="container-fluid">
      <div class="row mb-2" style="display: flex; justify-content: space-between;">
        <div class="col-sm-5">
          <h3 class="m-0">Panel Herramientas Recibida/Entregada SAE-LAB</h3>
        </div><!-- /.col -->
        <div class="col-sm-7">
          
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="content">
    <div class="container-fluid">
      <form id="FormHerramientaRecibidaSeleccionado" method="POST" action="vista/reportes/repHerramientaSelec.php" target="_blank">
        <table id="DataTableHerramientas" class="table table-bordered table-striped">
          <thead>
            <input type="button" class="btn btn-success mb-2" onclick="MCargarRegistrosHerramientas()" value="Importar Excel">
            <input type="button" class="btn btn-primary bg-dark ml-2 mr-2 mb-2" onclick="MLogHerramientas()" value="Seleccionar Tecnicos">
            <tr>
              <th></th>
              <th>N°</th>
              <th>DESCRIPCION</th>
              <th>P/N</th>
              <th>S/N</th>
              <th>CODIGO</th>
              <th>UBICACION</th>
              <th>MARCA</th>
              <th>CANTIDAD</th>
              <th>UNIDAD</th>
              <td>
                <input type="button" class="btn btn-primary" onclick="MNuevoHerramientas()" value="Agregar">
              </td>
            </tr>
          </thead>
          <tbody>
            <?php
            $herramienta = ControladorHerramientasSalidas::ctrInfoHerramientasSalidas();

            foreach ($herramienta as $value) {

            ?>
            <tr>
              <td>
                <input type="checkbox" id="inlineCheckbox4" name="idclase[]" value="<?php echo $value["id_herramientas"] ?>">
            </td>

              <td><?php echo $value["num_herramientas"]; ?></td>
              <td><?php echo $value["descripcion_herramientas"]; ?></td>
              <td><?php echo $value["pn_herramientas"]; ?></td>
              <td><?php echo $value["sn_herramientas"]; ?></td>
              <td><?php echo $value["codigo_herramientas"]; ?></td>
              <td><?php echo $value["ubicacion_herramientas"]; ?></td>
              <td><?php echo $value["marcaofabri_herramientas"]; ?></td>
              <td><?php echo $value["cantidad_herramientas"] ?></td>
              <td><?php echo $value["unidad_herramientas"] ?></td>
              <td>
                <div class="btn-group">

                  <a class="btn btn-sm btn-secondary" onclick="MVerHerramienta(<?php echo $value['id_herramientas']; ?>)" ><i class="fas fa-eye"></i></a>

                  <a class="btn btn-sm btn-warning" onclick="MEditarHerramienta(<?php echo $value['id_herramientas']; ?>)"><i class="fas fa-edit"></i></a>

                  <a class="btn btn-sm btn-danger" onclick="MEliHerramienta(<?php echo $value['id_herramientas']; ?>)"><i class="fas fa-trash"></i></a>

                </div>
              </td>
            </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </form>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>