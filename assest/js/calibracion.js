function MNuevoCalibracion() {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/calibracion/FNuevoCalibracion.php",
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function RegCalibracion() {


  var formData = new FormData($("#FormRegCalibracion")[0])


  $.ajax({
    type: "POST",
    url: "controlador/calibracionControlador.php?ctrRegCalibracion",
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
          title: 'Origen o Calibracion Registrado',
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

function MVerCalibraciones(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/calibracion/MVerCalibracion.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function MEditarCalibraciones(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/calibracion/FEditCalibracion.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function EditCalibracion() {

  var formData = new FormData($("#FormEditCalibracion")[0])
  $.ajax({
    type: "POST",
    url: "controlador/calibracionControlador.php?ctrEditCalibracion",
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
          title: 'Calibracion Actualizado',
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

function MEliCalibracion(id) {
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Esta seguro de eliminar esta Calibracion?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/calibracionControlador.php?ctrEliCalibracion",
        success: function () {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}

function MCargarRegistrosCalibracion() {
  $("#modal-default").modal("show")

  var obj = ""
  $.ajax({
      type: "POST",
      url: "vista/calibracion/FCargarRegistrosCalibracion.php",
      data: obj,
      success: function (data) {
          $("#content-modal-default").html(data)
      }
  })
}

function CargarRegistrosCalibracion() {
  var formData = new FormData($("#FCargarRegistrosCalibracion")[0])

  $.ajax({
      type: "POST",
      url: "controlador/calibracionControlador.php?ctrRegistrosCalibracion",
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


