<?php
//capturamos la url y separamos el nombre del directorio
$path=parse_url($_SERVER['REQUEST_URI']);

//comprobamos si existe un path de carpeta en la url
if(isset($path["query"])){
  global $directorio;
  $directorio=$path["query"]; //donde directorio es la carpeta en la que se encuentra

  $ruta="assest/files/archivos/".$directorio;
}else{
  $ruta="assest/files/archivos/";
}
?>


<div class="app-content">
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          
        </div><!-- /.col -->
        <div class="col-sm-6">

        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="page-description-actions">
            </div>
            <div class="card-header">
              <h3 class="card-title">Gestion de Archivos</h3>
              <div class="card-tools">
                <button class="btn btn-success" onclick="MNuevoCarpeta('<?php echo $directorio;?>')">Crear Carpeta</button>
              </div>
            </div>

            <div class="card-body">
              <div class="row">
                <table class="table table-bordered table-striped">
                  <?php

                  mostrar_archivos($ruta);

                  function mostrar_archivos($ruta){
                  ?>
                  <tr>
                    <td>
                      <i class="fas fa-folder text-success">&nbsp;</i><a href="VArchivos?." class="file-manager-group-title text-success">Inicio</a>
                  </a>
                  </td>
                <td>
                </td>
                </tr>
              <tr>
                <td>
                  <i class="fas fa-folder text-success">&nbsp;</i><a href="javascript:history.back()" class="file-manager-group-title text-success">Atras</a>
                </td>
                <td></td>
              </tr>

              <?php
                    //recuperamos el directorio anterior
                    global $directorio;
                    $dirSuperior=$directorio."/";

                    //comprobar si es un directorio
                    if(is_dir($ruta)){
                      //abrir el directorio
                      $gestor=opendir($ruta);

                      while(($archivo=readdir($gestor))!=false){

                        if($archivo!=".." and $archivo!="."){
                          $divArchivo=explode(".",$archivo);
                          if(count($divArchivo)<2){
              ?>
              <tr>
                <td><i class="fas fa-folder text-primary">&nbsp;</i><a href="VArchivos?<?php echo $dirSuperior.$archivo;?>" class="file-manager-group-title"><?php echo $archivo;?></a></td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-success btn-xs" onclick="MSubirArchivos('<?php echo $ruta."-".$archivo;?>')">
                      <i class="fas fa-upload"></i>
                    </button>
                    <button class="btn btn-danger btn-xs" onclick="eliminarCarpeta('<?php echo $ruta."-".$archivo;?>')">
                      <i class="fas fa-trash"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <?php
                          }else{
              ?>
              <tr>
                <td><i class="fas fa-file text-muted">&nbsp;</i><span class="text-muted"><?php echo $archivo; ?></span></td>
                <td>
                  <div class="btn-group">

                    <a class="btn btn-default btn-xs" href="vista/descargar.php?ruta=<?php echo $ruta;?>&archivo=<?php echo $archivo;?>">
                      <i class="fas fa-download"></i>
                    </a>
                    <button class="btn btn-danger btn-xs" onclick="eliminarArchivo('<?php echo $ruta."-".$archivo;?>')">
                      <i class="fas fa-trash"></i>
                    </button> 
                  </div>
                </td>
              </tr>
              <?php
                          }

              ?>


              <?php
                        }
                      }
                    }
                  }

              ?>
              </table>
          </div>

        </div>
      </div>

    </div>
    <div class="card-footer clearfix">

    </div>
  </div>

</div>
</div>
</div>
<!-- /.content-wrapper -->
