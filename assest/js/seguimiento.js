function MNuevoSeguimiento() {
  $("#modal-lg").modal("show");

  var obj = "";
  $.ajax({
    type: "POST",
    url: "vista/seguimiento/FNuevoSeguimiento.php",
    data: obj,
    success: function (data) {
      $("#content-lg").html(data);
    },
  });
}

function RegSeguimiento() {
  var formData = new FormData($("#FormRegSeguimiento")[0]);

  $.ajax({
    type: "POST",
    url: "controlador/seguimientoControlador.php?ctrRegSeguimiento",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data);
      if (data == "ok") {
        Swal.fire({
          icon: "success",
          showConfirmButton: false,
          title: "Tarjeta Registrada",
          timer: 1000,
        });
        setTimeout(function () {
          location.reload();
        }, 1200);
      } else {
        Swal.fire({
          icon: "error",
          showConfirmButton: false,
          title: "Error de Registro!!!",
          timer: 1500,
        });
      }
    },
  });
}

function MVerSeguimiento(id) {
  $("#modal-lg").modal("show");

  var obj = "";
  $.ajax({
    type: "POST",
    url: "vista/seguimiento/MVerSeguimiento.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-lg").html(data);
    },
  });
}

function MEditSeguimiento(id) {
  $("#modal-lg").modal("show");

  var obj = "";
  $.ajax({
    type: "POST",
    url: "vista/seguimiento/FEditSeguimiento.php?id=" + id,
    data: obj,
    success: function (data) {
      $("#content-lg").html(data);
    },
  });
}

function EditSeguimiento() {
  var formData = new FormData($("#FormEditSeguimiento")[0]);

  $.ajax({
    type: "POST",
    url: "controlador/seguimientoControlador.php?ctrEditSeguimiento",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      if (data == "ok") {
        Swal.fire({
          icon: "success",
          showConfirmButton: false,
          title: "Tarjeta Actualizado",
          timer: 1000,
        });
        setTimeout(function () {
          location.reload();
        }, 1200);
      } else {
        Swal.fire({
          icon: "error",
          showConfirmButton: false,
          title: "Error!!!",
          timer: 1500,
        });
      }
    },
  });
}

function MEliSeguimiento(id) {
  var obj = {
    id: id,
  };

  Swal.fire({
    title: "Esta seguro de eliminar esta Tarjeta?",
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: "Confirmar",
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/seguimientoControlador.php?ctrEliSeguimiento",
        success: function () {
          location.reload();
        },
      });
    } else if (result.isDenied) {
      Swal.fire("Funcion Cancelada", "", "info");
    }
  });
}

function Traer_Datos_Seguimiento() {
  let numSeg = document.getElementById("numeroSeguimiento").value;
  var obj = {
    numSeg: numSeg,
  };

  $.ajax({
    type: "POST",
    data: obj,
    url: "controlador/seguimientoControlador.php?ctrBusSeguimiento",
    success: function (data) {
      $("#div_buscador").html(data);
    },
  });
}

function MRegMovSeguimiento() {
  $("#modal-default").modal("show");

  var obj = "";
  $.ajax({
    type: "POST",
    url: "vista/seguimiento/FMovTramite.php",
    data: obj,
    success: function (data) {
      $("#content-modal-default").html(data);
    },
  });
}

function RegMovSeguimiento() {
  var formData = new FormData($("#FRegMovSeguimiento")[0]);

  $.ajax({
    type: "POST",
    url: "controlador/seguimientoControlador.php?ctrRegMovimiento",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data);
      if (data == "ok") {
        Swal.fire({
          icon: "success",
          showConfirmButton: false,
          title: "Movimiento Registrado",
          timer: 1000,
        });
        setTimeout(function () {
          location.reload();
        }, 1200);
      } else {
        Swal.fire({
          icon: "error",
          showConfirmButton: false,
          title: "Error de Registro!!!",
          timer: 1500,
        });
      }
    },
  });
}

function EliMovimiento(id) {
  var obj = {
    id: id,
  };

  Swal.fire({
    title: "Esta seguro de eliminar este movimiento?",
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: "Confirmar",
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/seguimientoControlador.php?ctrEliMovimiento",
        success: function () {
          location.reload();
        },
      });
    } else if (result.isDenied) {
      Swal.fire("Funcion Cancelada", "", "info");
    }
  });
}

function MCargarRegistros() {
  $("#modal-default").modal("show");

  var obj = "";
  $.ajax({
    type: "POST",
    url: "vista/seguimiento/FCargarRegistros.php",
    data: obj,
    success: function (data) {
      $("#content-modal-default").html(data);
    },
  });
}

function CargarRegistros() {
  var formData = new FormData($("#FCargarRegistros")[0]);

  $.ajax({
    type: "POST",
    url: "controlador/seguimientoControlador.php?ctrRegRegistros",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data);
      if (data == "ok") {
        Swal.fire({
          icon: "success",
          showConfirmButton: false,
          title: "Registros cargados",
          timer: 1000,
        });
        setTimeout(function () {
          location.reload();
        }, 1200);
      } else {
        Swal.fire({
          icon: "error",
          showConfirmButton: false,
          title: "Error de carga!!!",
          timer: 1500,
        });
      }
    },
  });
}

function cambioEstadoSeg(codSeg) {
  estado = document.getElementById("estadoSeg[" + codSeg + "]").value;

  var obj = {
    estado: estado,
    codSeg: codSeg,
  };
  $.ajax({
    type: "POST",
    url: "controlador/seguimientoControlador.php?ctrCambEstado",
    data: obj,
    /*    cache: false,
    dataType: "json",*/
    success: function (data) {
      if (data == "ok") {
        Swal.fire({
          toast: true,
          position: "top-end",
          icon: "success",
          showConfirmButton: false,
          title: "Estado Tarjeta Cambiado",
          timer: 1000,
        });
        setTimeout(function () {
          location.reload();
        }, 1200);
      } else {
        Swal.fire({
          toast: true,
          position: "top-end",
          icon: "error",
          showConfirmButton: false,
          title: "Error de Registro!!!",
          timer: 1500,
        });
      }
    },
  });
}

/*====================================
informacion adicional del material
que conlleva al codigo de seguimiento
=====================================*/

function MInfoAdicional(codSeg){
  $("#modal-lg").modal("show")

  var obj = ""
  $.ajax({
      type: "POST",
      url: "vista/seguimiento/MInfoAdMaterial.php?codSeg=" + codSeg,
      data: obj,
      success: function (data) {
          $("#content-lg").html(data)
      }
  })
}
