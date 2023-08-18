function MNuevoDBaja() {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/dbaja/FNuevoDBaja.php",
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function RegDBaja() {


  var formData = new FormData($("#FormRegDBaja")[0])


  $.ajax({
    type: "POST",
    url: "controlador/dbajaControlador.php?ctrRegDBaja",
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
          title: 'Herramienta De Baja Registrada',
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

function MVerDBajas(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/dbaja/MVerDBaja.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function MEditarDBajas(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/dbaja/FEditDBaja.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function EditDBaja() {

  var formData = new FormData($("#FormEditDBaja")[0])
  $.ajax({
    type: "POST",
    url: "controlador/dbajaControlador.php?ctrEditDBaja",
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
          title: 'Herramienta De Baja Actualizado',
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

function MEliDBajas(id) {
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Esta seguro de eliminar esta Herramienta De Baja?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/dbajaControlador.php?ctrEliDbaja",
        success: function () {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}

function MCargarRegistrosDBaja() {
  $("#modal-default").modal("show")

  var obj = ""
  $.ajax({
      type: "POST",
      url: "vista/dbaja/FCargarRegistrosDbaja.php",
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


