<?php
require_once "conexion.php";

class ModeloGrafica {

  static public function mdlInfoGraficas() {
    $stmt = Conexion::conectar()->prepare( "SELECT COUNT(*) as total, estados_seguimiento FROM seguimiento WHERE tipo_tarjeta='ad' GROUP BY estados_seguimiento");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlAD() {
    $stmt = Conexion::conectar()->prepare( "SELECT COUNT(*) as total FROM seguimiento WHERE tipo_tarjeta='ad'");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

}
