<?php
//capturamos la url
$ruta = parse_url($_SERVER['REQUEST_URI']);

if (isset($ruta["query"])) {
    if (
        $ruta["query"] == "ctrRegLogHerramientas" ||
        $ruta["query"] == "ctrDevHerramienta"
    ) {

        $metodo = $ruta["query"];
        $logherramientas = new ControladorLogHerramientas();
        $logherramientas->$metodo();
    }
}

class ControladorLogHerramientas
{
    /*==========================
    Informacion de Log todos 
    ============================*/
    static public function ctrInfoLogHerramientas()
    {
        $respuesta = ModeloLogHerramientas::mdlInfoLogHerramientas();
        return $respuesta;
    }

    /*====================
    Registro nuevo Log
    =====================*/
    static public function ctrRegLogHerramientas()
    {
        require_once "../modelo/logherramientasModelo.php";

        $cantidad = $_POST['cantidadHerramienta'];
        $nomLog = $_POST['nomLog'];
        $observacionesLog = $_POST['observacionesLog'];
        $nomHerramienta = $_POST['nomHerramienta'];
        $id = $_POST['idHerramientas'];

        //uniendo los datos en arreglos asociativos
        $arregloCarrito = [];
        for ($i = 0; $i < count($id); $i++) {
            $arregloItem = array(
                "cantidad" => $cantidad[$i],
                "id" => $id[$i]
            );
            array_push($arregloCarrito, $arregloItem);
        }

        require '../modelo/herramientasModelo.php';
        foreach ($arregloCarrito as $value) {
            $idProd = $value['id'];
            $cantidadAlmacen = ModeloHerramientas::mdlInfoHerramienta($idProd);

            $stock = $cantidadAlmacen['cantidad_herramientas'];
            $stockFinal = $stock - $value['cantidad'];

            $datos = array(
                "id" => $idProd,
                "cantidad" => $stockFinal
            );
            ModeloHerramientas::mdlActualizarStock($datos);
        }

        $data = array(
            "nomLog" => $nomLog,
            "observacionesLog" => $observacionesLog,
            "detalle" => $arregloCarrito
        );

        $respuesta = ModeloLogHerramientas::mdlRegLogHerramienta($data);
        echo $respuesta;
    }

    static public function ctrInfoLogHerramienta($id)
    {
        $respuesta = ModeloLogHerramientas::mdlInfoLogHerramienta($id);
        return $respuesta;
    }

    static public function ctrInfoLogHerramientaDesc($value)
    {
        $respuesta = ModeloLogHerramientas::mdlInfoLogHerramientaDesc($value);
        return $respuesta;
    }

    static public function ctrDevHerramienta()
    {
        require "../modelo/logherramientasModelo.php";
        $data = $_POST["id"];

        $respuesta = ModeloLogHerramientas::mdlInfoLogHerramienta($data);

        $resp = json_decode($respuesta['codigo_herramientas']);

        for ($i = 0; $i < count($resp); $i++) {
            $id = $resp[$i]->id;
            $cantidad = $resp[$i]->cantidad;
            $respuestaEstado = ModeloLogHerramientas::mdlActualizaStock($id, $cantidad);
        }

        if ($respuestaEstado == "ok") {
            $respuestas = ModeloLogHerramientas::mdlDevHerramienta($data);
            echo $respuestas;
        }
    }

    static public function ctrInfoLogEnvioEstado($id)
  {
    $respuesta = ModeloLogHerramientas::mdlInfoLogEnvioEstado($id);
    return $respuesta;
  }
}