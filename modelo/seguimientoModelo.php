<?php
require_once "conexion.php";

class ModeloSeguimiento
{

  static public function mdlInfoSeguimientos()
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM seguimiento");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }


  static public function mdlRegSeguimiento($data)
  {

    $nomSeguimiento = $data["nomSeguimiento"];
    $matriculaSeguimiento = $data["matriculaSeguimiento"];
    $descripcionSeguimiento = $data["descripcionSeguimiento"];
    $observacionSeguimiento = $data["observacionSeguimiento"];
    $tipoSeguimiento = $data["tipoSeguimiento"];
    $codigoSeguimiento = $data["codigoSeguimiento"];
    $minSeguimiento = $data["minSeguimiento"];
    $maxSeguimiento = $data["maxSeguimiento"];
    $ubicacionSeguimiento = $data["ubicacionSeguimiento"];
    $estadosSeguimiento = $data["estadosSeguimiento"];
    $areaSeguimiento = $data["areaSeguimiento"];
    $numeracionSeguimiento = $data["numeracionSeguimiento"];
    $imgUsuario = $data["imgUsuario"];

    date_default_timezone_set("America/La_Paz");
    $fecha = date("Y-m-d");

    $stmt = Conexion::conectar()->prepare("insert into seguimiento(cliente_seguimiento, matricula_seguimiento, descripcion_seguimiento, observaciones, tipo_tarjeta, codigo_seguimiento, horas_minimo, horas_maximo, ubicacion_seguimiento, estados_seguimiento, area_seguimiento, numeracion_seguimiento, foto_seguimiento,disponible, fecha_creacion) values('$nomSeguimiento', '$matriculaSeguimiento', '$descripcionSeguimiento', '$observacionSeguimiento', '$tipoSeguimiento', '$codigoSeguimiento', '$minSeguimiento', '$maxSeguimiento', '$ubicacionSeguimiento',  '$estadosSeguimiento', '$areaSeguimiento', '$numeracionSeguimiento', '$imgUsuario', 1, '$fecha')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoSeguimiento($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM seguimiento where id_seguimiento=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEditSeguimiento($data)
  {

    $idSeguimiento = $data["idSeguimiento"];
    $nomSeguimiento = $data["nomSeguimiento"];
    $matriculaSeguimiento = $data["matriculaSeguimiento"];
    $descripcionSeguimiento = $data["descripcionSeguimiento"];
    $observacionSeguimiento = $data["observacionSeguimiento"];
    $tipoSeguimiento = $data["tipoSeguimiento"];
    $codigoSeguimiento = $data["codigoSeguimiento"];
    $minSeguimiento = $data["minSeguimiento"];
    $maxSeguimiento = $data["maxSeguimiento"];
    $ubicacionSeguimiento = $data["ubicacionSeguimiento"];
    $estadosSeguimiento = $data["estadosSeguimiento"];
    $areaSeguimiento = $data["areaSeguimiento"];
    $numeracionSeguimiento = $data["numeracionSeguimiento"];
    $imgProducto = $data["imgProducto"];

    $stmt = Conexion::conectar()->prepare("update seguimiento set cliente_seguimiento='$nomSeguimiento', matricula_seguimiento='$matriculaSeguimiento',descripcion_seguimiento='$descripcionSeguimiento',observaciones='$observacionSeguimiento',tipo_tarjeta='$tipoSeguimiento', codigo_seguimiento='$codigoSeguimiento', horas_minimo='$minSeguimiento', horas_maximo='$maxSeguimiento', ubicacion_seguimiento='$ubicacionSeguimiento', estados_seguimiento='$estadosSeguimiento', area_seguimiento='$areaSeguimiento', numeracion_seguimiento='$numeracionSeguimiento' ,foto_seguimiento='$imgProducto' where id_seguimiento=$idSeguimiento");

    if ($stmt->execute()) {

      return "ok";
    } else {

      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliSeguimiento($data)
  {
    $stmt = Conexion::conectar()->prepare("delete from seguimiento where id_seguimiento=$data");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadEstados()
  {
    $stmt = Conexion::conectar()->prepare("select COUNT(*) as seguimiento FROM seguimiento WHERE estados_seguimiento='Sin Empezar'");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadProcesos()
  {
    $stmt = Conexion::conectar()->prepare("select COUNT(*) as seguimiento FROM seguimiento WHERE estados_seguimiento='Proceso'");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadPendienteMaterial()
  {
    $stmt = Conexion::conectar()->prepare("select COUNT(*) as seguimiento FROM seguimiento WHERE estados_seguimiento='Pendiente Material'");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadLimpiezas()
  {
    $stmt = Conexion::conectar()->prepare("select COUNT(*) as seguimiento FROM seguimiento WHERE estados_seguimiento='Limpieza'");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadObservaciones()
  {
    $stmt = Conexion::conectar()->prepare("select COUNT(*) as seguimiento FROM seguimiento WHERE estados_seguimiento='Observaciones'");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadFinalizaciones()
  {
    $stmt = Conexion::conectar()->prepare("select COUNT(*) as seguimiento FROM seguimiento WHERE estados_seguimiento='Finalizado'");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlReporteEstados($fechaInicial, $fechaFinal)
  {
    $stmt = Conexion::conectar()->prepare("select * from seguimiento where estados_seguimiento between '$fechaInicial' and '$fechaFinal'");

    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlBusSeguimiento($numSeg)
  {
    $stmt = Conexion::conectar()->prepare("select * from log_seguimiento where cod_seguimiento='$numSeg'");

    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegMovimiento($data)
  {
    $codSeguimiento = $data["codSeguimiento"];
    $estadoSeguimiento = $data["estadoSeguimiento"];
    $descripcionSeguimiento = $data["descripcionSeguimiento"];

    date_default_timezone_set("America/La_Paz");
    $fecha = date("Y-m-d");
    $hora = date("H:i:s");
    $fechaHora = $fecha . " " . $hora;

    $stmt = Conexion::conectar()->prepare("insert into log_seguimiento(cod_seguimiento, estado_seguimiento, fecha_log, descripcion_log) values('$codSeguimiento', '$estadoSeguimiento', '$fechaHora', '$descripcionSeguimiento')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliMovimiento($data)
  {
    $stmt = Conexion::conectar()->prepare("delete from log_seguimiento where id_log_seguimiento=$data");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegRegistros($data)
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

        $cliente_seguimiento = !empty($datos[0]) ? ($datos[0]) : '';
        $matriula_seguimiento = !empty($datos[1]) ? ($datos[1]) : '';
        $descripcion_seguimiento = !empty($datos[2]) ? ($datos[2]) : '';
        $observaciones = !empty($datos[3]) ? ($datos[3]) : '';
        $tipo_tarjeta = !empty($datos[4]) ? ($datos[4]) : '';
        $codigo_seguimiento = !empty($datos[5]) ? ($datos[5]) : '';
        $horas_minimo = !empty($datos[6]) ? ($datos[6]) : '';
        $horas_maximo = !empty($datos[7]) ? ($datos[7]) : '';
        $ubicacion_seguimiento = !empty($datos[8]) ? ($datos[8]) : '';
        $estados_seguimiento = !empty($datos[9]) ? ($datos[9]) : '';
        $area_seguimiento = !empty($datos[10]) ? ($datos[10]) : '';
        $material_seguimiento = !empty($datos[11]) ? ($datos[11]) : '';
        $foto_seguimiento = !empty($datos[12]) ? ($datos[12]) : '';
        $disponible = !empty($datos[13]) ? ($datos[13]) : '';
        $fecha_creacion = !empty($datos[14]) ? ($datos[14]) : '';

        if (!empty($codigo_seguimiento)) {
          $mtr_duplicada = Conexion::conectar()->prepare("select codigo_seguimiento from seguimiento where codigo_seguimiento='$codigo_seguimiento'");
          $mtr_duplicada->execute();
          $regDuplicado = $mtr_duplicada->rowCount();
        }

        if ($regDuplicado > 0) {

          $stmt = Conexion::conectar()->prepare("update seguimiento set cliente_seguimiento='$cliente_seguimiento', matricula_seguimiento='$matriula_seguimiento', descripcion_seguimiento='$descripcion_seguimiento', observaciones='$observaciones', tipo_tarjeta='$tipo_tarjeta', codigo_seguimiento='$codigo_seguimiento', horas_minimo='$horas_minimo', horas_maximo='$horas_maximo', ubicacion_seguimiento='$ubicacion_seguimiento', estados_seguimiento='$estados_seguimiento', area_seguimiento='$area_seguimiento', materiales_seguimiento='$material_seguimiento', foto_seguimiento='$foto_seguimiento', disponible='$disponible', fecha_creacion='$fecha_creacion' where codigo_seguimiento='$codigo_seguimiento'");
          $stmt->execute();
        } else {
          $stmt = Conexion::conectar()->prepare("insert into seguimiento (cliente_seguimiento, matricula_seguimiento, descripcion_seguimiento, observaciones, tipo_tarjeta, codigo_seguimiento, horas_minimo, horas_maximo, ubicacion_seguimiento, estados_seguimiento, area_seguimiento, materiales_seguimiento, foto_seguimiento, disponible, fecha_creacion) values('$cliente_seguimiento','$matriula_seguimiento','$descripcion_seguimiento','$observaciones','$tipo_tarjeta','$codigo_seguimiento','$horas_minimo','$horas_maximo','$ubicacion_seguimiento','$estados_seguimiento','$area_seguimiento','$material_seguimiento','$foto_seguimiento', '$disponible','$fecha_creacion')");
          $stmt->execute();
        }
      }
      $i++;
    }

    return "ok";
  }

  static public function mdlCambEstado($data)
  {

    $estado = $data["estado"];
    $codSeg = $data["codSeg"];

    //cambio de estado de la tabla seguimiento
    $MatSegui = Conexion::conectar()->prepare("update seguimiento set estados_seguimiento='$estado' where codigo_seguimiento='$codSeg'");

    if ($MatSegui->execute()) {

      return "ok";
    } else {

      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoAdicional($codSeg)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM materiales
JOIN seguimiento
ON seguimiento.codigo_seguimiento=materiales.codigo_seguimiento_mat
WHERE codigo_seguimiento_mat='$codSeg'");

    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }
}
