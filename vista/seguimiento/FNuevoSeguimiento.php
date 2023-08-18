<div class="modal-header">
     <h4 class="modal-title">Registrar Tarjetas Control</h4>
     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="FormRegSeguimiento" enctype="multipart/form-data">
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Cliente</label>
                     <input type="text" class="form-control" id="nomSeguimiento" name="nomSeguimiento" placeholder="Nombre Cliente">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Matricula Aeronave</label>
                     <input type="text" class="form-control" id="matriculaSeguimiento" name="matriculaSeguimiento" placeholder="Matricula">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Descripcion</label>
                     <input type="text" class="form-control" id="descripcionSeguimiento" name="descripcionSeguimiento" placeholder="Descripcion">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Observaciones</label>
                     <input type="text" class="form-control" id="observacionSeguimiento" name="observacionSeguimiento" placeholder="Observaciones">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Tipo Tarjeta</label>
                     <input type="text" class="form-control" id="tipoSeguimiento" name="tipoSeguimiento" placeholder="Tipo Tarjeta">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Codigo Tarjeta</label>
                     <input type="text" class="form-control" id="codigoSeguimiento" name="codigoSeguimiento" placeholder="Codigo">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Horas Minimo Tarjeta</label>
                     <input type="time" class="form-control" id="minSeguimiento" name="minSeguimiento">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Horas Maximo Tarjeta</label>
                     <input type="time" class="form-control" id="maxSeguimiento" name="maxSeguimiento">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Ubicación</label>
                     <input type="text" class="form-control" id="ubicacionSeguimiento" name="ubicacionSeguimiento" placeholder="Ubicacion">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Estados de Tarjeta</label>
                     <select name="estadosSeguimiento" id="estadosSeguimiento" class="form-control">
                         <option>Seleccione</option>
                         <option>EN PROCESO</option>
                         <option>LIMPIEZA</option>
                         <option>PARA CIERRE DE AREA</option>
                         <option>PARA INSPECCION</option>
                         <option>NDT</option>
                         <option>PARA LUBRICACION</option>
                         <option>PENDIENTE COMPONENTE</option>
                         <option>PENDIENTE MATERIAL</option>
                         <option>PRUEBAS FUN/OP</option>
                         <option>SIN EMPEZAR</option>
                         <option>VERIFICACION FINAL</option>
                         <option>TARJETA CANCELADA</option>
                         <option>POR INSTALACION<< /option>
                         <option>TERMINADO</option>
                         <option>N/A</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Areas</label>
                     <select name="areaSeguimiento" id="areaSeguimiento" class="form-control">
                         <option>Seleccione</option>
                         <option>HYD</option>
                         <option>MOT</option>
                         <option>BUZ</option>
                         <option>ALAS</option>
                         <option>AV</option>
                         <option>PINTURAS</option>
                         <option>EMPE</option>
                         <option>CAB</option>
                         <option>FUS</option>
                         <option>OTROS</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Numeracion de la Tarjeta</label>
                     <input type="text" class="form-control" id="numeracionSeguimiento" name="numeracionSeguimiento" placeholder="Numeracion de la Tarjeta">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Foto</label>
                     <input type="file" class="form-control" id="imgUsuario" name="imgUsuario">
                 </div>
             </div>
         </div>
     </form>

 </div>
 <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
     <button type="button" class="btn btn-primary" onclick="RegSeguimiento()">Guardar</button>
 </div>