<?php
$ruta = parse_url( $_SERVER['REQUEST_URI'] );

if ( isset( $ruta["query"] ) ) {

  if ( $ruta["query"] == "ctrRegDBaja" ||
      $ruta["query"] == "ctrEditDBaja" ||
      $ruta["query"] == "ctrRegistrosCalibracion" ||
      $ruta["query"] == "ctrEliDbaja"
     ){
    $metodo = $ruta["query"];
    $dbaja = new ControladorDBajas();
    $dbaja->$metodo();
  }
}

class ControladorDBajas {

  static public function ctrInfoDbajas() {
    $respuesta = ModeloDBajas::mdlInfoDBajas();
    return $respuesta;
  }

  static public function ctrRegDBaja() {
    require_once "../modelo/dbajaModelo.php";

    $desDBaja = $_POST["desDBaja"];
    $pnDBaja = $_POST["pnDBaja"];
    $pnaltDBaja = $_POST["pnaltDBaja"];
    $numserieDBaja = $_POST["numserieDBaja"];
    $codigoDBaja = $_POST["codigoDBaja"];
    $marcafabriDBaja = $_POST["marcafabriDBaja"];
    $cantidadDBaja = $_POST["cantidadDBaja"];
    $unidadDBaja = $_POST["unidadDBaja"];
    $observacionDBaja = $_POST["observacionDBaja"];
    $ubicacionDBaja = $_POST["ubicacionDBaja"];
    $fechacalDBaja = $_POST["fechacalDBaja"];
    $periodocalDBaja = $_POST["periodocalDBaja"];
    $fechavenciDBaja = $_POST["fechavenciDBaja"];
    $estadoDBaja = $_POST["estadoDBaja"];
    $diasalertaDBaja = $_POST["diasalertaDBaja"];
    $origencaliDBaja = $_POST["origencaliDBaja"];
    $propiedaDBaja = $_POST["propiedaDBaja"];
    $numcarpetaDBaja = $_POST["numcarpetaDBaja"];
    $numcertiDBaja = $_POST["numcertiDBaja"];
    $numregistroDBaja = $_POST["numregistroDBaja"];
    $alcaninstrucDBaja = $_POST["alcaninstrucDBaja"];
    $resinstruDBaja = $_POST["resinstruDBaja"];
    $ubicacionautoDBaja = $_POST["ubicacionautoDBaja"];
    $docsalidaDBaja = $_POST["docsalidaDBaja"];

    $data = array(
      "desDBaja"=>$_POST["desDBaja"],
      "pnDBaja"=>$_POST["pnDBaja"],
      "pnaltDBaja"=>$_POST["pnaltDBaja"],
      "numserieDBaja"=>$_POST["numserieDBaja"],
      "codigoDBaja"=>$_POST["codigoDBaja"],
      "marcafabriDBaja"=>$_POST["marcafabriDBaja"],
      "cantidadDBaja"=>$_POST["cantidadDBaja"],
      "unidadDBaja"=>$_POST["unidadDBaja"],
      "observacionDBaja"=>$_POST["observacionDBaja"],
      "ubicacionDBaja"=>$_POST["ubicacionDBaja"],
      "fechacalDBaja"=>$_POST["fechacalDBaja"],
      "periodocalDBaja"=>$_POST["periodocalDBaja"],
      "fechavenciDBaja"=>$_POST["fechavenciDBaja"],
      "estadoDBaja"=>$_POST["estadoDBaja"],
      "diasalertaDBaja"=>$_POST["diasalertaDBaja"],
      "origencaliDBaja"=>$_POST["origencaliDBaja"],
      "propiedaDBaja"=>$_POST["propiedaDBaja"],
      "numcarpetaDBaja"=>$_POST["numcarpetaDBaja"],
      "numcertiDBaja"=>$_POST["numcertiDBaja"],
      "numregistroDBaja"=>$_POST["numregistroDBaja"],
      "alcaninstrucDBaja"=>$_POST["alcaninstrucDBaja"],
      "resinstruDBaja"=>$_POST["resinstruDBaja"],
      "ubicacionautoDBaja"=>$_POST["ubicacionautoDBaja"],
      "docsalidaDBaja"=>$_POST["docsalidaDBaja"]
    );

    $respuesta = ModeloDBajas::mdlRegDBajas( $data );
    echo $respuesta;
  }

  static public function ctrInfoDbaja( $id ) {
    $respuesta = ModeloDBajas::mdlInfoDbaja( $id );
    return $respuesta;
  }

  static public function ctrEditDBaja() {

    require_once "../modelo/dbajaModelo.php";

    $desDBaja = $_POST["desDBaja"];
    $pnDBaja = $_POST["pnDBaja"];
    $pnaltDBaja = $_POST["pnaltDBaja"];
    $numserieDBaja = $_POST["numserieDBaja"];
    $codigoDBaja = $_POST["codigoDBaja"];
    $marcafabriDBaja = $_POST["marcafabriDBaja"];
    $cantidadDBaja = $_POST["cantidadDBaja"];
    $unidadDBaja = $_POST["unidadDBaja"];
    $observacionDBaja = $_POST["observacionDBaja"];
    $ubicacionDBaja = $_POST["ubicacionDBaja"];
    $fechacalDBaja = $_POST["fechacalDBaja"];
    $periodocalDBaja = $_POST["periodocalDBaja"];
    $fechavenciDBaja = $_POST["fechavenciDBaja"];
    $estadoDBaja = $_POST["estadoDBaja"];
    $diasalertaDBaja = $_POST["diasalertaDBaja"];
    $origencaliDBaja = $_POST["origencaliDBaja"];
    $propiedaDBaja = $_POST["propiedaDBaja"];
    $numcarpetaDBaja = $_POST["numcarpetaDBaja"];
    $numcertiDBaja = $_POST["numcertiDBaja"];
    $numregistroDBaja = $_POST["numregistroDBaja"];
    $alcaninstrucDBaja = $_POST["alcaninstrucDBaja"];
    $resinstruDBaja = $_POST["resinstruDBaja"];
    $ubicacionautoDBaja = $_POST["ubicacionautoDBaja"];
    $docsalidaDBaja = $_POST["docsalidaDBaja"];

    $data = array(
      "idDBaja"=>$_POST["idDBaja"],
      "desDBaja" => $_POST["desDBaja"],
      "pnDBaja" => $_POST["pnDBaja"],
      "pnaltDBaja" => $_POST["pnaltDBaja"],
      "numserieDBaja" => $_POST["numserieDBaja"],
      "codigoDBaja" => $_POST["codigoDBaja"],
      "marcafabriDBaja" => $_POST["marcafabriDBaja"],
      "cantidadDBaja" => $_POST["cantidadDBaja"],
      "unidadDBaja" => $_POST["unidadDBaja"],
      "observacionDBaja" => $_POST["observacionDBaja"],
      "ubicacionDBaja" => $_POST["ubicacionDBaja"],
      "fechacalDBaja" => $_POST["fechacalDBaja"],
      "periodocalDBaja" => $_POST["periodocalDBaja"],
      "fechavenciDBaja" => $_POST["fechavenciDBaja"],
      "estadoDBaja" => $_POST["estadoDBaja"],
      "diasalertaDBaja" => $_POST["diasalertaDBaja"],
      "origencaliDBaja" => $_POST["origencaliDBaja"],
      "propiedaDBaja" => $_POST["propiedaDBaja"],
      "numcarpetaDBaja" => $_POST["numcarpetaDBaja"],
      "numcertiDBaja" => $_POST["numcertiDBaja"],
      "numregistroDBaja" => $_POST["numregistroDBaja"],
      "alcaninstrucDBaja" => $_POST["alcaninstrucDBaja"],
      "resinstruDBaja" => $_POST["resinstruDBaja"],
      "ubicacionautoDBaja" => $_POST["ubicacionautoDBaja"],
      "docsalidaDBaja" => $_POST["docsalidaDBaja"]
    );

    $respuesta = ModeloDBajas::mdlEditDBaja($data);
    echo $respuesta;
  }

  static public function ctrEliDbaja(){
    require "../modelo/dbajaModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloDBajas::mdlEliDBaja($data);

    echo $respuesta;
  }

  static public function ctrRegistrosCalibracion()
{
  require_once "../modelo/calibracionModelo.php";

  $data = array(
    "registros" => $_FILES['dataCalibraciones']
  );

  $respuesta = ModeloCalibraciones::mdlRegistrosCalibraciones($data);
  echo $respuesta;
}

static public function ctrPorCalibracion($id)
  {
    $respuesta = ModeloCalibraciones::mdlPorCalibracion($id);
    return $respuesta;
  }

}