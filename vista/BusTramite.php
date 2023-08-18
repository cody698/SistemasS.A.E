<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Realiza el Seguimiento de tu Tarjeta</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-primary">
              <h5 class="card-title m-0"><b>Buscador de Tarjetas</b></h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-10">
                  <label for="">Codigo Tarjeta</label>

                  <select class="form-control select2bs4" name="numeroSeguimiento" id="numeroSeguimiento">
                    <option value=""></option>
                    <?php
                    $codigo = ControladorSeguimiento::ctrInfoSeguimientos();
                    foreach ($codigo as $value) {
                    ?>
                    <option value="<?php echo $value["codigo_seguimiento"]; ?>"><?php echo $value["codigo_seguimiento"]; ?></option>
                    <?php
                    }
                    ?>
                  </select>

                </div>
                <div class="col-2">
                  <label for="">&nbsp;</label><br>
                  <button class="btn btn-default" style="width:100%" onclick="Traer_Datos_Seguimiento()"><i class="fa fa-search"></i>Buscar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="timeline" id="div_buscador">



            <!-- timeline time label -->
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
