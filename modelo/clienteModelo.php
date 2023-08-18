<?php
require_once "conexion.php";
class ModeloCliente{

    /*========================
    Informacion Usuarios todos
    ========================*/
    static public function mdlInfoClientes(){

        $stmt = Conexion::conectar()->prepare("select * from cliente");
        $stmt->execute();
        return $stmt->fetchAll();

        $stmt->close();
        $stmt->null;
    }

    /*====================
    Registro Cliente
    =====================*/
    static public function mdlRegCliente($data){

        $ci_cliente = $data["ci_cliente"];
        $nombre_cliente = $data["nombre_cliente"];
        $apellido_pat_cliente = $data["apellido_pat_cliente"];
        $apellido_mat_cliente = $data["apellido_mat_cliente"];
        $fecha_nacimiento = $data["fecha_nacimiento"];
        $direccion_cliente = $data["direccion_cliente"];
        $telefono_cliente = $data["telefono_cliente"];
        $correo_cliente = $data["correo_cliente"];
        $foto = $data["foto"];

        $stmt = Conexion::conectar()->prepare("insert into cliente (ci_cliente, nombre_cliente, apellido_pat_cliente, apellido_mat_cliente, fecha_nacimiento, direccion_cliente, telefono_cliente, correo_cliente, foto) values('$ci_cliente', '$nombre_cliente', '$apellido_pat_cliente', '$apellido_mat_cliente', '$fecha_nacimiento', '$direccion_cliente', '$telefono_cliente', '$correo_cliente', '$foto')");

        if($stmt->execute()){
            return "correcto";
        }else{
            return "error";
        }
        $stmt->close();
        $stmt->null;

    }

    /*========================
     Ver Info usuario cliente
    ========================*/
    static public function mdlInfoCliente($idCliente){

        $stmt = Conexion::conectar()->prepare("select * from cliente where id_cliente = $idCliente");

        $stmt->execute();
        return $stmt->fetch();

        $stmt->close();
        $stmt->null;

    }

    /*========================
     Elimnar usuario cliente
    ========================*/
    static public function mdlEliCliente($data){

        $stmt = Conexion::conectar()->prepare("delete from cliente where id_cliente = $data");

        if($stmt->execute()){

            return "eliminado";
        }else{
            return "error";
        } 

        $stmt->close();
        $stmt->null;

    }

    /*========================
     Editar usuario cliente
    ========================*/
    static public function mdlEditCliente($data){

        $idCliente = $data["idCliente"];
        $ci_cliente = $data["ci_cliente"];
        $nombre_cliente = $data["nombre_cliente"];
        $apellido_pat_cliente = $data["apellido_pat_cliente"];        
        $apellido_mat_cliente = $data["apellido_mat_cliente"];
        $fecha_nacimiento = $data["fecha_nacimiento"];
        $direccion_cliente = $data["direccion_cliente"];
        $telefono_cliente = $data["telefono_cliente"];
        $correo_cliente = $data["correo_cliente"];
        $foto = $data["foto"];

        $stmt = Conexion::conectar()->prepare("update cliente set ci_cliente = '$ci_cliente', nombre_cliente = '$nombre_cliente', apellido_pat_cliente = '$apellido_pat_cliente', apellido_mat_cliente = '$apellido_mat_cliente', fecha_nacimiento = '$fecha_nacimiento', direccion_cliente = '$direccion_cliente', telefono_cliente = '$telefono_cliente', correo_cliente = '$correo_cliente', foto = '$foto' where id_cliente =$idCliente");

        if($stmt->execute()){
            return "correcto";
        }else{
            return "error";
        }
        $stmt->close();
        $stmt->null;
    }
}
