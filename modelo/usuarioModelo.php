<?php
require "conexion.php";

class ModeloUsuario {

  static public function mdlIngresoUsuario( $usuario ) {

    $stmt = Conexion::conectar()->prepare( "select * from usuario where email_usuario='$usuario'" );
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoUsuarios() {
    $stmt = Conexion::conectar()->prepare( "select * from usuario" );
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegUsuario( $data ) {

    $nomUsuario = $data["nomUsuario"];
    $emailUsuario = $data["emailUsuario"];
    $codUsuario = $data["codUsuario"];
    $passUsuario = $data["passUsuario"];
    $imgUsuario = $data["imgUsuario"];

    date_default_timezone_set( "America/La_Paz" );
    $fecha = date( "Y-m-d" );

    $stmt = Conexion::conectar()->prepare( "insert into usuario(nombre_usuario, email_usuario, ci_usuario, pass_usuario, rol_usuario, foto_usuario, fecha_creacion, estado_usuario) values('$nomUsuario', '$emailUsuario', '$codUsuario' ,'$passUsuario', 'Suscriptor', '$imgUsuario',  '$fecha', 1)" );

    if ( $stmt->execute() ) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoUsuario( $id ) {
    $stmt = Conexion::conectar()->prepare( "select * from usuario where id_usuario=$id" );
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEditUsuario($data){

    $idUsuario=$data["idUsuario"];
    $nomUsuario=$data["nomUsuario"];
    $emailUsuario=$data["emailUsuario"];
    $codUsuario=$data["codUsuario"];
    $passUsuario=$data["passUsuario"];
    $imgUsuario=$data["imgUsuario"];
    $rolUsuario=$data["rolUsuario"];
    $estadoUsuario=$data["estadoUsuario"];

    $stmt = Conexion::conectar()->prepare( "update usuario set nombre_usuario='$nomUsuario', email_usuario='$emailUsuario', ci_usuario='$codUsuario', pass_usuario='$passUsuario',rol_usuario='$rolUsuario' ,foto_usuario='$imgUsuario' ,estado_usuario='$estadoUsuario' where id_usuario=$idUsuario");

    if ( $stmt->execute() ) {

      return "ok";

    } else {

      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliUsuario($data){
    $stmt = Conexion::conectar()->prepare("delete from usuario where id_usuario=$data");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlUsuarioPermiso($idUsuario,$idPermiso){
    $stmt = Conexion::conectar()->prepare("select * from permiso_usuario where id_usuario=$idUsuario and id_permiso=$idPermiso");

    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
    $stmt->null;
  }

  static public function mdlActualizarPermiso($data){
    $idUsuario=$data["idUsuario"];
    $idPermiso=$data["idPermiso"];

    $permiso = Conexion::conectar()->prepare("select * from permiso_usuario where id_usuario=$idUsuario and id_permiso=$idPermiso");
    $permiso->execute();

    if(($permiso->fetch())!=null){
      $stmt = Conexion::conectar()->prepare("delete from permiso_usuario  where id_usuario=$idUsuario and id_permiso=$idPermiso");
    }else{
      $stmt = Conexion::conectar()->prepare("insert into permiso_usuario (id_usuario, id_permiso) values ($idUsuario, $idPermiso)");
    }

    if ( $stmt->execute() ) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }
    
   static public function mdlRegRegistrosUsuarios($data){
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

                $nombre_usuario = !empty($datos[0]) ? ($datos[0]) : '';
                $email_usuario = !empty($datos[1]) ? ($datos[1]) : '';
                $ci_usuario = !empty($datos[2]) ? ($datos[2]) : '';
                $pass_usuario = !empty($datos[3]) ? ($datos[3]) : '';
                $rol_usuario = !empty($datos[4]) ? ($datos[4]) : '';
                $foto_usuario = !empty($datos[5]) ? ($datos[5]) : '';
                $fecha_creacion = !empty($datos[6]) ? ($datos[6]) : '';
                $estado_usuario = !empty($datos[7]) ? ($datos[7]) : '';

                if( !empty($ci_usuario) ){
                    $mtr_duplicada = Conexion::conectar()->prepare("select ci_usuario from usuario where ci_usuario='$ci_usuario'");
                    $mtr_duplicada->execute();
                    $regDuplicado=$mtr_duplicada->rowCount();
                }

                if ($regDuplicado>0) {

                    $stmt = Conexion::conectar()->prepare("update usuario set nombre_usuario='$nombre_usuario', email_usuario='$email_usuario', ci_usuario='$ci_usuario', pass_usuario='$pass_usuario', rol_usuario='$rol_usuario', foto_usuario='$foto_usuario', fecha_creacion='$fecha_creacion', estado_usuario='$estado_usuario' where ci_usuario='$ci_usuario'");
                    $stmt->execute();

                } else {
                    $stmt = Conexion::conectar()->prepare("insert into usuario (nombre_usuario, email_usuario, ci_usuario, pass_usuario, rol_usuario, foto_usuario, fecha_creacion, estado_usuario) values('$nombre_usuario','$email_usuario','$ci_usuario','$pass_usuario','$rol_usuario','$foto_usuario','$fecha_creacion','$estado_usuario')");
                    $stmt->execute();

                }

            }
            $i++;

        }
        
        return "ok";
    }

}
