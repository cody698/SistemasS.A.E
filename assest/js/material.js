function MNuevoMaterial() {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/material/FNuevoMaterial.php",
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function RegMaterial() {


  var formData = new FormData($("#FormRegMaterial")[0])


  $.ajax({
    type: "POST",
    url: "controlador/materialControlador.php?ctrRegMaterial",
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
          title: 'Material Registrado',
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

function MVerMaterial(id) {
  $("#modal-lg").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/material/MVerMaterial.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-lg").html(data)
    }
  })
}

function MEditarMaterial(id) {
  $("#modal-xl").modal("show")

  var obj = ""
  $.ajax({
    type: "POST",
    url: "vista/material/FEditMaterial.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-xl").html(data)
    }
  })
}

function EditMaterial() {

  var formData = new FormData($("#FormEditMaterial")[0])
  $.ajax({
    type: "POST",
    url: "controlador/materialControlador.php?ctrEditMaterial",
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
          title: 'Material Actualizado',
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

function MEliMaterial(id) {
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Esta seguro de eliminar este Material?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/materialControlador.php?ctrEliMaterial",
        success: function () {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}

function MCargarRegistrosMateriales() {
  $("#modal-default").modal("show")

  var obj = ""
  $.ajax({
      type: "POST",
      url: "vista/material/FCargarRegistrosMat.php",
      data: obj,
      success: function (data) {
          $("#content-modal-default").html(data)
      }
  })
}

function CargarRegistrosMat() {
  var formData = new FormData($("#FCargarRegistrosMat")[0])


  $.ajax({
      type: "POST",
      url: "controlador/materialControlador.php?ctrRegRegistrosMat",
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


function cambioEstadoMat(codSegMat){
  estado=document.getElementById("estadoMat["+codSegMat+"]").value
  
  var obj={
      estado:estado,
      codSegMat:codSegMat
  }
   $.ajax({
  type: "POST",
  url: "controlador/materialControlador.php?ctrCambEstado",
  data: obj,
/*    cache: false,
  dataType: "json",*/
  success: function (data) {
      
   if (data == "ok") {
      Swal.fire({
        icon: 'success',
        showConfirmButton: false,
        title: 'Material Registrado',
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

