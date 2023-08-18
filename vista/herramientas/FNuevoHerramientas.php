 <div class="modal-header">
     <h4 class="modal-title">Registro Comprobante Herramienta Recibida/Entregada</h4>
     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="FormRegHerramientas" enctype="multipart/form-data">
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">N°</label>
                     <input type="text" class="form-control" id="nHerramientas" name="nHerramientas" placeholder="N°">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">DESCRIPCION</label>
                     <input type="text" class="form-control" id="desHerramientas" name="desHerramientas" placeholder="Descripcion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">P/N</label>
                     <input type="text" class="form-control" id="pnHerramientas" name="pnHerramientas" placeholder="Numero de parte">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">P/N ALT.</label>
                     <input type="text" class="form-control" id="pnaltHerramientas" name="pnaltHerramientas" placeholder="Numero de parte ALT.">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">S/N</label>
                     <input type="text" class="form-control" id="numserieHerramientas" name="numserieHerramientas" placeholder="Numero de serie">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">CODIGO</label>
                     <input type="text" class="form-control" id="codigoHerramientas" name="codigoHerramientas" placeholder="Codigo">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">MARCA O FABRICANTE</label>
                     <input type="text" class="form-control" id="marcafabriHerramientas" name="marcafabriHerramientas" placeholder="Marca o Fabricante">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">CANTIDAD</label>
                     <input type="text" class="form-control" id="cantidadHerramientas" name="cantidadHerramientas" placeholder="Cantidad">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UNIDAD</label>
                     <select name="unidadHerramientas" id="unidadHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option>PIEZA</option>
                         <option>PIEZAS</option>
                         <option>ROLLO</option>
                         <option>ASSY</option>
                         <option>METROS</option>
                         <option>SET</option>
                         <option>PAR</option>
                         <option>KIT</option>
                         <option>N/A</option>
                         <option>CM</option>
                         <option>EA</option>
                         <option>M</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UBICACION</label>
                     <input type="text" class="form-control" id="ubicacionHerramientas" name="ubicacionHerramientas" placeholder="Ubicacion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">OBSERVACION</label>
                     <input type="text" class="form-control" id="observacionHerramientas" name="observacionHerramientas" placeholder="Observacion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">OBS (REP.) DOC.</label>
                     <select name="obsrepdocHerramientas" id="obsrepdocHerramientas" class="form-control">
                         <option>SELECCIONE OBS</option>
                         <option>-</option>
                         <option>CON DOC.</option>
                         <option>N/A</option>
                     </select>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">N° CARPETA</label>
                     <input type="text" class="form-control" id="numcarpetaHerramientas" name="numcarpetaHerramientas" placeholder="N° Carpeta">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">EQUIVALENCIA TECNICA</label>
                     <select name="equivalenciatecnicaHerramientas" id="equivalenciatecnicaHerramientas" class="form-control">
                         <option>SELECCIONE EQUIVALENCIA TECNICA</option>
                         <option>CONFECCIONADO</option>
                         <option>ORIGINAL</option>
                         <option>SAE412-6,SAE412-5,SAE412-3</option>
                         <option>SAE413-4,SAE413-3,SAE413-2</option>
                         <option>SI TIENE</option>
                         <option>NO TIENE</option>
                         <option>N/A</option>
                         <option>-</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">REF. DE MANUAL</label>
                     <select name="hojamanualHerramientas" id="hojamanualHerramientas" class="form-control">
                         <option>SELECCIONE REF.</option>
                         <option>NO TIENE</option>
                         <option>NO</option>
                         <option>OK</option>
                         <option>N/A</option>
                         <option>-</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">IDENTIFICACION</label>
                     <select name="identificacionHerramientas" id="identificacionHerramientas" class="form-control">
                         <option>SELECCIONE IDENTIFICACION</option>
                         <option>NO</option>
                         <option>SI</option>
                         <option>-</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ULTIMO INVENTARIO</label>
                     <select name="ultimoinventarioHerramientas" id="ultimoinventarioHerramientas" class="form-control">
                         <option>SELECCIONE ULTIMO INVENTARIO</option>
                         <option>NO</option>
                         <option>SI</option>
                         <option>N/A</option>
                         <option>-</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">AERONAVE</label>
                     <input type="text" class="form-control" id="aeronaveHerramientas" name="aeronaveHerramientas" placeholder="Aeronave">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ATA</label>
                     <input type="text" class="form-control" id="ataHerramientas" name="ataHerramientas" placeholder="ATA">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">RANGO MEDIDA</label>
                     <input type="text" class="form-control" id="rangomedidaHerramientas" name="rangomedidaHerramientas" placeholder="Rango Medida">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">INVENTARIO</label>
                     <input type="text" class="form-control" id="inventarioHerramientas" name="inventarioHerramientas" placeholder="Inventario">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ESTANTE</label>
                     <input type="text" class="form-control" id="estanteHerramientas" name="estanteHerramientas" placeholder="Estante">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">SECCION</label>
                     <input type="text" class="form-control" id="seccionHerramientas" name="seccionHerramientas" placeholder="Seccion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">PERMANT</label>
                     <input type="text" class="form-control" id="permantHerramientas" name="permantHerramientas" placeholder="PerMant">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">PERCAL</label>
                     <input type="text" class="form-control" id="percalHerramientas" name="percalHerramientas" placeholder="PerCal">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">TALLER</label>
                     <select name="tallerHerramientas" id="tallerHerramientas" class="form-control">
                         <option>SELECCIONE TALLER</option>
                         <option>MECANICAS</option>
                         <option>MISCELANEOS</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">STATUS</label>
                     <input type="text" class="form-control" id="statusHerramientas" name="statusHerramientas" placeholder="Status">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">NOMBRE EMPLEADO</label>
                     <input type="text" class="form-control" id="nomempleadoHerramientas" name="nomempleadoHerramientas" placeholder="Nombre Empleado">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">CODIGO EMPLEADO</label>
                     <input type="text" class="form-control" id="codempleadoHerramientas" name="codempleadoHerramientas" placeholder="Codigo Empleado">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">FECHA PRESTAMO</label>
                     <input type="date" class="form-control" id="fechaprestHerramientas" name="fechaprestHerramientas">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">FECHA DEVEVOLUCION</label>
                     <input type="date" class="form-control" id="fechadevHerramientas" name="fechadevHerramientas">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ENCARGADO</label>
                     <input type="text" class="form-control" id="encargadoHerramientas" name="encargadoHerramientas" placeholder="Encargado">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">FLOTA</label>
                     <input type="text" class="form-control" id="flotaHerramientas" name="flotaHerramientas" placeholder="Flota">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">USO</label>
                     <input type="text" class="form-control" id="usoHerramientas" name="usoHerramientas" placeholder="Uso">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">DOCMANT</label>
                     <input type="text" class="form-control" id="docmantHerramientas" name="docmantHerramientas" placeholder="DocMant">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">DOC</label>
                     <select name="docHerramientas" id="docHerramientas" class="form-control">
                         <option>SELECCIONE DOC</option>
                         <option>CON DOC.</option>
                         <option>N/A</option>
                     </select>
                 </div>
             </div>
         </div>
         <div class="row">
         <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">STICKER</label>
                     <select name="stickerHerramientas" id="stickerHerramientas" class="form-control">
                         <option>SELECCIONE STICKER</option>
                         <option>NO</option>
                         <option>SI</option>
                         <option>N/A</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">CAL. ESPECIALIZADA</label>
                     <select name="calibradaespecializadaHerramientas" id="calibradaespecializadaHerramientas" class="form-control">
                         <option>SELECCIONE CALIBRADAS ESPECIALIZADA</option>
                         <option>CALIBRADA</option>
                         <option>ESPECIALIZADA</option>
                         <option>ESPECIALIZADA NO CAL. REQUIRED</option>
                         <option>ESTANDAR</option>
                         <option>N/A</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ESTADO HERRAMIEN.</label>
                     <select name="estadoHerramientas" id="estadoHerramientas" class="form-control">
                         <option>SELECCIONE ESTADO HERRAMIENTAS</option>
                         <option>OK</option>
                         <option>BIEN</option>
                         <option>EN MAL ESTADO</option>
                         <option>FALTA GLAS PAINT & HOSE</option>
                         <option>N/A</option>
                         <option>NUEVO</option>
                         <option>NUEVO OK</option>
                         <option>OK SEMINUEVO</option>
                         <option>N/A</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">REQUIERE INSP. PERIO.</label>
                     <select name="requiereinspeperiodicaHerramientas" id="requiereinspeperiodicaHerramientas" class="form-control">
                         <option>SELECCIONE REQUIERE INSPECCION PERIODICA</option>
                         <option>INSPECCION PERIODICA</option>
                         <option>N/A</option>
                         <option>SI</option>
                         <option>N/A</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UBICACION ACTUAL</label>
                     <input type="text" class="form-control" id="ubicacionactualHerramientas" name="ubicacionactualHerramientas" placeholder="Ubicacion Actual">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">OBSERVACIONES DEL</label>
                     <input type="text" class="form-control" id="observacionesdelHerramientas" name="observacionesdelHerramientas" placeholder="Observaciones Del">
                 </div>
             </div>
         </div>
         <div class="row">
         <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Imagenes</label>
                     <input type="file" class="form-control" id="imgHerramientas" name="imgHerramientas">
                 </div>
             </div>
         </div>
     </form>

 </div>
 <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
     <button type="button" class="btn btn-primary" onclick="RegHerramientas()">Guardar</button>
 </div>