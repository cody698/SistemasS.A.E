<?php

function habilitado($idPermiso)
{
    $id = $_SESSION["id"];
    $permiso = ControladorUsuario::ctrUsuarioPermiso($id, $idPermiso);
    return $permiso;
}
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="CTramite" class="brand-link" target="_blank">
                <img src="assest/imagenes/logosae.png" alt="AdminLTE Logo" class="brand-image img-thumbnail elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">CONTROL TARJETAS</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="assest/dist/img/usuarios/<?php echo $_SESSION["imgUsuario"]; ?>" class="img-thumbnail elevation-6" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="panelAdmin" class="d-block"><?php echo $_SESSION["nombreUsuario"] . "  " . $_SESSION["rol"]; ?></a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
                        <?php if (habilitado(1) != null) {
                        ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Usuario
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="VUsuario" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Lista de Usuarios</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" onclick="MCargarRegistrosUsuarios()">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Carcar registros</p>
                                        </a>
                                    </li>
                                </ul>

                            </li>
                        <?php } ?>

                        <?php if (habilitado(7) != null) {
                        ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Clientes
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="VCliente" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Lista de Clientes</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if (habilitado(10) != null) {
                        ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-toolbox"></i>
                                    <p>
                                        Herramienta Reci/Entre
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="VHerramientas" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Herramientas SAE-LAB</p>
                                        </a>
                                        <a href="VLogHerramientas" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Log Herramientas</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if (habilitado(11) != null) {
                        ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tools"></i>
                                    <p>
                                        Control Herramientas
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="VControlHerramientas" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Herramientas Completas</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="VCalibracion" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Origen o Calibracion</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="VDBaja" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Dados De Baja</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="VRepHerramientas" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Reporte Herramientas</p>
                                        </a>
                                    </li>
                                </ul>

                            </li>
                        <?php } ?>

                        <?php if (habilitado(12) != null) {
                        ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-wrench"></i>
                                    <p>
                                        Paquete Servicio
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="VServicio" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Lista de Servicios</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if (habilitado(6) != null) {
                        ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Archivos
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="VArchivos" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Subir Archivos</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="VCliente" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Archivos Compartidos</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if (habilitado(3) != null) {
                        ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-check"></i>
                                    <p>
                                        Autorizacion
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="VAutorizacion" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Lista de Autorizaciones</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if (habilitado(8) != null) {
                        ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-box-open"></i>
                                    <p>
                                        Materiales

                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="VMaterial" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Lista Materiales</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" onclick="MCargarRegistrosMateriales()">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Carcar registros</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if (habilitado(5) != null) {
                        ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Registro Tarjetas
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <?php if (habilitado(5) != null) {
                                    ?>
                                        <li class="nav-item">
                                            <a href="VSeguimiento" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Registrar</p>
                                            </a>
                                        </li>
                                    <?php } ?>

                                    <?php if (habilitado(4) != null) {
                                    ?>
                                        <li class="nav-item">
                                            <a href="BusTramite" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Buscar</p>
                                            </a>
                                        </li>
                                    <?php } ?>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" onclick="MRegMovSeguimiento()">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Movimiento</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" onclick="MCargarRegistros()">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Carcar registros</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if (habilitado(14) != null) {
                        ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>
                                        Reporte Control Tarjetas
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="VMarcaciones" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Lista Completa</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php if (habilitado(15) != null) {
                        ?>
                            <li class="nav-header">OTROS</li>
                            <li class="nav-item">
                                <a href="VInforme" class="nav-link">
                                    <i class="nav-icon fas fa-paste"></i>
                                    <p>Informes Reporte</p>
                                </a>
                            </li>
                        <?php } ?>

                        <li class="nav-item">
                            <a href="salir" class="nav-link">
                                <i class="fas fa-door-open nav-icon"></i>
                                <p>Salir</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>