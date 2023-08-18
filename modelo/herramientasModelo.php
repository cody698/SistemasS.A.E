<?php
require_once "conexion.php";

class ModeloHerramientas
{

  static public function mdlInfoHerramientas()
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM herramientas");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }


  static public function mdlRegHerramientas($data)
  {

    $nHerramientas = $_POST["nHerramientas"];
    $desHerramientas = $_POST["desHerramientas"];
    $pnHerramientas = $_POST["pnHerramientas"];
    $pnaltHerramientas = $_POST["pnaltHerramientas"];
    $numserieHerramientas = $_POST["numserieHerramientas"];
    $codigoHerramientas = $_POST["codigoHerramientas"];
    $marcafabriHerramientas = $_POST["marcafabriHerramientas"];
    $cantidadHerramientas = $_POST["cantidadHerramientas"];
    $unidadHerramientas = $_POST["unidadHerramientas"];
    $ubicacionHerramientas = $_POST["ubicacionHerramientas"];
    $observacionHerramientas = $_POST["observacionHerramientas"];
    $aeronaveHerramientas = $_POST["aeronaveHerramientas"];
    $ataHerramientas = $_POST["ataHerramientas"];
    $docHerramientas = $_POST["docHerramientas"];
    $numcarpetaHerramientas = $_POST["numcarpetaHerramientas"];
    $equivalenciatecnicaHerramientas = $_POST["equivalenciatecnicaHerramientas"];
    $hojamanualHerramientas = $_POST["hojamanualHerramientas"];
    $stickerHerramientas = $_POST["stickerHerramientas"];
    $ultimoinventarioHerramientas = $_POST["ultimoinventarioHerramientas"];
    $calibradaespecializadaHerramientas = $_POST["calibradaespecializadaHerramientas"];
    $estadoHerramientas = $_POST["estadoHerramientas"];
    $requiereinspeperiodicaHerramientas = $_POST["requiereinspeperiodicaHerramientas"];
    $rangomedidaHerramientas = $_POST["rangomedidaHerramientas"];
    $ubicacionactualHerramientas = $_POST["ubicacionactualHerramientas"];
    $observacionesdelHerramientas = $_POST["observacionesdelHerramientas"];
    $imgHerramientas = $data["imgHerramientas"];

    $stmt = Conexion::conectar()->prepare("insert into herramientas(num_herramientas, descripcion_herramientas, 	pn_herramientas, pnalt_herramientas, sn_herramientas, codigo_herramientas, marcaofabri_herramientas, cantidad_herramientas, unidad_herramientas, ubicacion_herramientas, observacion_herramientas, aeronaves_herramientas, ata_herramientas, doc_herramientas, numcarpeta_herramientas, equivatecnica_herramientas, 	hojamanual_herramientas, sticker_herramientas, ultimoinven_herramientas, calibradaespecia_herramientas, estadoherramienta_herramientas, requiereinspecperiodica_herramientas, rangomedida_herramientas, ubicacionactual_herramientas, observacionesdel_herramientas, imagen_herramientas, disponible) values('$nHerramientas', '$desHerramientas', '$pnHerramientas', '$pnaltHerramientas', '$numserieHerramientas', '$codigoHerramientas', '$marcafabriHerramientas', '$cantidadHerramientas', '$unidadHerramientas', '$ubicacionHerramientas', '$observacionHerramientas', '$aeronaveHerramientas', '$ataHerramientas', '$docHerramientas', '$numcarpetaHerramientas', '$equivalenciatecnicaHerramientas', '$hojamanualHerramientas', '$stickerHerramientas', '$ultimoinventarioHerramientas', '$calibradaespecializadaHerramientas', '$estadoHerramientas', '$requiereinspeperiodicaHerramientas', '$rangomedidaHerramientas', '$ubicacionactualHerramientas', '$observacionesdelHerramientas', '$imgHerramientas', 1)");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoHerramienta($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM herramientas where id_herramientas=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoHerraSeleccionada($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM herramientas where id_herramientas=$id");
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
    $stmt->null;
  }

  static public function mdlEditHerramienta($data)
  {

    $idControlHerramientas = $data["idControlHerramientas"];
    $desControlHerramientas = $data["desControlHerramientas"];
    $pnControlHerramientas = $data["pnControlHerramientas"];
    $pnaltControlHerramientas = $data["pnaltControlHerramientas"];
    $numserieControlHerramientas = $data["numserieControlHerramientas"];
    $codigoControlHerramientas = $data["codigoControlHerramientas"];
    $marcafabriControlHerramientas = $data["marcafabriControlHerramientas"];
    $cantidadControlHerramientas = $data["cantidadControlHerramientas"];
    $unidadControlHerramientas = $data["unidadControlHerramientas"];
    $ubicacionControlHerramientas = $data["ubicacionControlHerramientas"];
    $fechacalControlHerramientas = $data["fechacalControlHerramientas"];
    $periodocalControlHerramientas = $data["periodocalControlHerramientas"];
    $fechavenciControlHerramientas = $data["fechavenciControlHerramientas"];
    $estadoControlHerramientas = $data["estadoControlHerramientas"];
    $diasalertaControlHerramientas = $data["diasalertaControlHerramientas"];
    $origencaliControlHerramientas = $data["origencaliControlHerramientas"];
    $propiedaControlHerramientas = $data["propiedaControlHerramientas"];
    $numcarpetaControlHerramientas = $data["numcarpetaControlHerramientas"];
    $numcertiControlHerramientas = $data["numcertiControlHerramientas"];
    $numregistroControlHerramientas = $data["numregistroControlHerramientas"];
    $alcaninstrucControlHerramientas = $data["alcaninstrucControlHerramientas"];
    $resinstruControlHerramientas = $data["resinstruControlHerramientas"];
    $ubicacionautoControlHerramientas = $data["ubicacionautoControlHerramientas"];
    $docsalidaControlHerramientas = $data["docsalidaControlHerramientas"];

    $stmt = Conexion::conectar()->prepare("update control_herramientas set descripcion_controlherramientas='$desControlHerramientas', pn_controlherramientas='$pnControlHerramientas',pnalt_controlherramientas='$pnaltControlHerramientas', numserie_controlherramientas='$numserieControlHerramientas', codigo_controlherramientas='$codigoControlHerramientas', marcaofabri_controlherramientas='$marcafabriControlHerramientas', cantidad_controlherramientas='$cantidadControlHerramientas', unidad_controlherramientas='$unidadControlHerramientas', ubicacion_controlherramientas='$ubicacionControlHerramientas', fechacali_controlherramientas='$fechacalControlHerramientas', periodocali_controlherramientas='$periodocalControlHerramientas', fechavenci_controlherramientas='$fechavenciControlHerramientas', estado_controlherramientas='$estadoControlHerramientas', diasalerta_controlherramientas='$diasalertaControlHerramientas', origencali_controlherramientas='$origencaliControlHerramientas', propiedad_controlherramientas='$propiedaControlHerramientas', numcarpeta_controlherramientas='$numcarpetaControlHerramientas', numcertifi_controlherramientas='$numcertiControlHerramientas', numregistro_controlherramientas='$numregistroControlHerramientas', alcanceinstru_controlherramientas='$alcaninstrucControlHerramientas', resuinstru_controlherramientas='$resinstruControlHerramientas', ubicacionautorizada_controlherramientas='$ubicacionautoControlHerramientas', docsalida_controlherramientas='$docsalidaControlHerramientas' where id_controlherramientas=$idControlHerramientas");

    if ($stmt->execute()) {

      return "ok";
    } else {

      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliHerramienta($data)
  {
    $stmt = Conexion::conectar()->prepare("delete from control_herramientas where id_controlherramientas=$data");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegRegistrosHerramientas($data)
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

        $num_herramientas = !empty($datos[0]) ? ($datos[0]) : '';
        $descripcion_herramientas = !empty($datos[1]) ? ($datos[1]) : '';
        $pn_herramientas = !empty($datos[2]) ? ($datos[2]) : '';
        $pnalt_herramientas = !empty($datos[3]) ? ($datos[3]) : '';
        $sn_herramientas = !empty($datos[4]) ? ($datos[4]) : '';
        $codigo_herramientas = !empty($datos[5]) ? ($datos[5]) : '';
        $marcaofabri_herramientas = !empty($datos[6]) ? ($datos[6]) : '';
        $cantidad_herramientas = !empty($datos[7]) ? ($datos[7]) : '';
        $unidad_herramientas = !empty($datos[8]) ? ($datos[8]) : '';
        $ubicacion_herramientas = !empty($datos[9]) ? ($datos[9]) : '';
        $observacion_herramientas = !empty($datos[10]) ? ($datos[10]) : '';
        $aeronaves_herramientas = !empty($datos[11]) ? ($datos[11]) : '';
        $ata_herramientas = !empty($datos[12]) ? ($datos[12]) : '';
        $doc_herramientas = !empty($datos[13]) ? ($datos[13]) : '';
        $numcarpeta_herramientas = !empty($datos[14]) ? ($datos[14]) : '';
        $equivatecnica_herramientas = !empty($datos[15]) ? ($datos[15]) : '';
        $hojamanual_herramientas = !empty($datos[16]) ? ($datos[16]) : '';
        $sticker_herramientas = !empty($datos[17]) ? ($datos[17]) : '';
        $ultimoinven_herramientas = !empty($datos[18]) ? ($datos[18]) : '';
        $calibradaespecia_herramientas = !empty($datos[19]) ? ($datos[19]) : '';
        $estadoherramienta_herramientas = !empty($datos[20]) ? ($datos[20]) : '';
        $requiereinspecperiodica_herramientas = !empty($datos[21]) ? ($datos[21]) : '';
        $rangomedida_herramientas = !empty($datos[22]) ? ($datos[22]) : '';
        $ubicacionactual_herramientas = !empty($datos[23]) ? ($datos[23]) : '';
        $observacionesdel_herramientas = !empty($datos[24]) ? ($datos[24]) : '';
        $imagen_herramientas = !empty($datos[25]) ? ($datos[25]) : '';
        $disponible = !empty($datos[26]) ? ($datos[26]) : '';

        if (!empty($codigo_herramientas)) {
          $mtr_duplicada = Conexion::conectar()->prepare("select codigo_herramientas from herramientas where codigo_herramientas='$codigo_herramientas'");
          $mtr_duplicada->execute();
          $regDuplicado = $mtr_duplicada->rowCount();
        }

        if ($regDuplicado > 0) {

          $stmt = Conexion::conectar()->prepare("update herramientas set num_herramientas, descripcion_herramientas, pn_herramientas,pnalt_herramientas, sn_herramientas, codigo_herramientas, marcaofabri_herramientas, cantidad_herramientas, unidad_herramientas, ubicacion_herramientas, observacion_herramientas, aeronaves_herramientas, ata_herramientas, doc_herramientas, numcarpeta_herramientas, equivatecnica_herramientas, hojamanual_herramientas, sticker_herramientas, ultimoinven_herramientas, calibradaespecia_herramientas, estadoherramienta_herramientas, requiereinspecperiodica_herramientas, rangomedida_herramientas, ubicacionactual_herramientas, observacionesdel_herramientas, imagen_herramientas, disponible where codigo_herramientas='$codigo_herramientas'");
          $stmt->execute();
        } else {
          $stmt = Conexion::conectar()->prepare("insert into herramientas (num_herramientas, descripcion_herramientas, pn_herramientas,pnalt_herramientas, sn_herramientas, codigo_herramientas, marcaofabri_herramientas, cantidad_herramientas, unidad_herramientas, ubicacion_herramientas, observacion_herramientas, aeronaves_herramientas, ata_herramientas, doc_herramientas, numcarpeta_herramientas, equivatecnica_herramientas, hojamanual_herramientas, sticker_herramientas, ultimoinven_herramientas, calibradaespecia_herramientas, estadoherramienta_herramientas, requiereinspecperiodica_herramientas, rangomedida_herramientas, ubicacionactual_herramientas, observacionesdel_herramientas, imagen_herramientas, disponible) values('$num_herramientas','$descripcion_herramientas', '$pn_herramientas', '$pnalt_herramientas', '$sn_herramientas', '$codigo_herramientas', '$marcaofabri_herramientas', '$cantidad_herramientas', '$unidad_herramientas', '$ubicacion_herramientas', '$observacion_herramientas', '$aeronaves_herramientas', '$ata_herramientas', '$doc_herramientas', '$numcarpeta_herramientas', '$equivatecnica_herramientas', '$hojamanual_herramientas', '$sticker_herramientas', '$ultimoinven_herramientas', '$calibradaespecia_herramientas', '$estadoherramienta_herramientas', '$requiereinspecperiodica_herramientas', '$rangomedida_herramientas', '$ubicacionactual_herramientas', '$observacionesdel_herramientas', '$imagen_herramientas', '$disponible')");
          $stmt->execute();
        }
      }
      $i++;
    }

    return "ok";
  }

  static public function mdlActualizarStock($datos){
    $herramientas = array($datos);
    foreach ($herramientas as $value) {
      $id = $value["id"];
      $cantidad = $value["cantidad"];

      $stmt = Conexion::conectar()->prepare("update herramientas set cantidad_herramientas='$cantidad' where id_herramientas='$id'");
      $stmt->execute();
    }
    
    return "ok";
  }
}
