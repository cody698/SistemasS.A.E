<?php
require_once "conexion.php";

class ModeloCalibraciones
{

  static public function mdlInfoCalibraciones()
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM  control_calibracion");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }


  static public function mdlRegCalibraciones($data)
  {

    $desCalibracion = $data["desCalibracion"];
    $pnCalibracion = $data["pnCalibracion"];
    $pnaltCalibracion = $data["pnaltCalibracion"];
    $numserieCalibracion = $data["numserieCalibracion"];
    $codigoCalibracion = $data["codigoCalibracion"];
    $marcafabriCalibracion = $data["marcafabriCalibracion"];
    $cantidadCalibracion = $data["cantidadCalibracion"];
    $unidadCalibracion = $data["unidadCalibracion"];
    $observacionCalibracion = $data["observacionCalibracion"];
    $ubicacionCalibracion = $data["ubicacionCalibracion"];
    $fechacalCalibracion = $data["fechacalCalibracion"];
    $periodocalCalibracion = $data["periodocalCalibracion"];
    $fechavenciCalibracion = $data["fechavenciCalibracion"];
    $estadoCalibracion = $data["estadoCalibracion"];
    $diasalertaCalibracion = $data["diasalertaCalibracion"];
    $origencaliCalibracion = $data["origencaliCalibracion"];
    $propiedaCalibracion = $data["propiedaCalibracion"];
    $numcarpetaCalibracion = $data["numcarpetaCalibracion"];
    $numcertiCalibracion = $data["numcertiCalibracion"];
    $numregistroCalibracion = $data["numregistroCalibracion"];
    $alcaninstrucCalibracion = $data["alcaninstrucCalibracion"];
    $resinstruCalibracion = $data["resinstruCalibracion"];
    $ubicacionautoCalibracion = $data["ubicacionautoCalibracion"];
    $docsalidaCalibracion = $data["docsalidaCalibracion"];

    $stmt = Conexion::conectar()->prepare("insert into control_calibracion(descripcion_calibracion, pn_calibracion, pnalt_calibracion, numserie_calibracion, codigo_calibracion, marcaofabri_calibracion, cantidad_calibracion, unidad_calibracion, observacion_calibracion, ubicacion_calibracion, fechacali_calibracion, periodocali_calibracion, fechavenci_calibracion, estado_calibracion, diasalerta_calibracion, origencali_calibracion, 	propiedad_calibracion, numcarpeta_calibracion, numcertifi_calibracion, numregistro_calibracion, alcanceinstru_calibracion, resuinstru_calibracion, ubicacionautorizada_calibracion, docsalida_calibracion) values('$desCalibracion', '$pnCalibracion', '$pnaltCalibracion', '$numserieCalibracion', '$codigoCalibracion', '$marcafabriCalibracion', '$cantidadCalibracion', '$unidadCalibracion', '$observacionCalibracion', '$ubicacionCalibracion', '$fechacalCalibracion', '$periodocalCalibracion', '$fechavenciCalibracion', '$estadoCalibracion', '$diasalertaCalibracion', '$origencaliCalibracion', '$propiedaCalibracion', '$numcarpetaCalibracion', '$numcertiCalibracion', '$numregistroCalibracion', '$alcaninstrucCalibracion', '$resinstruCalibracion', '$ubicacionautoCalibracion', '$docsalidaCalibracion')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoCalibracion($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM control_calibracion where id_calibracion=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEditCalibracion($data)
  {
    $idCalibracion = $data["idCalibracion"];
    $desCalibracion = $data["desCalibracion"];
    $pnCalibracion = $data["pnCalibracion"];
    $pnaltCalibracion = $data["pnaltCalibracion"];
    $numserieCalibracion = $data["numserieCalibracion"];
    $codigoCalibracion = $data["codigoCalibracion"];
    $marcafabriCalibracion = $data["marcafabriCalibracion"];
    $cantidadCalibracion = $data["cantidadCalibracion"];
    $unidadCalibracion = $data["unidadCalibracion"];
    $observacionCalibracion = $data["observacionCalibracion"];
    $ubicacionCalibracion = $data["ubicacionCalibracion"];
    $fechacalCalibracion = $data["fechacalCalibracion"];
    $periodocalCalibracion = $data["periodocalCalibracion"];
    $fechavenciCalibracion = $data["fechavenciCalibracion"];
    $estadoCalibracion = $data["estadoCalibracion"];
    $diasalertaCalibracion = $data["diasalertaCalibracion"];
    $origencaliCalibracion = $data["origencaliCalibracion"];
    $propiedaCalibracion = $data["propiedaCalibracion"];
    $numcarpetaCalibracion = $data["numcarpetaCalibracion"];
    $numcertiCalibracion = $data["numcertiCalibracion"];
    $numregistroCalibracion = $data["numregistroCalibracion"];
    $alcaninstrucCalibracion = $data["alcaninstrucCalibracion"];
    $resinstruCalibracion = $data["resinstruCalibracion"];
    $ubicacionautoCalibracion = $data["ubicacionautoCalibracion"];
    $docsalidaCalibracion = $data["docsalidaCalibracion"];

    $stmt = Conexion::conectar()->prepare("update control_calibracion set descripcion_calibracion='$desCalibracion', pn_calibracion='$pnCalibracion',pnalt_calibracion='$pnaltCalibracion',numserie_calibracion='$numserieCalibracion',codigo_calibracion='$codigoCalibracion', marcaofabri_calibracion='$marcafabriCalibracion', cantidad_calibracion='$cantidadCalibracion', unidad_calibracion='$unidadCalibracion', observacion_calibracion='$observacionCalibracion', ubicacion_calibracion='$ubicacionCalibracion', fechacali_calibracion='$fechacalCalibracion', periodocali_calibracion='$periodocalCalibracion', fechavenci_calibracion='$fechavenciCalibracion', estado_calibracion='$estadoCalibracion', diasalerta_calibracion='$diasalertaCalibracion', origencali_calibracion='$origencaliCalibracion', propiedad_calibracion='$propiedaCalibracion', numcarpeta_calibracion='$numcarpetaCalibracion', numcertifi_calibracion='$numcertiCalibracion', numregistro_calibracion='$numregistroCalibracion', alcanceinstru_calibracion='$alcaninstrucCalibracion', resuinstru_calibracion='$resinstruCalibracion', ubicacionautorizada_calibracion='$ubicacionautoCalibracion', docsalida_calibracion='$docsalidaCalibracion' where id_calibracion=$idCalibracion");

    if ($stmt->execute()) {

      return "ok";
    } else {

      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliCalibracion($data)
  {
    $stmt = Conexion::conectar()->prepare("delete from control_calibracion where id_calibracion=$data");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

static public function mdlRegistrosCalibraciones($data)
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

      $descripcion_calibracion = !empty($datos[0]) ? ($datos[0]) : '';
      $pn_calibracion = !empty($datos[1]) ? ($datos[1]) : '';
      $pnalt_calibracion = !empty($datos[2]) ? ($datos[2]) : '';
      $numserie_calibracion = !empty($datos[3]) ? ($datos[3]) : '';
      $codigo_calibracion = !empty($datos[4]) ? ($datos[4]) : '';
      $marcaofabri_calibracion = !empty($datos[5]) ? ($datos[5]) : '';
      $cantidad_calibracion = !empty($datos[6]) ? ($datos[6]) : '';
      $unidad_calibracion = !empty($datos[7]) ? ($datos[7]) : '';
      $ubicacion_calibracion = !empty($datos[8]) ? ($datos[8]) : '';
      $fechacali_calibracion = !empty($datos[9]) ? ($datos[9]) : '';
      $periodocali_calibracion = !empty($datos[10]) ? ($datos[10]) : '';
      $fechavenci_calibracion = !empty($datos[11]) ? ($datos[11]) : '';
      $estado_calibracion = !empty($datos[12]) ? ($datos[12]) : '';
      $diasalerta_calibracion = !empty($datos[13]) ? ($datos[13]) : '';
      $origencali_calibracion = !empty($datos[14]) ? ($datos[14]) : '';
      $propiedad_calibracion = !empty($datos[15]) ? ($datos[15]) : '';
      $numcarpeta_calibracion = !empty($datos[16]) ? ($datos[16]) : '';
      $numcertifi_calibracion = !empty($datos[17]) ? ($datos[17]) : '';
      $numregistro_calibracion = !empty($datos[18]) ? ($datos[18]) : '';
      $alcanceinstru_calibracion = !empty($datos[19]) ? ($datos[19]) : '';
      $resuinstru_calibracion = !empty($datos[20]) ? ($datos[20]) : '';
      $ubicacionautorizada_calibracion = !empty($datos[21]) ? ($datos[21]) : '';
      $docsalida_calibracion = !empty($datos[22]) ? ($datos[22]) : '';

      if (!empty($pn_calibracion)) {
        $mtr_duplicada = Conexion::conectar()->prepare("select pn_calibracion from control_calibracion where pn_calibracion='$pn_calibracion'");
        $mtr_duplicada->execute();
        $regDuplicado = $mtr_duplicada->rowCount();
      }

      if ($regDuplicado > 0) {

        $stmt = Conexion::conectar()->prepare("update control_calibracion set descripcion_calibracion, pn_calibracion, pnalt_calibracion, numserie_calibracion, codigo_calibracion, marcaofabri_calibracion, cantidad_calibracion, unidad_calibracion, ubicacion_calibracion, fechacali_calibracion, periodocali_calibracion, fechavenci_calibracion, estado_calibracion, diasalerta_calibracion, origencali_calibracion, propiedad_calibracion, numcarpeta_calibracion, numcertifi_calibracion, numregistro_calibracion, alcanceinstru_calibracion, resuinstru_calibracion, ubicacionautorizada_calibracion, docsalida_calibracion where pn_calibracion='$pn_calibracion'");
        $stmt->execute();
      } else {
        $stmt = Conexion::conectar()->prepare("insert into control_calibracion (descripcion_calibracion, pn_calibracion, pnalt_calibracion, numserie_calibracion, codigo_calibracion, marcaofabri_calibracion, cantidad_calibracion, unidad_calibracion, ubicacion_calibracion, fechacali_calibracion, periodocali_calibracion, fechavenci_calibracion, estado_calibracion, diasalerta_calibracion, origencali_calibracion, propiedad_calibracion, numcarpeta_calibracion, numcertifi_calibracion, numregistro_calibracion, alcanceinstru_calibracion, resuinstru_calibracion, ubicacionautorizada_calibracion, docsalida_calibracion) values('$descripcion_calibracion', '$pn_calibracion', '$pnalt_calibracion', '$numserie_calibracion', '$codigo_calibracion', '$marcaofabri_calibracion', '$cantidad_calibracion', '$unidad_calibracion', '$ubicacion_calibracion', '$fechacali_calibracion', '$periodocali_calibracion', '$fechavenci_calibracion', '$estado_calibracion', '$diasalerta_calibracion', '$origencali_calibracion', '$propiedad_calibracion', '$numcarpeta_calibracion', '$numcertifi_calibracion', '$numregistro_calibracion', '$alcanceinstru_calibracion', '$resuinstru_calibracion', '$ubicacionautorizada_calibracion', '$docsalida_calibracion')");
        $stmt->execute();
      }
    }
    $i++;
  }

  return "ok";
}

static public function mdlPorCalibracion($id)
{
  $stmt = Conexion::conectar()->prepare("select * from control_calibracion
  where id_calibracion=$id");
  $stmt->execute();
  return $stmt->fetch();
  $stmt->close();
  $stmt->null;
}

}
