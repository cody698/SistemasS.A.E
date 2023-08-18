               <div class="modal-header">
                   <h4 class="modal-title">Cargar Registros en Lote</h4>
                   <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">

                   <form enctype="multipart/form-data" id="FCargarRegistrosCalibracion">
                       <div class="form-group">
                           <label for="exampleInputFile">File input</label>
                           <div class="input-group">
                               <div class="custom-file">
                                   <input type="file" class="custom-file-input" id="dataCalibraciones" name="dataCalibraciones">
                                   <label class="custom-file-label" for="dataCalibraciones">Elegir archivo (.CSV)</label>
                               </div>
                               <div class="input-group-append">
                                   <span class="input-group-text">Upload</span>
                               </div>
                           </div>
                       </div>

                   </form>

               </div>

               <div class="modal-footer">
                   <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                   <button type="submit" class="btn btn-primary" onclick="CargarRegistrosCalibracion()">Guardar</button>
               </div>