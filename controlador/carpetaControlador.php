<?php
$ruta = parse_url( $_SERVER['REQUEST_URI'] );

if ( isset( $ruta["query"] ) ) {

  if ( $ruta["query"] == "ctrRegCarpeta" ||
      $ruta["query"] == "ctrEditCarpeta" ||
      $ruta["query"] == "ctrEliCarpeta" ||
      $ruta["query"] == "ctrEliArchivo"
     ){
    $metodo = $ruta["query"];
    $carpeta = new ControladorCarpeta();
    $carpeta->$metodo();
  }
}

class ControladorCarpeta {

  static public function ctrInfoCarpetas() {
    $respuesta = ModeloCarpeta::mdlInfoCarpetas();
    return $respuesta;
  }

  static public function ctrRegCarpeta(){

    $nomCarpeta = trim($_POST["nomCarpeta"]);
    $directorio= substr($_POST["directorio"],1);

    $carpeta="../assest/files/archivos".$directorio."/".$nomCarpeta;
    //comprobar la existencia del directorio
    if(file_exists($carpeta)==false){
      //creamos un directorio
      mkdir($carpeta, 0755);
      echo "correcto";
    }else{
      echo "error";
    }

    /*   
        *******codigo en desuso
        if (empty($_FILES['file']['name'])) {
        } else {
            foreach ($datos as $row) {
                $countfiles = count($_FILES['file']['name']);
                $ruta = "../assets/img/" . $row["id_carpeta"] . "/";
                $files_arr = array();

                if (!file_exists($ruta)) {
                    mkdir($ruta, 0777, true);
                }

                for ($index = 0; $index < $countfiles; $index++) {
                    $nombre = $_FILES['file']['tmp_name'][$index];
                    $destino = $ruta . $_FILES['file']['name'][$index];

                    $producto->insert_imagenes($row["id_carpeta"], $_FILES['file']['name'][$index]);

                    move_uploaded_file($nombre, $destino);
                }
            }
        }
        echo json_encode($datos);

         $data = array(
            "nombre_carpeta"=>$nomCarpeta,

        );

        //$respuesta = ModeloCarpeta::mdlRegCarpeta($nomCarpeta);

        //echo $respuesta;*/
  }


  static public function ctrEditCarpeta() {

    require_once "../modelo/carpetaModelo.php";

    $idCarpeta = trim($_POST["idCarpeta"]);
    $nomCarpeta = trim($_POST["nomCarpeta"]);


    $data = array(
      "idCarpeta"=>$_POST["idCarpeta"],
      "nombre_carpeta"=>$_POST["nomCarpeta"]

    );

    $respuesta = ModeloCarpeta::mdlEditCarpeta( $data );
    echo $respuesta;
  }

  static public function ctrInfoCarpeta( $id ) {
    $respuesta = ModeloCarpeta::mdlInfoCarpeta( $id );
    return $respuesta;
  }

  static public function ctrEliCarpeta(){
require_once "../modelo/carpetaModelo.php";
    $ruta=$_POST["rutaArchivo"];
    $carpeta=$_POST["nombreArchivo"];

    $directorio="../".$ruta."/".$carpeta;
    $respuesta = ModeloCarpeta::mdlEliCarpeta($directorio);
    echo $respuesta;
  }
  
  static public function ctrEliArchivo(){
    $ruta=$_POST["rutaArchivo"];
    $carpeta=$_POST["nombreArchivo"];

    $directorio="../".$ruta."/".$carpeta;
    
    if(unlink($directorio)==false){
      echo "error";
    }

   
  }

  //Archivos
  static public function ctrInfoArchivos() {
    $respuesta = ModeloCarpeta::mdlInfoArchivos();
    return $respuesta;
  }

}
