<?php
require_once "conexion.php";

class ModeloServicio
{

    static public function mdlInfoServicios()
    {
        //horas maxima de tabla servicios
        $mxmHr=Conexion::conectar()->prepare("SELECT max(horasmaximo) FROM servicios");
        $mxmHr->execute();

        //codigos de seguimiento de tabla marcacion

        $codSgm=Conexion::conectar()->prepare("SELECT DISTINCT codigo_seguimiento FROM marcacion");
        $codSgm->execute();

        $stmt = Conexion::conectar()->prepare("SELECT * FROM servicios");
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();
        $stmt->null;
    }

    //sumar las horas de algun cliente
    static public function mdlTotHoras($cliente){
        $stmt=Conexion::conectar()->prepare("select marcacion.codigo_seguimiento, fecha_hora, tipo, cliente_seguimiento, time_to_sec(horas_maximo)/60 as minutos, horas_maximo
              from marcacion

              inner join seguimiento
              on marcacion.codigo_seguimiento= seguimiento.codigo_seguimiento 

              where seguimiento.cliente_seguimiento like '$cliente';");
        $stmt->execute();
        $horas=$stmt->fetchAll();

        $totalMinutos = 0;

        foreach($horas as $value){

            if ($value["tipo"] == "SALIDA") {
                $fechaInicial = date($value["fecha_hora"]);
            } else {
                $fechaFinal = date($value["fecha_hora"]);
            }

            if ($value["tipo"] == "ENTRADA") {
                $fechaInicialX = new DateTime($fechaInicial);
                $fechaFinalX = new DateTime($fechaFinal);

                $FechaResultado = $fechaFinalX->diff($fechaInicialX);

                $totalMinutos += ($FechaResultado->h * 60) + $FechaResultado->i;//total en minutos
            }
            
            
        }
        //redondeando las horas y los minutos
        $horas=$totalMinutos/60;
        $minutos=$totalMinutos%60;
        $horas_minutos=intval( $horas).":".$minutos;
        
        //calculando el porcentaje de avance
        $hrMax_sql=Conexion::conectar()->prepare("select horasmaximo from servicios where cliente='$cliente' ");
        $hrMax_sql->execute();
        $hrMax=$hrMax_sql->fetch();
        $minutosTotales=$hrMax["horasmaximo"]*60;
        $porcentaje=number_format(($totalMinutos/$minutosTotales*100), 2, '.', ',') . '%'; 
        
        $result=array(
        'totHorasMin'=>$horas_minutos,
        'porcentaje'=>$porcentaje
        );
        return $result;
    }


    static public function mdlRegServicio($data)
    {

        $clienteServicio = $data["clienteServicio"];
        $matriculaServicio = $data["matriculaServicio"];
        $observacionServicio = $data["observacionServicio"];
        $horasminServicio = $data["horasminServicio"];
        $horasmaxServicio = $data["horasmaxServicio"];

        date_default_timezone_set("America/La_Paz");
        $fecha = date("Y-m-d");

        $stmt = Conexion::conectar()->prepare("insert into servicios(cliente, matricula, observacion_servicio, horasminimo, horasmaximo, fechacreacion, horastotal, estado) values('$clienteServicio', '$matriculaServicio', '$observacionServicio', '$horasminServicio', '$horasmaxServicio', '$fecha', 0, 1)");

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }

        $stmt->close();
        $stmt->null;
    }

    static public function mdlInfoServicio($id)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM servicios where id_servicio=$id");
        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();
        $stmt->null;
    }

    static public function mdlEditServicio($data)
    {

        $idServicio = $data["idServicio"];
        $clienteServicio = $data["clienteServicio"];
        $matriculaServicio = $data["matriculaServicio"];
        $observacionServicio = $data["observacionServicio"];
        $horasminServicio = $data["horasminServicio"];
        $horasmaxServicio = $data["horasmaxServicio"];
        $estadoServicio = $data["estadoServicio"];

        $stmt = Conexion::conectar()->prepare("update servicios set cliente='$clienteServicio', matricula='$matriculaServicio',observacion_servicio='$observacionServicio', horasminimo='$horasminServicio', horasmaximo='$horasmaxServicio', estado='$estadoServicio' where id_servicio=$idServicio");

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();
        $stmt->null;
    }

    static public function mdlEliServicio($data)
    {
        $stmt = Conexion::conectar()->prepare("delete from servicios where id_servicio=$data");

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

    static public function mdlBusServicio($numSeg)
    {
        $stmt = Conexion::conectar()->prepare("select * from log_seguimiento where cod_seguimiento='$numSeg'");

        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();
        $stmt->null;
    }

    static public function mdlRegMovimiento($data){
        $codSeguimiento = $data["codSeguimiento"];
        $estadoSeguimiento = $data["estadoSeguimiento"];
        $descripcionSeguimiento = $data["descripcionSeguimiento"];

        date_default_timezone_set("America/La_Paz");
        $fecha = date("Y-m-d");
        $hora=date("H:i:s");
        $fechaHora=$fecha." ".$hora;

        $stmt = Conexion::conectar()->prepare("insert into log_seguimiento(cod_seguimiento, estado_seguimiento, fecha_log, descripcion_log) values('$codSeguimiento', '$estadoSeguimiento', '$fechaHora', '$descripcionSeguimiento')");

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }

        $stmt->close();
        $stmt->null;
    }

    static public function mdlEliMovimiento($data){
        $stmt = Conexion::conectar()->prepare("delete from log_seguimiento where id_log_seguimiento=$data");

        if ($stmt->execute()) {
            return "correcto";
        } else {
            return "error";
        }
        $stmt->close();
        $stmt->null;
    }
}
