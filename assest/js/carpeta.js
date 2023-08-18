/*
let arrImages=[];

let myDropzone = new Dropzone('.dropzone', {
  url:'../assets/img',
  maxFilesize:256,
  maxFiles:50,
  acceptedFiles:'image/jpeg, image/png, application/pdf, application/zip, .xlsx, .docx, .word, application/rar, .rar',
  addRemoveLinks:true,
  createImageThumbnails:true,
  dictRemoveFile:'Quitar'
})
myDropzone.on('addedfile', file=>{
  arrImages.push(file);
})

myDropzone.on('removedfile', file=>{
  let i = arrImages.indexOf(file);
  arrImages.splice(i, 1);
})

function init(){
  $("#FormRegCarpetas").on("submit",function(e){
    guardaryeditar(e);
  });
}

function guardaryeditar(e){
  e.preventDefault();
  var formData = new FormData($("#FormRegCarpetas")[0]);

  var totalfiles= arrImages.length;
  for (var i = 0; i < totalfiles; i++) {
    formData.append("file[]",arrImages[i]);
  }

  $.ajax({
    url: "../../controller/producto.php?op=guardar",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(data){
      console.log(data);
      $('#prod_nom').val('');
      Dropzone.forElement('.dropzone').removeAllFiles(true);
    }
  });
}

init();
*/

/*==================
modal nueva carpeta
==================*/
function MNuevoCarpeta(directorio) {
  $("#modal-default").modal("show");
  var obj = "";
  $.ajax({
    type: "POST",
    url: "vista/carpeta/FNuevoCarpeta.php?dir="+directorio,
    data: obj,
    success: function (data) {
      $("#content-modal-default").html(data);
    }
  }

        )
}

/*=======================
funcion crear carpeta
=======================*/
function FormRegCarpeta() {

  var obj = new FormData($("#FormRegCarpetas")[0]);

  $.ajax({
    type: "POST",
    url: "controlador/carpetaControlador.php?ctrRegCarpeta",
    data: obj,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {

      if (data == "correcto") {
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Carpeta creada correctamente!!!',
          timer: 1000
        });

        setTimeout(function () {
          location.reload();
        }, 1200);
      }else{
        Swal.fire({
          icon: "error",
          showConfirmButton: false,
          title: "Error, la carpeta ya existe!!!",
          timer: 1500,
        });
      }
    }
  }

        )

}


/*==================
codigo en desuso
==================*/
/*function MEliCarpeta(id) {
  var obj = {
    id: id
  };

  Swal.fire({
    title: 'Esta seguro de eliminar este Carpeta?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: obj,
        url: "controlador/carpetaControlador.php?ctrEliCarpeta",
        success: function () {
          location.reload()
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}*/

/*======================
Modal Editar carpeta
=======================*/
function MEditarCarpeta(id){
  $("#modal-sm").modal("show");
  var obj = "";
  $.ajax({
    type: "POST",
    url: "vista/carpeta/FEditCarpeta.php?id="+id,
    data: obj,
    success: function (data) {
      $("#modal-content-sm").html(data);
    }
  }

        )
}

/*=======================
funcion editar carpeta
=======================*/
function EditCarpeta(id) {

  var formData = new FormData($("#EditCarpeta")[0]);

  $.ajax({
    type: "POST",
    url: "controlador/carpetaControlador.php?ctrEditCarpeta",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {


    }

  })

}

/*======================================
funcion para subir archivos a la carpeta
======================================*/
function MSubirArchivos(archivo){
  let arc = archivo.split('-');
  let rutaArchivo = arc[0];
  let nombreArchivo = arc[1];

  let objArchivo = {
    rutaArchivo: rutaArchivo,
    nombreArchivo: nombreArchivo
  };

  $('#modal-xl').modal('show');

  $.ajax({
    type: "POST",
    url: "vista/carpeta/MSubirArchivos.php",
    data: objArchivo,
    success: function (data) {
      $("#content-xl").html(data);
    }
  })
}

function eliminarCarpeta(archivo){
  let arc = archivo.split('-');
  let rutaArchivo = arc[0];
  let nombreArchivo = arc[1];

  let objArchivo = {
    rutaArchivo: rutaArchivo,
    nombreArchivo: nombreArchivo
  };


  Swal.fire({
    title: 'Esta seguro de eliminar la carpeta '+nombreArchivo+' y todo su contenido?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: objArchivo,
        url: "controlador/carpetaControlador.php?ctrEliCarpeta",
        success: function (data) {

          if (data == "error") {
            Swal.fire({
              icon: 'error',
              showConfirmButton: false,
              title: 'La carpeta no puede ser eliminada!!!',
              timer: 1000
            });

          }else{
            setTimeout(function () {
              location.reload();
            }, 1200);
          }
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}

function eliminarArchivo(archivo){
    let arc = archivo.split('-');
  let rutaArchivo = arc[0];
  let nombreArchivo = arc[1];

  let objArchivo = {
    rutaArchivo: rutaArchivo,
    nombreArchivo: nombreArchivo
  };

  Swal.fire({
    title: 'Esta seguro de eliminar '+nombreArchivo,
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Confirmar',
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        data: objArchivo,
        url: "controlador/carpetaControlador.php?ctrEliArchivo",
        success: function (data) {
          

          if (data == "error") {
            Swal.fire({
              icon: 'error',
              showConfirmButton: false,
              title: 'El archivo no puede ser eliminado!!!',
              timer: 1000
            });

          }else{
            setTimeout(function () {
              location.reload();
            }, 1200);
          }
          
        }
      })
    } else if (result.isDenied) {
      Swal.fire('Funcion Cancelada', '', 'info')
    }
  })
}