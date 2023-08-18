/*==================
modal nuevo autorizacion
==================*/
function MNuevoAutorizacion() {
  $("#modal-lg").modal("show");
  var obj = "";
  $.ajax({
    type: "POST",
    url: "vista/autorizacion/FNuevoAutorizacion.php",
    data: obj,
    success: function (data) {
      $("#content-lg").html(data);
    }
  }

        )
}

/*=======================
funcion registro autorizacion
=======================*/
function RegNuevoAutorizacion() {

  var obj = new FormData($("#RegNuevoAutorizacion")[0]);

  $.ajax({
    type: "POST",
    url: "controlador/autorizacionControlador.php?ctrRegAutorizacion",
    data: obj,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {

      if (data == "correcto") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'La autorizacion ha sido registrado correctamente!!!',
          timer: 1000
        });

        setTimeout(function () {
          location.reload();
        }, 1200);
      }
    }
  })
}

/*====================
modal ver autorizacion
=====================*/
function MVerAutorizacion(id) {
  $("#modal-lg").modal("show");
  var obj = "";
  $.ajax({
    type: "POST",
    url: "vista/autorizacion/InfoAutorizacion.php?idAutorizacion=" + id,
    data: obj,
    success: function (data) {
      $("#content-lg").html(data);
    }
  })
}
