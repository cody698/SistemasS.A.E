/*==================
modal nuevo cliente
==================*/
function MNuevoCliente() {
    $("#modal-lg").modal("show");
    var obj = "";
    $.ajax({
            type: "POST",
            url: "vista/cliente/FNuevoCliente.php",
            data: obj,
            success: function (data) {
                $("#content-lg").html(data);
            }
        }

    )
}

/*=======================
funcion registro personal
=======================*/
function RegNuevoClientes() {
 
        var obj = new FormData($("#RegNuevoCliente")[0]);

        $.ajax({
                type: "POST",
                url: "controlador/clienteControlador.php?ctrRegCliente",
                data: obj,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {

                    if (data == "correcto") {
                        Swal.fire({
                            icon: 'success',
                            showConfirmButton: false,
                            title: 'El cliente ha sido registrado correctamente!!!',
                            timer: 1000
                        });

                        setTimeout(function () {
                            location.reload();
                        }, 1200);
                    }
                }
            }

        )

}

/*==================
modal ver cliente
==================*/
function MVerCliente(id) {
    $("#modal-lg").modal("show");
    var obj = "";
    $.ajax({
            type: "POST",
            url: "vista/cliente/InfoCliente.php?idCliente=" + id,
            data: obj,
            success: function (data) {
                $("#content-lg").html(data);
            }
        }

    )
}

/*==================
modal eliminar cliente
==================*/
function MEliCliente(id) {
    var obj = {
        id: id
    };

    Swal.fire({
        title: 'Esta seguro de eliminar este Cliente?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Confirmar',
        denyButtonText: `Cancelar`,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                data: obj,
                url: "controlador/clienteControlador.php?ctrEliCliente",
                success: function () {
                    location.reload()
                }
            })
        } else if (result.isDenied) {
            Swal.fire('Funcion Cancelada', '', 'info')
        }
    })
}

/*======================
Modal Editar cliente
=======================*/
function MEditarCliente(id){
    $("#modal-lg").modal("show");
    var obj = "";
    $.ajax({
            type: "POST",
            url: "vista/cliente/FEditCliente.php?idCliente="+id,
            data: obj,
            success: function (data) {
                $("#content-lg").html(data);
            }
        }

    )
}

/*=======================
funcion editar cliente
=======================*/
function EditarCliente(id) {
    
        var formData = new FormData($("#EditCliente")[0]);

        $.ajax({
                type: "POST",
                url: "controlador/clienteControlador.php?ctrEditCliente",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {

                    if (data == "correcto") {
                        Swal.fire({
                            icon: 'success',
                            showConfirmButton: false,
                            title: 'El cliente ha sido actualizado correctamente!!!',
                            timer: 1000
                        });

                        setTimeout(function () {
                            location.reload();
                        }, 1200);
                    }
                }
            }

       )

}
