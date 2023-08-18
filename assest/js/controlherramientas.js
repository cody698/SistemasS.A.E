function MNuevoControlHerramientas() {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/controlherramientas/FNuevoControlHerramientas.php",
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function RegControlHerramientas() {


  var formData = new FormData($("#FormRegControlHerramientas")[0])


  $.ajax({
    type: "POST",
    url: "controlador/controlherramientasControlador.php?ctrRegControlHerramienta",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data)
      if (data == "ok") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Control Herramientas Registrado',
          timer: 1000
        })
        setTimeout(function () {
          location.reload()
        }, 1200)
      } else {
        Swal.fire({
          icon: 'error',
          showConfirmButton: false,
          title: 'Error de Registro!!!',
          timer: 1500
        })
      }
    }
  })

}

function MVerControlHerramienta(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/controlherramientas/MVerControlHerramientas.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function MEditarControlHerramienta(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/controlherramientas/FEditControlHerramientas.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function EditControlHerramientas() {

  var formData = new FormData($("#FormEditControlHerramienta")[0])
  $.ajax({
    type: "POST",
    url: "controlador/controlherramientasControlador.php?ctrEditControlHerramienta",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data)
      if (data == "ok") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Control Herramienta Actualizado',
          timer: 1000
        })
        setTimeout(function () {
          location.reload()
        }, 1200)
      } else {
        Swal.fire({
          icon: 'error',
          showConfirmButton: false,
          title: 'Error!!!',
          timer: 1500
        })
      }
    }
  })
}

function MEliControlHerramienta(id) {
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Esta seguro de eliminar este control herramientas?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/controlherramientasControlador.php?ctrEliControlHerramienta",
        success: function () {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}

function MCargarRegistrosControlHerramientas() {
  $("#modal-default").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/controlherramientas/FCargarRegistrosControlHerramientas.php",
    data: obj,
    success: function (data) {
      $("#content-modal-default").html(data)
    }
  })
}

function CargarRegistrosControlHerra() {
  var formData = new FormData($("#FCargarRegistrosControlHerra")[0])
  $.ajax({
    type: "POST",
    url: "controlador/controlherramientasControlador.php?ctrRegRegistrosControlHerramientas",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data)
      if (data == "ok") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Registros cargados',
          timer: 1000
        })
        setTimeout(function () {
          location.reload()
        }, 1200)
      } else {
        Swal.fire({
          icon: 'error',
          showConfirmButton: false,
          title: 'Error de carga!!!',
          timer: 1500
        })

      }
    }
  })

}

/* REPORTE DE VENTAS POR PERSONAL */
function reporteHerramienta() {
  var formData = new FormData($("#ReporteDeHerramientas")[0])

  $.ajax({
    type: "POST",
    url: "controlador/controlherramientasControlador.php?ctrRepHerramientas",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      $("#repHerramientas").html(data)
      /* console.log(data); */
    }
  })
}

function impHerramientaSelec() {
  /*  window.open("vista/reportes/repHerramientaSelec.php", '_blank'); */
  $("#modal-xl").modal("show")
  var formData = new FormData($("#FormHerramientaSeleccionado")[0]);

  $.ajax({
    type: "POST",
    url: "vista/reportes/repHerramientaSelec.php",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      /* $("#repHerramientas").html(data) */
      $("#content-xl").html(data)
      console.log(data);
      /* $$('#button').each(function(link) { button.onclick = function(){ window.open("newpage.html",'New Window'); return false; }; }); */
    }
  })
}

function fechSelec() {
  var fechaInicial = new Date(document.getElementById('fechacalControlHerramientas').value);
  if (fechaInicial !== "") {
    $("#periodocalControlHerramientas").attr("readonly", false);
  }
}

function sumarMeses() {
  var fechaInicial = new Date(document.getElementById('fechacalControlHerramientas').value);
  var mesesASumar = parseInt(document.getElementById('periodocalControlHerramientas').value);

  var fechaFinal = new Date(fechaInicial.getFullYear(), fechaInicial.getMonth() + mesesASumar, fechaInicial.getDate() + 1);

  /* console.log('Fecha inicial: ', fechaInicial.toISOString().split('T')[0]);
  console.log('Fecha resultante después de sumar', mesesASumar, 'meses:', fechaFinal.toISOString().split('T')[0]); */

  document.getElementById('fechavenciControlHerramientas').value = fechaFinal.toJSON().slice(0, 10)
  document.getElementById('fechavenciControlHerramientas').classList.add('bg-dark', 'text-white')

  document.getElementById("estadoControlHerramientas").value = "CON TIEMPO";

  var DiferenciaFecha = fechaFinal - fechaInicial
  var diferenciaEnDias = Math.floor(DiferenciaFecha / (1000 * 60 * 60 * 24));
  document.getElementById('diasalertaControlHerramientas').value = diferenciaEnDias + " DIAS"
}

/* checks seleccionados */
var seleccionados = [];
$(document).ready(function () {

  $('#DataTableHerramientas').on('change', 'input[type="checkbox"]', function () {
    var checkbox = $(this);
    var valor = checkbox.val();
    if (checkbox.is(':checked')) {
      seleccionados.push(valor);
    } else {
      var index = seleccionados.indexOf(valor);
      if (index !== -1) {
        seleccionados.splice(index, 1);
      }
    }
  });

  $('#FormHerramientaRecibidaSeleccionado').on('submit', function (e) {
    e.preventDefault();
    $('<input>').attr({
      type: 'hidden',
      name: 'idclase',
      value: seleccionados.join(',')
    }).appendTo('#FormHerramientaRecibidaSeleccionado');
    this.submit();
  });

});


/* MODAL LLENAR DATOS DE IMPRESION */
function MDatosImpresion() {
  $("#modal-lg").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/reportes/MDatosInforme.php",
    data: obj,
    success: function (data) {
      $("#content-lg").html(data)
      document.getElementById("seleccionados").value = seleccionados;
    }
  })
}

/* function RegDatosInforme() {
  //var obj = {
  //id: seleccionados,
  //}
  var formData = new FormData($("#FormDatosInforme")[0]);
  $.ajax({
    type: "POST",
    url: "vista/reportes/repHerramientaSelec.php",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      window.open("vista/reportes/repHerramientaSelec.php", '_blank');
    }
  })
} */

function RegDatosInforme(){
  var formData = new FormData($("#FormDatosInforme")[0])
  $.ajax({
    type: "POST",
    url: "controlador/controlherramientasControlador.php?ctrRegDatosInforme",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data)
      if (data == "ok") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Informe Registrado..!!!',
          timer: 1000
        })
        setTimeout(function () {
          location.reload()
        }, 1200)
      } else {
        Swal.fire({
          icon: 'error',
          showConfirmButton: false,
          title: 'Error de Registro!!!',
          timer: 1500
        })
      }
    }
  })
}

function MVerInforme(id){
  $("#modal-default").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/reportes/MVerInforme.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-modal-default").html(data)
    }
  })
}


/* -------- mensaje de validacion al formulario Informe */
function validarFormulario() {
  var nombre = document.getElementById("fechaInforme").value;
  var email = document.getElementById("numInforme").value;
  if (nombre === "") {
    mostrarMensajeError("mensajeFecha", "Por favor, seleccione la fecha de Informe.");
    return false;
  }
  if (email === "") {
    mostrarMensajeError("mensajeInforme", "Ingrese el Número del Informe");
    return false;
  }
  return true;
}

function mostrarMensajeError(idElemento, mensaje) {
  var elemento = document.getElementById(idElemento);
  elemento.innerHTML = mensaje;
  elemento.style.color = "red";
  elemento.classList.add('text-center');
}



