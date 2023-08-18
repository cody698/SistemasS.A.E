 <div class="modal-header">
     <h4 class="modal-title">Registrar Paquete Servicios</h4>
     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="FormRegServicio" enctype="multipart/form-data">
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Cliente</label>
                     <input type="text" class="form-control" id="clienteServicio" name="clienteServicio" placeholder="Nombre Cliente">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Matricula Aeronave</label>
                     <input type="text" class="form-control" id="matriculaServicio" name="matriculaServicio" placeholder="Matricula">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Observaciones</label>
                     <input type="text" class="form-control" id="observacionServicio" name="observacionServicio" placeholder="Observaciones">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">Horas Minimo</label>
                     <input type="number" class="form-control" id="horasminServicio" name="horasminServicio">
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">Horas Maximo</label>
                     <input type="number" class="form-control" id="horasmaxServicio" name="horasmaxServicio">
                 </div>
             </div>
         </div>
     </form>

 </div>
 <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
     <button type="button" class="btn btn-primary" onclick="RegServicio()">Guardar</button>
 </div>