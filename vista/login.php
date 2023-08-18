          <body class="hold-transition login-page">
              <div id="back"></div>
              <!-- /.login-logo -->
              <div class="login-box">
                  <!-- /.login-logo -->
                  <div class="card" style="border-radius: 20px; background-color:#ffffff00; box-shadow: 10px 5px 5px #000000a6;">
                      <div class="card-body login-card-body" style="border-radius: 20px; background-color:#ffffffba;">
                          <div class="login-logo">
                              <img src="assest/imagenes/logo-sae-servicios-aeronauticos-especializados-300x172.png" style="width:150px;">
                          </div>
                          <div class="login-logo">
                              <a href="CTramite"><b>Sistema Control Tarjetas<b></a>
                          </div>
                          <form action="" method="post">
                              <div class="input-group mb-3">
                                  <input type="email" class="form-control" placeholder="Usuario" name="emailUsuario">
                                  <div class="input-group-append">
                                      <div class="input-group-text">
                                          <span class="fas fa-user"></span>
                                      </div>
                                  </div>
                              </div>
                              <div class="input-group mb-3">
                                  <input type="password" class="form-control" placeholder="Contraseña" name="passUsuario">
                                  <div class="input-group-append">
                                      <div class="input-group-text">
                                          <span class="fas fa-lock"></span>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-12">
                                      <button type="submit" class="btn btn-success btn-block">Iniciar Sesión</button>
                                  </div>
                                  <!-- /.col -->
                              </div>

                              <?php
                                $login = new ControladorUsuario();
                                $login->ctrIngresoUsuario();
                                ?>
                          </form>

                          <p class="mb-1">
                              <a href="forgot-password.html">Recuperar Contraseña</a>
                          </p>
                          <p class="mb-0">
                              <a href="register.html" class="text-center">Registrar nuevo miembro</a>
                          </p>
                      </div>
                      <!-- /.login-card-body -->
                  </div>
              </div>
              <!-- /.login-box -->

              <!-- jQuery -->
              <script src="assest/plugins/jquery/jquery.min.js"></script>
              <!-- Bootstrap 4 -->
              <script src="assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
              <!-- AdminLTE App -->
              <script src="assest/dist/js/adminlte.min.js"></script>
          </body>

          </html>