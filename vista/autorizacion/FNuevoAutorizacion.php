<style>
  #pizarra {
    width: 750px;
    height: 300px;
    background-color: #d1d1d1;
  }
</style>
<form action="" id="RegNuevoAutorizacion" enctype="multipart/form-data">
  <div class="modal-header">
    <h4 class="modal-title">Registro de Consentimiento</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="">Nombre Clientes</label>
          <?php
          require_once "../../controlador/clienteControlador.php";
          require_once "../../modelo/clienteModelo.php";
          $clientes = ControladorCliente::ctrInfoClientes();

          ?>
          <select class="form-control" name="nomAutorizacion" id="nomAutorizacion">
            <?php foreach ($clientes as $value) {
            ?>
              <option value="<?php echo $value["id_cliente"]; ?>"><?php echo $value["nombre_cliente"] . " " . $value["apellido_pat_cliente"] . " " . $value["apellido_mat_cliente"]; ?></option>
            <?php
            }
            ?>
          </select>
        </div>
      </div>
      <div class="col-6">
        <div class="form-group">
          <label for="">Area</label>
          <input type="text" class="form-control" name="areaAutorizacion" id="areaAutorizacion">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <label for="">Firma</label>
          <canvas id="pizarra"></canvas>
          <input type="hidden" id="firmaAutorizacion" name="firmaAutorizacion">
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancelar</button>
    <button type="button" class="btn btn-info" onclick="borrarPizarra()">Borrar</button>
    <button type="button" class="btn btn-primary" onclick="guardar()">Guardar</button>
  </div>
</form>
<script>
  //======================================================================
  // VARIABLES
  //======================================================================
  let miCanvas = document.querySelector('#pizarra');
  let lineas = [];
  let correccionX = 0;
  let correccionY = 0;
  let pintarLinea = false;
  // Marca el nuevo punto
  let nuevaPosicionX = 0;
  let nuevaPosicionY = 0;

  let posicion = miCanvas.getBoundingClientRect()
  correccionX = posicion.x;
  correccionY = posicion.y;

  miCanvas.width = 750;
  miCanvas.height = 300;

  //======================================================================
  // FUNCIONES
  //======================================================================

  /**
   * Funcion que empieza a dibujar la linea
   */
  function empezarDibujo() {
    pintarLinea = true;
    lineas.push([]);
  };

  /**
   * Funcion que guarda la posicion de la nueva línea
   */
  function guardarLinea() {
    lineas[lineas.length - 1].push({
      x: nuevaPosicionX,
      y: nuevaPosicionY
    });
  }

  /**
   * Funcion dibuja la linea
   */
  function dibujarLinea(event) {
    event.preventDefault();
    if (pintarLinea) {
      let ctx = miCanvas.getContext('2d')
      // Estilos de linea
      ctx.lineJoin = ctx.lineCap = 'round';
      ctx.lineWidth = 5;
      // Color de la linea
      ctx.strokeStyle = '#000000';
      // Marca el nuevo punto
      if (event.changedTouches == undefined) {
        // Versión ratón
        nuevaPosicionX = event.layerX;
        nuevaPosicionY = event.layerY;
      } else {
        // Versión touch, pantalla tactil
        nuevaPosicionX = event.changedTouches[0].pageX - correccionX;
        nuevaPosicionY = event.changedTouches[0].pageY - correccionY;
      }
      // Guarda la linea
      guardarLinea();
      // Redibuja todas las lineas guardadas
      ctx.beginPath();
      lineas.forEach(function(segmento) {
        ctx.moveTo(segmento[0].x, segmento[0].y);
        segmento.forEach(function(punto, index) {
          ctx.lineTo(punto.x, punto.y);
        });
      });
      ctx.stroke();
    }
  }

  /**
   * Funcion que deja de dibujar la linea
   */
  function pararDibujar() {
    pintarLinea = false;
    guardarLinea();
  }

  //======================================================================
  // EVENTOS
  //======================================================================

  // Eventos raton
  miCanvas.addEventListener('mousedown', empezarDibujo, false);
  miCanvas.addEventListener('mousemove', dibujarLinea, false);
  miCanvas.addEventListener('mouseup', pararDibujar, false);

  // Eventos pantallas táctiles
  miCanvas.addEventListener('touchstart', empezarDibujo, false);
  miCanvas.addEventListener('touchmove', dibujarLinea, false);

  function borrarPizarra() {

    //document.getElementById("pizarra").innerHTML=""
    let miCanvas = document.querySelector('#pizarra');
    lineas.length = 0;
    let correccionX = 0;
    let correccionY = 0;
    let pintarLinea = false;
    // Marca el nuevo punto
    let nuevaPosicionX = 0;
    let nuevaPosicionY = 0;

    let posicion = miCanvas.getBoundingClientRect()
    correccionX = posicion.x;
    correccionY = posicion.y;

    miCanvas.width = 750;
    miCanvas.height = 300;
  }

  function guardar() {
    let canvas = document.querySelector('#pizarra');
    var imagen = canvas.toDataURL("image/png");
    document.getElementById("firmaAutorizacion").value = imagen

    RegNuevoAutorizacion()
  }
</script>