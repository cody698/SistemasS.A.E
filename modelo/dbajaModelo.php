<?php
require_once "conexion.php";

class ModeloDBajas
{

  static public function mdlInfoDBajas()
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM  control_dbajas");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }


  static public function mdlRegDBajas($data)
  {

    $desDBaja = $data["desDBaja"];
    $pnDBaja = $data["pnDBaja"];
    $pnaltDBaja = $data["pnaltDBaja"];
    $numserieDBaja = $data["numserieDBaja"];
    $codigoDBaja = $data["codigoDBaja"];
    $marcafabriDBaja = $data["marcafabriDBaja"];
    $cantidadDBaja = $data["cantidadDBaja"];
    $unidadDBaja = $data["unidadDBaja"];
    $observacionDBaja = $data["observacionDBaja"];
    $ubicacionDBaja = $data["ubicacionDBaja"];
    $fechacalDBaja = $data["fechacalDBaja"];
    $periodocalDBaja = $data["periodocalDBaja"];
    $fechavenciDBaja = $data["fechavenciDBaja"];
    $estadoDBaja = $data["estadoDBaja"];
    $diasalertaDBaja = $data["diasalertaDBaja"];
    $origencaliDBaja = $data["origencaliDBaja"];
    $propiedaDBaja = $data["propiedaDBaja"];
    $numcarpetaDBaja = $data["numcarpetaDBaja"];
    $numcertiDBaja = $data["numcertiDBaja"];
    $numregistroDBaja = $data["numregistroDBaja"];
    $alcaninstrucDBaja = $data["alcaninstrucDBaja"];
    $resinstruDBaja = $data["resinstruDBaja"];
    $ubicacionautoDBaja = $data["ubicacionautoDBaja"];
    $docsalidaDBaja = $data["docsalidaDBaja"];

    $stmt = Conexion::conectar()->prepare("insert into control_dbajas(descripcion_dbajas, pn_dbajas, pnalt_dbajas, numserie_dbajas, codigo_dbajas, marcaofabri_dbajas, cantidad_dbajas, unidad_dbajas, observacion_dbajas, ubicacion_dbajas, fechacali_dbajas, periodocali_dbajas, fechavenci_dbajas, estado_dbajas, diasalerta_dbajas, origencali_dbajas, 	propiedad_dbajas, numcarpeta_dbajas, numcertifi_dbajas, numregistro_dbajas, alcanceinstru_dbajas, resuinstru_dbajas, ubicacionautorizada_dbajas, docsalida_dbajas) values('$desDBaja', '$pnDBaja', '$pnaltDBaja', '$numserieDBaja', '$codigoDBaja', '$marcafabriDBaja', '$cantidadDBaja', '$unidadDBaja', '$observacionDBaja', '$ubicacionDBaja', '$fechacalDBaja', '$periodocalDBaja', '$fechavenciDBaja', '$estadoDBaja', '$diasalertaDBaja', '$origencaliDBaja', '$propiedaDBaja', '$numcarpetaDBaja', '$numcertiDBaja', '$numregistroDBaja', '$alcaninstrucDBaja', '$resinstruDBaja', '$ubicacionautoDBaja', '$docsalidaDBaja')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoDbaja($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM control_dbajas where id_dbajas=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEditDBaja($data)
  {
    $idDBaja = $data["idDBaja"];
    $desDBaja = $data["desDBaja"];
    $pnDBaja = $data["pnDBaja"];
    $pnaltDBaja = $data["pnaltDBaja"];
    $numserieDBaja = $data["numserieDBaja"];
    $codigoDBaja = $data["codigoDBaja"];
    $marcafabriDBaja = $data["marcafabriDBaja"];
    $cantidadDBaja = $data["cantidadDBaja"];
    $unidadDBaja = $data["unidadDBaja"];
    $observacionDBaja = $data["observacionDBaja"];
    $ubicacionDBaja = $data["ubicacionDBaja"];
    $fechacalDBaja = $data["fechacalDBaja"];
    $periodocalDBaja = $data["periodocalDBaja"];
    $fechavenciDBaja = $data["fechavenciDBaja"];
    $estadoDBaja = $data["estadoDBaja"];
    $diasalertaDBaja = $data["diasalertaDBaja"];
    $origencaliDBaja = $data["origencaliDBaja"];
    $propiedaDBaja = $data["propiedaDBaja"];
    $numcarpetaDBaja = $data["numcarpetaDBaja"];
    $numcertiDBaja = $data["numcertiDBaja"];
    $numregistroDBaja = $data["numregistroDBaja"];
    $alcaninstrucDBaja = $data["alcaninstrucDBaja"];
    $resinstruDBaja = $data["resinstruDBaja"];
    $ubicacionautoDBaja = $data["ubicacionautoDBaja"];
    $docsalidaDBaja = $data["docsalidaDBaja"];

    $stmt = Conexion::conectar()->prepare("update control_dbajas set descripcion_dbajas='$desDBaja', pn_dbajas='$pnDBaja',pnalt_dbajas='$pnaltDBaja',numserie_dbajas='$numserieDBaja',codigo_dbajas='$codigoDBaja', marcaofabri_dbajas='$marcafabriDBaja', cantidad_dbajas='$cantidadDBaja', unidad_dbajas='$unidadDBaja', observacion_dbajas='$observacionDBaja', ubicacion_dbajas='$ubicacionDBaja', fechacali_dbajas='$fechacalDBaja', periodocali_dbajas='$periodocalDBaja', fechavenci_dbajas='$fechavenciDBaja', estado_dbajas='$estadoDBaja', diasalerta_dbajas='$diasalertaDBaja', origencali_dbajas='$origencaliDBaja', propiedad_dbajas='$propiedaDBaja', numcarpeta_dbajas='$numcarpetaDBaja', numcertifi_dbajas='$numcertiDBaja', numregistro_dbajas='$numregistroDBaja', alcanceinstru_dbajas='$alcaninstrucDBaja', resuinstru_dbajas='$resinstruDBaja', ubicacionautorizada_dbajas='$ubicacionautoDBaja', docsalida_dbajas='$docsalidaDBaja' where id_dbajas=$idDBaja");

    if ($stmt->execute()) {

      return "ok";
    } else {

      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliDBaja($data)
  {
    $stmt = Conexion::conectar()->prepare("delete from control_dbajas where id_dbajas=$data");

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
