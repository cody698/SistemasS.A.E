function MNuevoServicio() {
  $("#modal-lg").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/servicios/FNuevoServicio.php",
    data: obj,
    success: function (data) {
      $("#content-lg").html(data)
    }
  })
}

function RegServicio() {


  var formData = new FormData($("#FormRegServicio")[0])


  $.ajax({
    type: "POST",
    url: "controlador/servicioControlador.php?ctrRegServicio",
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
          title: 'Paquete Servicio Registrado',
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

function MVerSeguimiento(id) {
  $("#modal-lg").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/seguimiento/MVerSeguimiento.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-lg").html(data)
    }
  })
}

function MEditServicio(id) {
  $("#modal-lg").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/servicios/FEditServicio.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-lg").html(data)
    }
  })
}

function EditServicio() {

  var formData = new FormData($("#FormEditServicio")[0])


  $.ajax({
    type: "POST",
    url: "controlador/servicioControlador.php?ctrEditServicio",
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
          title: 'Servicio Actualizado',
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

function MEliServicio(id) {
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Esta seguro de eliminar este Servicio?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/servicioControlador.php?ctrEliServicio",
        success: function () {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}