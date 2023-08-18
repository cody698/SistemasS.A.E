<?php
//capturamos la url
$ruta=parse_url($_SERVER['REQUEST_URI']);

if(isset($ruta["query"])){
    if($ruta["query"]=="ctrRegCliente"||
       $ruta["query"]=="ctrEliCliente"||
       $ruta["query"]=="ctrEditCliente"){

        $metodo=$ruta["query"];
        $cliente = new ControladorCliente();
        $cliente->$metodo();
    }
}

class ControladorCliente{
    /*==========================
    Informacion de personales todos 
    ============================*/
    static public function ctrInfoClientes(){
        $respuesta = ModeloCliente::mdlInfoClientes();
        return $respuesta;
    } 

    /*====================
    Registro nuevo personal
    =====================*/
    static public function ctrRegCliente(){
        require_once "../modelo/clienteModelo.php";

        $ciCliente = trim($_POST["ciCliente"]);
        $nomCliente = trim($_POST["nomCliente"]);
        $apPatCliente = trim($_POST["apPatCliente"]);
        $apMatCliente = trim($_POST["apMatCliente"]);
        $fechNacimiento = trim($_POST["fechNacimiento"]);
        $direccion = trim($_POST["direccion"]);
        $teleCliente = trim($_POST["teleCliente"]);
        $correoCliente = trim($_POST["correoCliente"]);
        $foto = $_FILES["fotoCliente"];
        $fotoCliente = $foto["name"];
        $rutaFoto = $foto["tmp_name"];
        $rutaGuardado = "../assest/dist/img/cliente/";
        move_uploaded_file($rutaFoto,$rutaGuardado.$fotoCliente);

        $data = array(
            "ci_cliente"=>$ciCliente,
            "nombre_cliente"=>$nomCliente,
            "apellido_pat_cliente"=>$apPatCliente,
            "apellido_mat_cliente"=>$apMatCliente,
            "fecha_nacimiento"=>$fechNacimiento,
            "direccion_cliente"=>$direccion,
            "telefono_cliente"=>$teleCliente,
            "correo_cliente"=>$correoCliente,
            "foto"=>$fotoCliente
        );

        $respuesta = ModeloCliente::mdlRegCliente($data);

        echo $respuesta;
    }

    /*========================
    Ver Info usuario cliente
    ========================*/
    static public function ctrInfoCliente($idCliente){
        $respuesta = ModeloCliente::mdlInfoCliente($idCliente);
        return $respuesta;
    }

    /*=======================
    Eliminar usuario cliente
    ========================*/
    static public function ctrEliCliente(){
        require_once "../modelo/clienteModelo.php";
        $data = $_POST["id"];
        $respuesta = ModeloCliente::mdlEliCliente($data);
        echo $respuesta;
        
    }

    /*====================
    Editar Personal
    =====================*/
    static public function ctrEditCliente(){
        require_once "../modelo/clienteModelo.php";

        $idCliente = trim($_POST["idCliente"]);
        $ciCliente = trim($_POST["ciCliente"]);
        $nomCliente = trim($_POST["nomCliente"]);
        $apPatCliente = trim($_POST["apPatCliente"]);
        $apMatCliente = trim($_POST["apMatCliente"]);
        $fechNacimiento = trim($_POST["fechNacimiento"]);
        $direccion = trim($_POST["direccion"]);
        $teleCliente = trim($_POST["teleCliente"]);
        $correoCliente = trim($_POST["correoCliente"]);
        
        $foto = $_FILES["fotoCliente"];
        if($foto["name"] == ""){
            $fotoCliente = $_POST["fotoClienteActual"];
        }else{    
            $fotoCliente = $foto["name"];
            $rutaFoto = $foto["tmp_name"];
            $rutaGuardado = "../assest/dist/img/cliente/";
            move_uploaded_file($rutaFoto,$rutaGuardado.$fotoCliente);
        }

        $data = array(
            "idCliente"=>$idCliente,
            "ci_cliente"=>$ciCliente,
            "nombre_cliente"=>$nomCliente,
            "apellido_pat_cliente"=>$apPatCliente,
            "apellido_mat_cliente"=>$apMatCliente,
            "fecha_nacimiento"=>$fechNacimiento,
            "direccion_cliente"=>$direccion,
            "telefono_cliente"=>$teleCliente,
            "correo_cliente"=>$correoCliente,
            "foto"=>$fotoCliente
        );

        $respuesta = ModeloCliente::mdlEditCliente($data);

        echo $respuesta;
    }
}
