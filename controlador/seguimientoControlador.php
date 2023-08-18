<?php
$ruta = parse_url($_SERVER['REQUEST_URI']);

if (isset($ruta["query"])) {

  if (
    $ruta["query"] == "ctrRegSeguimiento" ||
    $ruta["query"] == "ctrEditSeguimiento" ||
    $ruta["query"] == "ctrEliSeguimiento"  ||
    $ruta["query"] == "ctrReporteEstados" ||
    $ruta["query"] == "ctrRegMovimiento" ||
    $ruta["query"] == "ctrEliMovimiento" ||
    $ruta["query"] == "ctrRegRegistros" ||
    $ruta["query"] == "ctrCambEstado" ||
    $ruta["query"] == "ctrBusSeguimiento"
  ) {
    $metodo = $ruta["query"];
    $seguimiento = new ControladorSeguimiento();
    $seguimiento->$metodo();
  }
}

class ControladorSeguimiento
{

  static public function ctrInfoSeguimientos()
  {
    $respuesta = ModeloSeguimiento::mdlInfoSeguimientos();
    return $respuesta;
  }

  static public function ctrRegSeguimiento()
  {
    require_once "../modelo/seguimientoModelo.php";

    $nomSeguimiento = $_POST["nomSeguimiento"];
    $matriculaSeguimiento = $_POST["matriculaSeguimiento"];
    $descripcionSeguimiento = $_POST["descripcionSeguimiento"];
    $observacionSeguimiento = $_POST["observacionSeguimiento"];
    $tipoSeguimiento = $_POST["tipoSeguimiento"];
    $codigoSeguimiento = $_POST["codigoSeguimiento"];
    $minSeguimiento = $_POST["minSeguimiento"];
    $maxSeguimiento = $_POST["maxSeguimiento"];
    $ubicacionSeguimiento = $_POST["ubicacionSeguimiento"];
    $estadosSeguimiento = $_POST["estadosSeguimiento"];
    $areaSeguimiento = $_POST["areaSeguimiento"];
    $numeracionSeguimiento = $_POST["numeracionSeguimiento"];
    /*capturamos la imagen*/
    $imagen = $_FILES["imgUsuario"];

    $nomImagen = $imagen["name"];
    $archImagen = $imagen["tmp_name"];

    move_uploaded_file($archImagen, "../assest/dist/img/seguimientos/" . $nomImagen);

    $data = array(
      "nomSeguimiento" => $_POST["nomSeguimiento"],
      "matriculaSeguimiento" => $_POST["matriculaSeguimiento"],
      "descripcionSeguimiento" => $_POST["descripcionSeguimiento"],
      "observacionSeguimiento" => $_POST["observacionSeguimiento"],
      "tipoSeguimiento" => $_POST["tipoSeguimiento"],
      "codigoSeguimiento" => $_POST["codigoSeguimiento"],
      "minSeguimiento" => $_POST["minSeguimiento"],
      "maxSeguimiento" => $_POST["maxSeguimiento"],
      "ubicacionSeguimiento" => $_POST["ubicacionSeguimiento"],
      "estadosSeguimiento" => $_POST["estadosSeguimiento"],
      "areaSeguimiento" => $_POST["areaSeguimiento"],
      "numeracionSeguimiento" => $_POST["numeracionSeguimiento"],
      "imgUsuario" => $nomImagen
    );

    $respuesta = ModeloSeguimiento::mdlRegSeguimiento($data);
    echo $respuesta;
  }

  static public function ctrInfoSeguimiento($id)
  {
    $respuesta = ModeloSeguimiento::mdlInfoSeguimiento($id);
    return $respuesta;
  }

  static public function ctrEditSeguimiento()
  {

    require_once "../modelo/seguimientoModelo.php";

    $nomSeguimiento = $_POST["nomSeguimiento"];
    $matriculaSeguimiento = $_POST["matriculaSeguimiento"];
    $descripcionSeguimiento = $_POST["descripcionSeguimiento"];
    $observacionSeguimiento = $_POST["observacionSeguimiento"];
    $tipoSeguimiento = $_POST["tipoSeguimiento"];
    $codigoSeguimiento = $_POST["codigoSeguimiento"];
    $minSeguimiento = $_POST["minSeguimiento"];
    $maxSeguimiento = $_POST["maxSeguimiento"];
    $ubicacionSeguimiento = $_POST["ubicacionSeguimiento"];
    $estadosSeguimiento = $_POST["estadosSeguimiento"];
    $areaSeguimiento = $_POST["areaSeguimiento"];
    $numeracionSeguimiento = $_POST["numeracionSeguimiento"];

    if ($_FILES["imgProducto"]["name"] == "") {

      $nomImagen = $_POST["imgProductoActual"];
    } else {

      /*capturamos la imagen*/
      $imagen = $_FILES["imgProducto"];

      $nomImagen = $imagen["name"];
      $archImagen = $imagen["tmp_name"];

      move_uploaded_file($archImagen, "../assest/dist/img/seguimientos/" . $nomImagen);
    }

    $data = array(
      "idSeguimiento" => $_POST["idSeguimiento"],
      "nomSeguimiento" => $_POST["nomSeguimiento"],
      "matriculaSeguimiento" => $_POST["matriculaSeguimiento"],
      "descripcionSeguimiento" => $_POST["descripcionSeguimiento"],
      "observacionSeguimiento" => $_POST["observacionSeguimiento"],
      "tipoSeguimiento" => $_POST["tipoSeguimiento"],
      "codigoSeguimiento" => $_POST["codigoSeguimiento"],
      "minSeguimiento" => $_POST["minSeguimiento"],
      "maxSeguimiento" => $_POST["maxSeguimiento"],
      "ubicacionSeguimiento" => $_POST["ubicacionSeguimiento"],
      "estadosSeguimiento" => $_POST["estadosSeguimiento"],
      "areaSeguimiento" => $_POST["areaSeguimiento"],
      "numeracionSeguimiento" => $_POST["numeracionSeguimiento"],
      "imgProducto" => $nomImagen
    );

    $respuesta = ModeloSeguimiento::mdlEditSeguimiento($data);
    echo $respuesta;
  }

  static public function ctrEliSeguimiento()
  {
    require "../modelo/seguimientoModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloSeguimiento::mdlEliSeguimiento($data);

    echo $respuesta;
  }

  static public function ctrCantidadEstados()
  {
    $respuesta = ModeloSeguimiento::mdlCantidadEstados();
    return $respuesta;
  }

  static public function ctrCantidadProcesos()
  {
    $respuesta = ModeloSeguimiento::mdlCantidadProcesos();
    return $respuesta;
  }

  static public function ctrCantidadPendienteMaterial()
  {
    $respuesta = ModeloSeguimiento::mdlCantidadPendienteMaterial();
    return $respuesta;
  }

  static public function ctrCantidadLimpiezas()
  {
    $respuesta = ModeloSeguimiento::mdlCantidadLimpiezas();
    return $respuesta;
  }

  static public function ctrCantidadObservaciones()
  {
    $respuesta = ModeloSeguimiento::mdlCantidadObservaciones();
    return $respuesta;
  }

  static public function ctrCantidadFinalizaciones()
  {
    $respuesta = ModeloSeguimiento::mdlCantidadFinalizaciones();
    return $respuesta;
  }

  static public function ctrReporteEstados()
  {
    require_once "../modelo/seguimientoModelo.php";

    $fechaInicial = $_POST["inicio"];
    $fechaFinal = $_POST["final"];

    $respuesta = ModeloSeguimiento::mdlReporteEstados($fechaInicial, $fechaFinal);

    echo json_encode($respuesta);
  }

  static public function ctrBusSeguimiento()
  {
    require_once "../modelo/seguimientoModelo.php";

    $numSeg = $_POST["numSeg"];

    $respuesta = ModeloSeguimiento::mdlBusSeguimiento($numSeg);
    foreach ($respuesta as $value) {
?>

      <!-- timeline time label -->
      <div class="time-label">
        <span class="bg-info"><?php echo date("d-m-Y", strtotime($value["fecha_log"])); ?></span>
      </div>
      <!-- /.timeline-label -->

      <!-- timeline item -->
      <div>
        <i class="fas fa-calendar-alt"></i>
        <div class="timeline-item">
          <span class="time"><?php echo date("H:i:s", strtotime($value["fecha_log"])); ?> <i class="fas fa-clock"></i></span>
          <h3 class="timeline-header text-primary"><b><?php echo $value["estado_seguimiento"]; ?></b></h3>


          <div class="timeline-body">
            <?php echo $value["descripcion_log"]; ?>
          </div>
          <div class="timeline-footer text-right">
            <button class="btn btn-danger btn-xs" onclick="EliMovimiento(<?php echo $value["id_log_seguimiento"]; ?>)">Eliminar</button>
          </div>
        </div>
      </div>
      <!-- END timeline item -->

<?php
    }
  }

  static public function ctrRegMovimiento()
  {
    require_once "../modelo/seguimientoModelo.php";

    $data = array(
      "codSeguimiento" => $_POST["codSeguimiento"],
      "estadoSeguimiento" => $_POST["estadoSeguimiento"],
      "descripcionSeguimiento" => $_POST["descripcionSeguimiento"]
    );

    $respuesta = ModeloSeguimiento::mdlRegMovimiento($data);
    echo $respuesta;
  }

  static public function ctrEliMovimiento()
  {
    require "../modelo/seguimientoModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloSeguimiento::mdlEliMovimiento($data);

    echo $respuesta;
  }

  static public function ctrRegRegistros()
  {
    require_once "../modelo/seguimientoModelo.php";

    $data = array(
      "registros" => $_FILES['dataSeguimiento']
    );

    $respuesta = ModeloSeguimiento::mdlRegRegistros($data);
    echo $respuesta;
  }

  static public function ctrCambEstado()
  {
    require "../modelo/seguimientoModelo.php";

    $data = array(
      "estado" => $_POST["estado"],
      "codSeg" => $_POST["codSeg"]
    );

    $respuesta = ModeloSeguimiento::mdlCambEstado($data);
    echo $respuesta;
  }

  static public function ctrInfoAdicional($codSeg){
    $respuesta = ModeloSeguimiento::mdlInfoAdicional($codSeg);
    return $respuesta;
}
}
