 <div class="modal-header">
     <h4 class="modal-title">Registrar Usuario</h4>
     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="FormRegUsuario" enctype="multipart/form-data">
         <div class="row">
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">Nombre de Usuario</label>
                     <input type="text" class="form-control" id="nomUsuario" name="nomUsuario">
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">E-mail de Usuario</label>
                     <input type="email" class="form-control" id="emailUsuario" name="emailUsuario">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">Password de Usuario</label>
                     <input type="password" class="form-control" id="passUsuario" name="passUsuario">
                     <p class="text-danger" id="error-pass"></p>
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">Repetir Password</label>
                     <input type="password" class="form-control" id="passUsuario2" name="passUsuario2">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">Foto de Usuario</label>
                     <input type="file" class="form-control" id="imgUsuario" name="imgUsuario">
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">Codigo Usuario</label>
                     <input type="text" class="form-control" id="codUsuario" name="codUsuario">
                 </div>
             </div>
         </div>
     </form>

 </div>
 <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
     <button type="button" class="btn btn-primary" onclick="RegUsuario()">Guardar</button>
 </div>
