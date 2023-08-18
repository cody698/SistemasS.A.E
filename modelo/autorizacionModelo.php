<?php
require_once "conexion.php";
class ModeloAutorizacion
{

  /*========================
    Informacion Autorizaciones todos
    ========================*/
  static public function mdlInfoAutorizaciones()
  {

    $stmt = Conexion::conectar()->prepare(
      "SELECT * FROM autorizacion
JOIN cliente
ON autorizacion.id_cliente=cliente.id_cliente"
    );
    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  /*====================
    Registro Autorizaciones
    =====================*/
  static public function mdlRegAutorizacion($data)
  {

    $id_cliente = $data["id_cliente"];
    $area = $data["area"];
    $firma = $data["firma"];

    $stmt = Conexion::conectar()->prepare("insert into autorizacion (id_cliente, area, firma, estado) values('$id_cliente', '$area', '$firma', 1)");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  /*========================
     impresion
    ========================*/
  static public function mdlInfoAutorizacion($id)
  {

    $stmt = Conexion::conectar()->prepare("SELECT * FROM autorizacion
JOIN cliente
ON autorizacion.id_cliente=cliente.id_cliente
WHERE id_autorizacion=$id");

    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }


}
