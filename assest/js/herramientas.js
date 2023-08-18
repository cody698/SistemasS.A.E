function MNuevoHerramientas() {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/herramientas/FNuevoHerramientas.php",
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function RegHerramientas() {
  var formData = new FormData($("#FormRegHerramientas")[0])
  $.ajax({
    type: "POST",
    url: "controlador/herramientasControlador.php?ctrRegHerramienta",
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
          title: 'Herramientas Registradas',
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

function MVerHerramienta(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/herramientas/MVerHerramientas.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function MEditarHerramienta(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/herramientas/FEditHerramientas.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function EditHerramientas() {

  var formData = new FormData($("#FormEditHerramienta")[0])
  $.ajax({
    type: "POST",
    url: "controlador/herramientasControlador.php?ctrEditHerramienta",
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
          title: 'Herramienta Actualizado',
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

function MEliHerramienta(id) {
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Esta Seguro De Eliminar Esta Herramienta Perteneciente A SAE-LAB?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/herramientasControlador.php?ctrEliHerramienta",
        success: function () {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}

function MCargarRegistrosHerramientas() {
  $("#modal-default").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/herramientas/FCargarRegHerramientas.php",
    data: obj,
    success: function (data) {
      $("#content-modal-default").html(data)
    }
  })
}

function CargarRegistrosControlHerra() {
  var formData = new FormData($("#FCargarRegistrosHerramientas")[0])


  $.ajax({
    type: "POST",
    url: "controlador/herramientasControlador.php?ctrRegRegistrosHerramientas",
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