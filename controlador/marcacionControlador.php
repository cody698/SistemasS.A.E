<?php
$ruta = parse_url( $_SERVER['REQUEST_URI'] );

if ( isset( $ruta["query"] ) ) {

  if ( $ruta["query"] == "ctrRegMarcacion" ||
      $ruta["query"] == "ctrEditMarcacion" || 
      $ruta["query"] == "ctrEliMarcacion" 
     ){
    $metodo = $ruta["query"];
    $Producto = new ControladorMarcacion();
    $Producto->$metodo();
  }
}

class ControladorMarcacion {

  static public function ctrInfoMarcaciones() {
    $respuesta = ModeloMarcacion::mdlInfoMarcaciones();
    return $respuesta;
  }
  static public function ctrInfoUsuario() {
    $respuesta = ModeloMarcacion::mdlInfoUsuario();
    return $respuesta;
  }

  static public function ctrInfoMarcacion($cod) {
    $respuesta = ModeloMarcacion::mdlInfoMarcacion($cod);
    return $respuesta;
  }

  static public function ctrRegMarcacion() {
    require_once "../modelo/marcacionModelo.php";
    $data=array(
      "codigo_tramite"=>$_POST["codigo_tramite"],
      "nomUsuario"=>$_POST["nomUsuario"]
    );



    $respuesta = ModeloMarcacion::mdlRegMarcacion($data);
    echo $respuesta;
  }


}