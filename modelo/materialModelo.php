<?php
require_once "conexion.php";

class ModeloMaterial
{

  static public function mdlInfoMateriales()
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM materiales");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }


  static public function mdlRegMaterial($data)
  {

    $desMaterial = $data["desMaterial"];
    $pnMaterial = $data["pnMaterial"];
    $pnaltMaterial = $data["pnaltMaterial"];
    $qtyMaterial = $data["qtyMaterial"];
    $unidadMaterial = $data["unidadMaterial"];
    $refmanualMaterial = $data["refmanualMaterial"];
    $reftarjetaMaterial = $data["reftarjetaMaterial"];
    $areaMaterial = $data["areaMaterial"];
    $obMaterial = $data["obMaterial"];
    $prioMaterial = $data["prioMaterial"];
    $estadoMaterial = $data["estadoMaterial"];
    $qtysaeMaterial = $data["qtysaeMaterial"];

    date_default_timezone_set("America/La_Paz");
    $fecha = date("Y-m-d");

    $stmt = Conexion::conectar()->prepare("insert into materiales(descripcion_mat, pn_mat, pnalt_mat, qty_mat, unidad_mat, refmanual_mat, codigo_seguimiento_mat, area_mat, observaciones_mat, prioridad_mat, estado_mat, qtysae_mat, fechadearribo_mat) values('$desMaterial', '$pnMaterial', '$pnaltMaterial', '$qtyMaterial', '$unidadMaterial', '$refmanualMaterial', '$reftarjetaMaterial', '$areaMaterial', '$obMaterial', '$prioMaterial', '$estadoMaterial', '$qtysaeMaterial', '$fecha')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoMaterial($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM materiales where id_material=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEditMaterial($data)
  {

    $idMaterial = $data["idMaterial"];
    $desMaterial = $data["desMaterial"];
    $pnMaterial = $data["pnMaterial"];
    $pnaltMaterial = $data["pnaltMaterial"];
    $qtyMaterial = $data["qtyMaterial"];
    $unidadMaterial = $data["unidadMaterial"];
    $refmanualMaterial = $data["refmanualMaterial"];
    $reftarjetaMaterial = $data["reftarjetaMaterial"];
    $areaMaterial = $data["areaMaterial"];
    $obMaterial = $data["obMaterial"];
    $prioMaterial = $data["prioMaterial"];
    $estadoMaterial = $data["estadoMaterial"];
    $qtysaeMaterial = $data["qtysaeMaterial"];
    $fechaMaterial = $data["fechaMaterial"];

    $stmt = Conexion::conectar()->prepare("update materiales set descripcion_mat='$desMaterial', pn_mat='$pnMaterial',pnalt_mat='$pnaltMaterial', qty_mat='$qtyMaterial', unidad_mat='$unidadMaterial', refmanual_mat='$refmanualMaterial', codigo_seguimiento_mat='$reftarjetaMaterial', area_mat='$areaMaterial', observaciones_mat='$obMaterial', prioridad_mat='$prioMaterial', estado_mat='$estadoMaterial', qtysae_mat='$qtysaeMaterial', fechadearribo_mat='$fechaMaterial' where id_material=$idMaterial");

    if ($stmt->execute()) {

      return "ok";
    } else {

      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliMaterial($data)
  {
    $stmt = Conexion::conectar()->prepare("delete from materiales where id_material=$data");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlCambEstado($data){

    $estado=$data["estado"];
    $codSegMat=$data["codSegMat"];

    //cambio de estado de la tabla material
    $MatMat = Conexion::conectar()->prepare("update materiales set estado_mat='$estado' where codigo_seguimiento_mat='$codSegMat'");


    //cambio de estado de la tabla seguimiento
    $MatSegui = Conexion::conectar()->prepare("update seguimiento set materiales_seguimiento='$estado' where codigo_seguimiento='$codSegMat'");


    if ($MatMat->execute()) {
        $MatSegui->execute();
        return "ok";
    } else {

        return "error";
    }

    $stmt->close();
    $stmt->null;
}

static public function mdlRegRegistrosMat($data)
{
  $tipo = $data['registros']['type'];
  $tamanio = $data['registros']['size'];
  $archivotmp = $data['registros']['tmp_name'];
  $lineas = file($archivotmp);
  $i = 0;
  foreach ($lineas as $linea) {
    //$cantidad_registros = count($lineas);
    //$cantidad_regist_agregados = ($cantidad_registros - 1);

    //usamos el contador i para que no registre la primera fila
    if ($i != 0) {

      $datos = explode(";", $linea);

      $descripcion_mat = !empty($datos[0]) ? ($datos[0]) : '';
      $pn_mat = !empty($datos[1]) ? ($datos[1]) : '';
      $pnalt_mat = !empty($datos[2]) ? ($datos[2]) : '';
      $qty_mat = !empty($datos[3]) ? ($datos[3]) : '';
      $unidad_mat = !empty($datos[4]) ? ($datos[4]) : '';
      $refmanual_mat = !empty($datos[5]) ? ($datos[5]) : '';
      $codigo_seguimiento_mat = !empty($datos[6]) ? ($datos[6]) : '';
      $area_mat = !empty($datos[7]) ? ($datos[7]) : '';
      $observaciones_mat = !empty($datos[8]) ? ($datos[8]) : '';
      $prioridad_mat = !empty($datos[9]) ? ($datos[9]) : '';
      $estado_mat = !empty($datos[10]) ? ($datos[10]) : '';
      $qtysae_mat = !empty($datos[11]) ? ($datos[11]) : '';
      $fechadearribo_mat = !empty($datos[12]) ? ($datos[12]) : '';

      if (!empty($codigo_seguimiento_mat)) {
        $mtr_duplicada = Conexion::conectar()->prepare("select codigo_seguimiento_mat from materiales where codigo_seguimiento_mat='$codigo_seguimiento_mat'");
        $mtr_duplicada->execute();
        $regDuplicado = $mtr_duplicada->rowCount();
      }

      if ($regDuplicado > 0) {

        $stmt = Conexion::conectar()->prepare("update materiales set descripcion_mat='$descripcion_mat', pn_mat='$pn_mat', pnalt_mat='$pnalt_mat', qty_mat='$qty_mat', unidad_mat='$unidad_mat', refmanual_mat='$refmanual_mat', codigo_seguimiento_mat='$codigo_seguimiento_mat', area_mat='$area_mat', observaciones_mat='$observaciones_mat', prioridad_mat='$prioridad_mat', estado_mat='$estado_mat', qtysae_mat='$qtysae_mat', fechadearribo_mat='$fechadearribo_mat' where codigo_seguimiento_mat='$codigo_seguimiento_mat'");
        $stmt->execute();
      } else {
        $stmt = Conexion::conectar()->prepare("insert into materiales (descripcion_mat, pn_mat, pnalt_mat, qty_mat, unidad_mat, refmanual_mat, codigo_seguimiento_mat, area_mat, observaciones_mat, prioridad_mat, estado_mat, qtysae_mat, fechadearribo_mat) values('$descripcion_mat','$pn_mat','$pnalt_mat','$qty_mat','$unidad_mat','$refmanual_mat','$codigo_seguimiento_mat','$area_mat','$observaciones_mat','$prioridad_mat','$estado_mat','$qtysae_mat','$fechadearribo_mat')");
        $stmt->execute();
      }
    }
    $i++;
  }

  return "ok";
}

}
