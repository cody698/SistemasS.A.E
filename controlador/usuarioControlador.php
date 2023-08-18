<?php
$ruta = parse_url( $_SERVER['REQUEST_URI'] );

if ( isset( $ruta["query"] ) ) {

  if ( $ruta["query"] == "ctrRegUsuario" ||
      $ruta["query"] == "ctrEditUsuario" ||
      $ruta["query"] == "ctrEliUsuario"||
      $ruta["query"] == "ctrRegRegistrosUsuarios"||
      $ruta["query"] == "ctrActualizarPermiso"
     ){
    $metodo = $ruta["query"];
    $usuario = new ControladorUsuario();
    $usuario->$metodo();
  }
}

class ControladorUsuario {

  static public function ctrIngresoUsuario() {

    if ( isset( $_POST["emailUsuario"] ) ) {

      $usuario = $_POST["emailUsuario"];
      $password = $_POST["passUsuario"];

      $respuesta = ModeloUsuario::mdlIngresoUsuario( $usuario );

      if ( $respuesta != false && password_verify($password,$respuesta["pass_usuario"])&& $respuesta["estado_usuario"] == 1 ) {

        $_SESSION["ingreso"] = "ok";
        $_SESSION["nombreUsuario"] = $respuesta["nombre_usuario"];
        $_SESSION["id"] = $respuesta["id_usuario"];
        $_SESSION["rol"] = $respuesta["rol_usuario"];
        $_SESSION["imgUsuario"] = $respuesta["foto_usuario"];

        echo '<script>
                window.location="panelAdmin"
                </script>';
      } else {
        echo "<p class='text-danger'>Error de acceso, intente de nuevo</p>";
      }
    }
  }

  static public function ctrInfoUsuarios() {
    $respuesta = ModeloUsuario::mdlInfoUsuarios();
    return $respuesta;
  }

  static public function ctrRegUsuario() {
    require_once "../modelo/usuarioModelo.php";

    /*encriptar la password*/
    $password = password_hash( $_POST["passUsuario"], PASSWORD_DEFAULT );

    /*capturamos la imagen*/
    $imagen = $_FILES["imgUsuario"];

    $nomImagen = $imagen["name"];
    $archImagen = $imagen["tmp_name"];

    move_uploaded_file( $archImagen, "../assest/dist/img/usuarios/".$nomImagen );

    $data = array(
      "nomUsuario"=>$_POST["nomUsuario"],
      "emailUsuario"=>$_POST["emailUsuario"],
      "codUsuario"=>$_POST["codUsuario"],
      "passUsuario"=>$password,
      "imgUsuario"=>$nomImagen
    );

    $respuesta = ModeloUsuario::mdlRegUsuario( $data );
    echo $respuesta;
  }

  static public function ctrInfoUsuario( $id ) {
    $respuesta = ModeloUsuario::mdlInfoUsuario( $id );
    return $respuesta;
  }

  static public function ctrEditUsuario() {

    require_once "../modelo/usuarioModelo.php";

    /*encriptar la password*/
    if ( $_POST["passUsuario"] == $_POST["passUsuario3"] ) {

      $password = $_POST["passUsuario"];

    } else {

      $password = password_hash( $_POST["passUsuario"], PASSWORD_DEFAULT );

    }

    if ( $_FILES["imgUsuario"]["name"] == "" ) {

      $nomImagen = $_POST["imgUsuarioActual"];

    } else {

      /*capturamos la imagen*/
      $imagen = $_FILES["imgUsuario"];

      $nomImagen = $imagen["name"];
      $archImagen = $imagen["tmp_name"];

      move_uploaded_file( $archImagen, "../assest/dist/img/usuarios/".$nomImagen );
    }

    $data = array(
      "idUsuario"=>$_POST["idUsuario"],
      "nomUsuario"=>$_POST["nomUsuario"],
      "emailUsuario"=>$_POST["emailUsuario"],
      "codUsuario"=>$_POST["codUsuario"],
      "rolUsuario"=>$_POST["rolUsuario"],
      "estadoUsuario"=>$_POST["estadoUsuario"],
      "passUsuario"=>$password,
      "imgUsuario"=>$nomImagen
    );

    $respuesta = ModeloUsuario::mdlEditUsuario( $data );
    echo $respuesta;
  }

  static public function ctrEliUsuario(){
    require "../modelo/usuarioModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloUsuario::mdlEliUsuario($data);

    echo $respuesta;
  }

  static public function ctrUsuarioPermiso($idUsuario,$idPermiso){
    $respuesta = ModeloUsuario::mdlUsuarioPermiso($idUsuario,$idPermiso);
    return $respuesta;
  }

  static public function ctrActualizarPermiso(){
    require "../modelo/usuarioModelo.php";
    
    $data=array(
    "idUsuario"=>$_POST["idUsuario"],
    "idPermiso"=>$_POST["idPermiso"]
    );
    
    $respuesta = ModeloUsuario::mdlActualizarPermiso( $data );
    echo $respuesta;
  }
 static public function ctrRegRegistrosUsuarios(){
        require_once "../modelo/usuarioModelo.php";

        $data = array(
            "registros"=>$_FILES['dataUsuario']
        );

        $respuesta = ModeloUsuario::mdlRegRegistrosUsuarios( $data );
    echo $respuesta;
    }  
}
