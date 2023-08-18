<?php
require_once "../../controlador/usuarioControlador.php";
require_once "../../modelo/usuarioModelo.php";

$id = $_GET["id"];

$usuario = ControladorUsuario::ctrInfoUsuario($id);

?>
<div class="page-content page-container">
    <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal" arial-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="row container d-flex justify-content-center">
        <div class="col-xl-12 col-md-12">
            <div class="card user-card-full">
                <div class="row m-l-0 m-r-0">
                    <div class="col-sm-4 bg-c-lite-green user-profile">
                        <div class="card-block text-center text-white">
                            <div class="m-b-25">
                                <?php if ($usuario["foto_usuario"] == "") {
                                ?>

                                    <img src="assest/dist/img/usuarios/user_default.png" alt="" class="img" width="200">
                                <?php
                                } else {
                                ?>

                                    <img src="assest/dist/img/usuarios/<?php echo $usuario["foto_usuario"]; ?>" alt="" class="img" width="200">
                                <?php
                                }
                                ?>
                            </div>
                            <p><?php echo $usuario["nombre_usuario"]; ?></p>
                            <i class="mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card-block">
                            <h5 class="text-center">Información de Usuario</h5>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">ID de Usuario</p>
                                    <h6 class="text-muted f-w-400"><?php echo $usuario["id_usuario"]; ?></h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Correo Electronico</p>
                                    <h6 class="text-muted f-w-400"><?php echo $usuario["email_usuario"]; ?></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Rol Usuario</p>
                                    <h6 class="text-muted f-w-400"><?php echo $usuario["rol_usuario"]; ?></h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Inicio en</p>
                                    <h6 class="text-muted f-w-400"><?php echo $usuario["fecha_creacion"]; ?></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Estado</p>
                                    <?php if ($usuario["estado_usuario"] == 1) {
                                    ?>
                                        <span class="badge bg-success">Activo</span>
                                    <?php
                                    } else {
                                    ?>
                                        <span class="badge bg-danger">Inactivo</span>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
</div>