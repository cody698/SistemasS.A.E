<?php
//capturamos la url
$ruta=parse_url($_SERVER['REQUEST_URI']);

if(isset($ruta["query"])){
    if($ruta["query"]=="ctrRegAutorizacion"||
       $ruta["query"]=="ctrEliAutorizacion"||
       $ruta["query"]=="ctrEditAutorizacion"){

        $metodo=$ruta["query"];
        $autorizacion = new ControladorAutorizacion();
        $autorizacion->$metodo();
    }
}

class ControladorAutorizacion{

    /*==========================
    Informacion de autorizacion todos 
    ============================*/
    static public function ctrInfoAutorizaciones(){
        $respuesta = ModeloAutorizacion::mdlInfoAutorizaciones();
        return $respuesta;
    } 


    /*====================
    Registro nuevo autorizacion
    =====================*/
    static public function ctrRegAutorizacion(){
        require_once "../modelo/autorizacionModelo.php";

        $nomAutorizacion = $_POST["nomAutorizacion"];
        $areaAutorizacion = trim($_POST["areaAutorizacion"]);
        $firmaAutorizacion = trim($_POST["firmaAutorizacion"]);
    
        $data = array(
            "id_cliente"=>$nomAutorizacion,
            "area"=>$areaAutorizacion,
            "firma"=>$firmaAutorizacion,
        );

        $respuesta = ModeloAutorizacion::mdlRegAutorizacion($data);

        echo $respuesta;
    }
    
    /*========================
    impresion autorizacion
    ========================*/
    static public function ctrInfoAutorizacion($id){
        $respuesta = ModeloAutorizacion::mdlInfoAutorizacion($id);
        return $respuesta;
    }



}
