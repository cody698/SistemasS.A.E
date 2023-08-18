<?php
$ruta = parse_url( $_SERVER['REQUEST_URI'] );

if ( isset( $ruta["query"] ) ) {

  if ( $ruta["query"] == "ctrRegServicio" ||
      $ruta["query"] == "ctrEditServicio" || 
      $ruta["query"] == "ctrEliServicio"
     ){
    $metodo = $ruta["query"];
    $Servicio = new ControladorServicio();
    $Servicio->$metodo();
  }
}

class ControladorServicio {

  static public function ctrInfoServicios() {
    
    $respuesta = ModeloServicio::mdlInfoServicios();
    return $respuesta;
  }
    
    static public function ctrTotHoras($cliente) {
    
    $respuesta = ModeloServicio::mdlTotHoras($cliente);
    return $respuesta;
  }

  static public function ctrRegServicio() {
    require_once "../modelo/ServicioModelo.php";

    $clienteServicio = $_POST["clienteServicio"];
    $matriculaServicio = $_POST["matriculaServicio"];
    $observacionServicio = $_POST["observacionServicio"];
    $horasminServicio = $_POST["horasminServicio"];
    $horasmaxServicio = $_POST["horasmaxServicio"];

    $data = array(
      "clienteServicio"=>$_POST["clienteServicio"],
      "matriculaServicio"=>$_POST["matriculaServicio"],
      "observacionServicio"=>$_POST["observacionServicio"],
      "horasminServicio"=>$_POST["horasminServicio"],
      "horasmaxServicio"=>$_POST["horasmaxServicio"]
    );

    $respuesta = ModeloServicio::mdlRegServicio( $data );
    echo $respuesta;
  }

  static public function ctrInfoServicio( $id ) {
    $respuesta = ModeloServicio::mdlInfoServicio( $id );
    return $respuesta;
  }

  static public function ctrEditServicio() {

    require_once "../modelo/servicioModelo.php";

    $clienteServicio = $_POST["clienteServicio"];
    $matriculaServicio = $_POST["matriculaServicio"];
    $observacionServicio = $_POST["observacionServicio"];
    $horasminServicio = $_POST["horasminServicio"];
    $horasmaxServicio = $_POST["horasmaxServicio"];
    $data = array(
      "idServicio"=>$_POST["idServicio"],
      "clienteServicio"=>$_POST["clienteServicio"],
      "matriculaServicio"=>$_POST["matriculaServicio"],
      "observacionServicio"=>$_POST["observacionServicio"],
      "horasminServicio"=>$_POST["horasminServicio"],
      "horasmaxServicio"=>$_POST["horasmaxServicio"],
      "estadoServicio"=>$_POST["estadoServicio"]
    );

    $respuesta = ModeloServicio::mdlEditServicio( $data );
    echo $respuesta;
  }

  static public function ctrEliServicio(){
    require "../modelo/servicioModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloServicio::mdlEliServicio($data);

    echo $respuesta;
  }

  static public function ctrCantidadEstados() {
    $respuesta = ModeloServicio::mdlCantidadEstados();
    return $respuesta;
  }

  static public function ctrCantidadProcesos() {
    $respuesta = ModeloServicio::mdlCantidadProcesos();
    return $respuesta;
  }

  static public function ctrCantidadPendienteMaterial() {
    $respuesta = ModeloServicio::mdlCantidadPendienteMaterial();
    return $respuesta;
  }

  static public function ctrCantidadLimpiezas() {
    $respuesta = ModeloServicio::mdlCantidadLimpiezas();
    return $respuesta;
  }

  static public function ctrCantidadObservaciones() {
    $respuesta = ModeloServicio::mdlCantidadObservaciones();
    return $respuesta;
  }

  static public function ctrCantidadFinalizaciones() {
    $respuesta = ModeloServicio::mdlCantidadFinalizaciones();
    return $respuesta;
  }

  static public function ctrReporteEstados() {
    require_once "../modelo/ServicioModelo.php";

    $fechaInicial=$_POST["inicio"];
    $fechaFinal=$_POST["final"];

    $respuesta=ModeloServicio::mdlReporteEstados($fechaInicial, $fechaFinal);

    echo json_encode($respuesta);
  }

  static public function ctrBusServicio() {
    require_once "../modelo/ServicioModelo.php";

    $numSeg=$_POST["numSeg"];

    $respuesta=ModeloServicio::mdlBusServicio($numSeg);
    foreach($respuesta as $value){
?>

<!-- timeline time label -->
<div class="time-label">
  <span class="bg-info"><?php echo date("d-m-Y", strtotime($value["fecha_log"]));?></span>
</div>
<!-- /.timeline-label -->

<!-- timeline item -->
<div>
  <i class="fas fa-calendar-alt"></i>
  <div class="timeline-item">
    <span class="time"><?php echo date("H:i:s", strtotime($value["fecha_log"]));?> <i class="fas fa-clock"></i></span>
    <h3 class="timeline-header text-primary"><b><?php echo $value["estado_Servicio"];?></b></h3>


    <div class="timeline-body">
      <?php echo $value["descripcion_log"];?>
    </div>
    <div class="timeline-footer text-right">
      <button class="btn btn-danger btn-xs" onclick="EliMovimiento(<?php echo $value["id_log_Servicio"];?>)">Eliminar</button>
    </div>
  </div>
</div>
<!-- END timeline item -->

<?php
                                 }

  }

  static public function ctrRegMovimiento(){
    require_once "../modelo/ServicioModelo.php";

    $data = array(
      "codServicio"=>$_POST["codServicio"],
      "estadoServicio"=>$_POST["estadoServicio"],
      "descripcionServicio"=>$_POST["descripcionServicio"]
    );

    $respuesta = ModeloServicio::mdlRegMovimiento( $data );
    echo $respuesta;
  }

  static public function ctrEliMovimiento(){
    require "../modelo/ServicioModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloServicio::mdlEliMovimiento($data);

    echo $respuesta;
  }
}
