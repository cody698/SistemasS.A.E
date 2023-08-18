function MNuevoUsuario(){
    $("#modal-lg").modal("show")
    
    var obj=""
    $.ajax({
        type:"POST",
        url:"vista/usuario/FNuevoUsuario.php",
        data:obj,
        success:function(data){
            $("#content-lg").html(data)
        }
    })
}
function RegUsuario(){
    let pass=document.getElementById("passUsuario").value
    let pass2=document.getElementById("passUsuario2").value
    
    if(pass==pass2){
        
        var formData = new FormData($("#FormRegUsuario")[0])
        
        
    $.ajax({
        type:"POST",
        url:"controlador/usuarioControlador.php?ctrRegUsuario",
        data:formData,
        cache:false,
        contentType:false,
        processData:false,
        success:function(data){
            console.log(data)
            if(data=="ok"){
                Swal.fire({
                    icon: 'success',
                    showConfirmButton: false,
                    title: 'Usuario Registrado',
                    timer: 1000
                })
                setTimeout(function(){
                    location.reload()
                },1200)
            }else{
                Swal.fire({
                    icon: 'error',
                    showConfirmButton: false,
                    title: 'Error de Registro!!!',
                    timer: 1500
                })
            }
        }
    })    
    }else{
        document.getElementById("error-pass").innerHTML="Los campos de contraseña no coinciden"
    }
}

function MVerUsuario(id){
     $("#modal-lg").modal("show")
    
    var obj=""
    $.ajax({
        type:"POST",
        url:"vista/usuario/MVerUsuario.php?id="+id,
        data:obj,
        success:function(data){
            $("#content-lg").html(data)
        }
    })
}

function MEditUsuario(id){
    $("#modal-lg").modal("show")
    
    var obj=""
    $.ajax({
        type:"POST",
        url:"vista/usuario/FEditUsuario.php?id="+id,
        data:obj,
        success:function(data){
            $("#content-lg").html(data)
        }
    })
}

function EditUsuario(){
    let pass=document.getElementById("passUsuario").value
    let pass2=document.getElementById("passUsuario2").value
    
    if(pass==pass2){
        
        var formData = new FormData($("#FormEditUsuario")[0])
        
        
    $.ajax({
        type:"POST",
        url:"controlador/usuarioControlador.php?ctrEditUsuario",
        data:formData,
        cache:false,
        contentType:false,
        processData:false,
        success:function(data){
            console.log(data)
            if(data=="ok"){
                Swal.fire({
                    icon: 'success',
                    showConfirmButton: false,
                    title: 'Usuario Actualizado',
                    timer: 1000
                })
                setTimeout(function(){
                    location.reload()
                },1200)
            }else{
                Swal.fire({
                    icon: 'error',
                    showConfirmButton: false,
                    title: 'Error!!!',
                    timer: 1500
                })
            }
        }
    })    
    }else{
        document.getElementById("error-pass").innerHTML="Los campos de contraseña no coinciden"
    }
}

/*==================
modal eliminar usuario
==================*/
function MEliUsuario(id) {
    var obj = {
        id: id
    };

    Swal.fire({
        title: 'Esta seguro de eliminar este Usuario?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Confirmar',
        denyButtonText: `Cancelar`,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                data: obj,
                url: "controlador/usuarioControlador.php?ctrEliUsuario",
                success: function () {
                    location.reload()
                }
            })
        } else if (result.isDenied) {
            Swal.fire('Funcion Cancelada', '', 'info')
        }
    })
}

function actualizarPermiso(idUsuario, idPermiso){
    var obj={
    idUsuario:idUsuario,
    idPermiso:idPermiso
  }

  $.ajax({
    type: "POST",
    url: "controlador/usuarioControlador.php?ctrActualizarPermiso",
    data: obj,
    success: function(data) {

    }

  })
}

function MCargarRegistrosUsuarios() {
    $("#modal-default").modal("show")

    var obj = ""
    $.ajax({
        type: "POST",
        url: "vista/usuario/FCargarRegistrosUsuarios.php",
        data: obj,
        success: function (data) {
            $("#content-modal-default").html(data)
        }
    })
}

function CargarRegistrosUsuarios() {
    var formData = new FormData($("#FCargarRegistrosUsuarios")[0])


    $.ajax({
        type: "POST",
        url: "controlador/usuarioControlador.php?ctrRegRegistrosUsuarios",
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

