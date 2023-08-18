<?php
$ruta = parse_url( $_SERVER['REQUEST_URI'] );

if ( isset( $ruta["query"] ) ) {

  if ( $ruta["query"] == "ctrRegMaterial" ||
      $ruta["query"] == "ctrEditMaterial" ||
      $ruta["query"] == "ctrCambEstado" ||
      $ruta["query"] == "ctrRegRegistrosMat" ||
      $ruta["query"] == "ctrEliMaterial"
     ){
    $metodo = $ruta["query"];
    $Material = new ControladorMaterial();
    $Material->$metodo();
  }
}

class ControladorMaterial {

  static public function ctrInfoMateriales() {
    $respuesta = ModeloMaterial::mdlInfoMateriales();
    return $respuesta;
  }

  static public function ctrRegMaterial() {
    require_once "../modelo/materialModelo.php";

    $desMaterial = $_POST["desMaterial"];
    $pnMaterial = $_POST["pnMaterial"];
    $pnaltMaterial = $_POST["pnaltMaterial"];
    $qtyMaterial = $_POST["qtyMaterial"];
    $unidadMaterial = $_POST["unidadMaterial"];
    $refmanualMaterial = $_POST["refmanualMaterial"];
    $reftarjetaMaterial = $_POST["reftarjetaMaterial"];
    $areaMaterial = $_POST["areaMaterial"];
    $obMaterial = $_POST["obMaterial"];
    $prioMaterial = $_POST["prioMaterial"];
    $estadoMaterial = $_POST["estadoMaterial"];
    $qtysaeMaterial = $_POST["qtysaeMaterial"];
    $fechaMaterial = $_POST["fechaMaterial"];

    $data = array(
      "desMaterial"=>$_POST["desMaterial"],
      "pnMaterial"=>$_POST["pnMaterial"],
      "pnaltMaterial"=>$_POST["pnaltMaterial"],
      "qtyMaterial"=>$_POST["qtyMaterial"],
      "unidadMaterial"=>$_POST["unidadMaterial"],
      "refmanualMaterial"=>$_POST["refmanualMaterial"],
      "reftarjetaMaterial"=>$_POST["reftarjetaMaterial"],
      "areaMaterial"=>$_POST["areaMaterial"],
      "obMaterial"=>$_POST["obMaterial"],
      "prioMaterial"=>$_POST["prioMaterial"],
      "estadoMaterial"=>$_POST["estadoMaterial"],
      "qtysaeMaterial"=>$_POST["qtysaeMaterial"],
      "fechaMaterial"=>$_POST["fechaMaterial"]
    );

    $respuesta = ModeloMaterial::mdlRegMaterial( $data );
    echo $respuesta;
  }

  static public function ctrInfoMaterial( $id ) {
    $respuesta = ModeloMaterial::mdlInfoMaterial( $id );
    return $respuesta;
  }

  static public function ctrEditMaterial() {

    require_once "../modelo/materialModelo.php";

    $desMaterial = $_POST["desMaterial"];
    $pnMaterial = $_POST["pnMaterial"];
    $pnaltMaterial = $_POST["pnaltMaterial"];
    $qtyMaterial = $_POST["qtyMaterial"];
    $unidadMaterial = $_POST["unidadMaterial"];
    $refmanualMaterial = $_POST["refmanualMaterial"];
    $reftarjetaMaterial = $_POST["reftarjetaMaterial"];
    $areaMaterial = $_POST["areaMaterial"];
    $obMaterial = $_POST["obMaterial"];
    $prioMaterial = $_POST["prioMaterial"];
    $estadoMaterial = $_POST["estadoMaterial"];
    $qtysaeMaterial = $_POST["qtysaeMaterial"];
    $fechaMaterial = $_POST["fechaMaterial"];
    $data = array(
      "idMaterial"=>$_POST["idMaterial"],
      "desMaterial"=>$_POST["desMaterial"],
      "pnMaterial"=>$_POST["pnMaterial"],
      "pnaltMaterial"=>$_POST["pnaltMaterial"],
      "qtyMaterial"=>$_POST["qtyMaterial"],
      "unidadMaterial"=>$_POST["unidadMaterial"],
      "refmanualMaterial"=>$_POST["refmanualMaterial"],
      "reftarjetaMaterial"=>$_POST["reftarjetaMaterial"],
      "areaMaterial"=>$_POST["areaMaterial"],
      "obMaterial"=>$_POST["obMaterial"],
      "prioMaterial"=>$_POST["prioMaterial"],
      "estadoMaterial"=>$_POST["estadoMaterial"],
      "qtysaeMaterial"=>$_POST["qtysaeMaterial"],
      "fechaMaterial"=>$_POST["fechaMaterial"]
    );

    $respuesta = ModeloMaterial::mdlEditMaterial( $data );
    echo $respuesta;
  }

  static public function ctrEliMaterial(){
    require "../modelo/materialModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloMaterial::mdlEliMaterial($data);

    echo $respuesta;
  }

  static public function ctrCambEstado(){
    require "../modelo/materialModelo.php";
    
    $data=array(
    "estado"=>$_POST["estado"],
    "codSegMat"=>$_POST["codSegMat"]
    );
       
    $respuesta = ModeloMaterial::mdlCambEstado($data);

    echo $respuesta;
}

static public function ctrRegRegistrosMat()
{
  require_once "../modelo/materialModelo.php";

  $data = array(
    "registros" => $_FILES['dataMaterial']
  );

  $respuesta = ModeloMaterial::mdlRegRegistrosMat($data);
  echo $respuesta;
}

}