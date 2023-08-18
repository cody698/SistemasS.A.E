 <div class="modal-header">
     <h4 class="modal-title">Registro Control Herramientas</h4>
     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="FormRegControlHerramientas" enctype="multipart/form-data">
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">DESCRIPCION</label>
                     <input type="text" class="form-control" id="desControlHerramientas" name="desControlHerramientas" placeholder="Descripcion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">NUMERO DE PARTE</label>
                     <input type="text" class="form-control" id="pnControlHerramientas" name="pnControlHerramientas" placeholder="Numero de parte">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">NUMERO DE PARTE ALT.</label>
                     <input type="text" class="form-control" id="pnaltControlHerramientas" name="pnaltControlHerramientas" placeholder="Numero de parte ALT.">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">NUMERO DE SERIE</label>
                     <input type="text" class="form-control" id="     " name="numserieControlHerramientas" placeholder="Numero de serie">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">CODIGO</label>
                     <input type="text" class="form-control" id="codigoControlHerramientas" name="codigoControlHerramientas" placeholder="Codigo">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">MARCA O FABRICANTE</label>
                     <input type="text" class="form-control" id="marcafabriControlHerramientas" name="marcafabriControlHerramientas" placeholder="Marca o Fabricante">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">CANTIDAD</label>
                     <input type="text" class="form-control" id="cantidadControlHerramientas" name="cantidadControlHerramientas" placeholder="Cantidad">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UNIDAD</label>
                     <select name="unidadControlHerramientas" id="unidadControlHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option>PIEZA</option>
                         <option>SET</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UBICACION</label>
                     <input type="text" class="form-control" id="ubicacionControlHerramientas" name="ubicacionControlHerramientas" placeholder="Ubicacion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">FECHA CAL.</label>
                     <input type="date" class="form-control" id="fechacalControlHerramientas" name="fechacalControlHerramientas" placeholder="Fecha Calibracion" onclick="fechSelec()">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">PERIODO CAL. MESES</label>
                     <input type="text" class="form-control" id="periodocalControlHerramientas" name="periodocalControlHerramientas" placeholder="Periodo de Cal. Meses" onkeyup="sumarMeses()" readonly>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">FECHA VENCIMIENTO</label>
                     <input type="date" class="form-control" id="fechavenciControlHerramientas" name="fechavenciControlHerramientas">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ESTADO</label>
                     <select name="estadoControlHerramientas" id="estadoControlHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option>CON TIEMPO</option>
                         <option>VENCIDO</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">DIAS DE ALERTA</label>
                     <input type="text" class="form-control" id="diasalertaControlHerramientas" name="diasalertaControlHerramientas" placeholder="Dias de Alerta">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ORIGEN DE CALI.</label>
                     <select name="origencaliControlHerramientas" id="origencaliControlHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option>3M</option>
                         <option>INGESTEC</option>
                         <option>METRIC</option>
                         <option>METROTEST</option>
                         <option>S.A.E.</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">PROPIEDAD</label>
                     <select name="propiedaControlHerramientas" id="propiedaControlHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option>LAB</option>
                         <option>LATAM</option>
                         <option>S.A.E.</option>
                         <option>SAUL. 14-11-22</option>
                         <option>W. SEJAS</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">N° CARPETA</label>
                     <input type="text" class="form-control" id="numcarpetaControlHerramientas" name="numcarpetaControlHerramientas" placeholder="N° Carpeta">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">N° CERT. LABORATORIO</label>
                     <input type="text" class="form-control" id="numcertiControlHerramientas" name="numcertiControlHerramientas" placeholder="N° Cert. Laboratorio">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">N° REG. LABORATORIO</label>
                     <input type="text" class="form-control" id="numregistroControlHerramientas" name="numregistroControlHerramientas" placeholder="N° Reg. Laboratorio">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ALCANCE INSTRUMENTO</label>
                     <input type="text" class="form-control" id="alcaninstrucControlHerramientas" name="alcaninstrucControlHerramientas" placeholder="Alcance Instrumento">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">RESOLUCION INSTRU.</label>
                     <input type="text" class="form-control" id="resinstruControlHerramientas" name="resinstruControlHerramientas" placeholder="Resolucion Instrumento">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UBICACION AUTOR.</label>
                     <select name="ubicacionautoControlHerramientas" id="ubicacionautoControlHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option>ALMACEN CBBA</option>
                         <option>EN CALIBRACION</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">DOC. SALIDA</label>
                     <input type="text" class="form-control" id="docsalidaControlHerramientas" name="docsalidaControlHerramientas" placeholder="Doc. Salida">
                 </div>
             </div>
             <div class="col-sm-2">

             </div>
         </div>
     </form>

 </div>
 <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
     <button type="button" class="btn btn-primary" onclick="RegControlHerramientas()">Guardar</button>
 </div>