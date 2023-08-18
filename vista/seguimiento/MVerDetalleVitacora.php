<?php
require_once "../../controlador/marcacionControlador.php";
require_once "../../modelo/marcacionModelo.php";

$cod = $_GET["cod"];

$marcacion = ControladorMarcacion::ctrInfoMarcacion($cod);
$maximoMinutos = 0;
$maximoHoras = 0;
if(count($marcacion)){
  $maximoMinutos=$marcacion[0]['minutos'];
  $maximoHoras = $marcacion[0]['horas_maximo'];
}
?>

<div class="card card-info card-outline">
  <div class="modal-header">
    <h4 class="modal-title">Detalle de la Tarjeta: <span class="text-info"><?php echo $cod.' ( '.$maximoHoras.' ) '; ?></span></h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <table id="DTableVitacora" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>Fecha y hora</th>
          <th></th>
          <th>Usuario</th>
          <th>Horas de uso</th>
        </tr>
      </thead>
      <tbody>
        <?php
        //ref: https://codigoroot.net/blog/obtener-dias-entre-fechas-con-php/#:~:text=Utilizaremos%20la%20funci%C3%B3n%20strtotime(),diferencia%20entre%20dos%20fechas%20dadas.
        $totalHoras = 0;
        $totalMinutos = 0;
        
        foreach ($marcacion as $value) {
          //$maximoMinutos = $value['minutos'];
        ?>
          <tr>
            <td><?php echo $value["fecha_hora"]; ?></td>
            <td><?php echo $value["tipo"]; ?></td>
            <td><?php echo $value["nombre_usuario"];?></td>
            <td>
              <?php
              if ($value["tipo"] == "SALIDA") {
                $fechaInicial = date($value["fecha_hora"]);
              } else {
                $fechaFinal = date($value["fecha_hora"]);
              }

              if ($value["tipo"] == "ENTRADA") {

                // Las convertimos a segundos
                //$fechaInicialSegundos = strtotime($fechaInicial);
                //$fechaFinalSegundos = strtotime($fechaFinal);

                // Hacemos las operaciones para calcular los dias entre las dos fechas y mostramos el resultado
                //$dias = ($fechaFinalSegundos - $fechaInicialSegundos) / 86400;// cantidad de segundos por dia
                //$horas = ($fechaFinalSegundos - $fechaInicialSegundos) / 3600;
                //$minutos = ($fechaFinalSegundos - $fechaInicialSegundos) / 60;

                //echo round($horas, 0, PHP_ROUND_HALF_UP). ' horas ' ;
                //echo round($minutos, 0, PHP_ROUND_HALF_UP). ' minutos ';

                $fechaInicialX = new DateTime($fechaInicial);
                $fechaFinalX = new DateTime($fechaFinal);

                $FechaResultado = $fechaFinalX->diff($fechaInicialX);
                $horas = $FechaResultado->h;
                echo "{$FechaResultado->h} horas {$FechaResultado->i} minutos";
                $totalMinutos += $FechaResultado->h * 60 + $FechaResultado->i;
              }
              ?>

            </td>
          </tr>
        <?php
        }
        ?>
        <tr>
          <td colspan="3"></td>
          <td><b><?php echo intval($totalMinutos / 60) . ' Horas ' . $totalMinutos % 60 . ' Minutos '; ?></b>
            <?php
            $porcentaje = ($maximoMinutos >0) ? $totalMinutos / $maximoMinutos * 100:0;
            echo '<br>' . number_format ($porcentaje,1,'.',',') . '%';
            $diferencia = $maximoMinutos - $totalMinutos;
            if($diferencia<0){
              echo 'Te has sobrepasado' .abs($diferencia). 'minutos';
            }
            ?>
          </td>
        </tr>
      </tbody>

    </table>

  </div>

</div>