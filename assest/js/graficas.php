<?php
require_once "../../modelo/graficaModelo.php";
$respuesta = ModeloGrafica::mdlInfoGraficas();
$etiqueta1='';
$valor1='';
foreach($respuesta as $elemento){
    $etiqueta1.="'".$elemento['estados_seguimiento']."',";
    $valor1.=$elemento['total'].",";
}
if($etiqueta1!=''){
    $etiqueta1=substr($etiqueta1,0,-1);
    $valor1=substr($valor1,0,-1);
}
?>

/* global Chart:false */

$(function () {
  'use strict'

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode = 'index'
  var intersect = true

  var $salesChart = $('#sales-chart')
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart($salesChart, {
    type: 'bar',
    data: {
      labels: [<?php echo $etiqueta1;?>],
      datasets: [
        {
          backgroundColor: '#007bff',
          borderColor: '#007bff',
          data: [<?php echo $valor1;?>]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          // display: false,
          gridLines: {
            display: true,
            lineWidth: '4px',
            color: 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks: $.extend({
            beginAtZero: true,

            // Include a dollar sign in the ticks
            callback: function (value) {
              if (value >= 1000) {
                value /= 1000
                value += 'k'
              }

              return  value
            }
          }, ticksStyle)
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false
          },
          ticks: ticksStyle
        }]
      }
    }
  })
  
})

// lgtm [js/unused-local-variable]
