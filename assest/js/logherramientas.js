/*==================
modal nuevo cliente
==================*/
/* function MLogHerramientas() {
    $("#modal-lg").modal("show");
    var obj = "";
    $.ajax({
            type: "POST",
            url: "vista/herramientas/FNuevoLogHerramientas.php",
            data: obj,
            success: function (data) {
                $("#content-lg").html(data);
                
            }
        }
    )
} */


/* checks seleccionados */
var seleccionados = [];
$(document).ready(function () {

  $('#DataTableControlHerramientas').on('change', 'input[type="checkbox"]', function () {
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

  $('#FormHerramientaSeleccionado').on('submit', function (e) {
    e.preventDefault();
    $('<input>').attr({
      type: 'hidden',
      name: 'idclase',
      value: seleccionados.join(',')
    }).appendTo('#FormHerramientaSeleccionado');
    this.submit();
  });

});

/* MODAL LLENAR DATOS DE IMPRESION */
function MLogHerramientas() {
  $("#modal-lg").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/herramientas/FNuevoLogHerramientas.php?ids=" + seleccionados,
    data: obj,
    success: function (data) {
      $("#content-lg").html(data)
      /* document.getElementById("seleccionados").value = seleccionados; */
    }
  })
}

/*=======================
funcion registro Log Herramientas
=======================*/
function RegLogHerramientas() {

  var formData = new FormData($("#FRegLogHerramientas")[0]);
  $.ajax({
    url: "controlador/logherramientasControlador.php?ctrRegLogHerramientas",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function (datos) {
      console.log(datos);
      if (datos == "ok") {
        Swal.fire({
          toast: true,
          position: 'top-end',
          icon: 'info',
          showConfirmButton: false,
          title: 'Salida registrada',
          timer: 1000
        })
        setTimeout(function () {
          location.reload()
        }, 1200);
      } else {
        Swal.fire({
          toast: true,
          position: 'top-end',
          icon: 'error',
          showConfirmButton: false,
          title: 'Er',
          timer: 1000
        });
      }
    }
  });
}

function MVerLogHerramienta(id){
  $("#modal-lg").modal("show")
 
 var obj=""
 $.ajax({
     type:"POST",
     url:"vista/herramientas/MVerLogHerramientas.php?id="+id,
     data:obj,
     success:function(data){
         $("#content-lg").html(data)
     }
 })
}

function MDevolverHerramienta(id) {
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Devolvió las Herramientas?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/logherramientasControlador.php?ctrDevHerramienta",
        success: function (data) {
          /* console.log(data); */
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}

function MDevolucionHerramienta(id){
  $("#modal-lg").modal("show")
 
 var obj=""
 $.ajax({
     type:"POST",
     url:"vista/herramientas/MDevolverLogHerramientas.php?id="+id,
     data:obj,
     success:function(data){
         $("#content-lg").html(data)
     }
 })
}

function RegDevHerramientas() {

  var formData = new FormData($("#FDevHerramientas")[0])
  $.ajax({
    type: "POST",
    url: "controlador/logherramientasControlador.php?ctrDevolucionHerramienta",
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
          title: 'Devolución realizada',
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

