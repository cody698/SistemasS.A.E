 <div class="modal-header">
     <h4 class="modal-title">Registro Equipos y Herramientas Dados De Baja</h4>
     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="FormRegDBaja" enctype="multipart/form-data">
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">DESCRIPCION</label>
                     <input type="text" class="form-control" id="desDBaja" name="desDBaja" placeholder="Descripcion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">NUMERO DE PARTE</label>
                     <input type="text" class="form-control" id="pnDBaja" name="pnDBaja" placeholder="Numero de parte">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">NUMERO DE PARTE ALT.</label>
                     <input type="text" class="form-control" id="pnaltDBaja" name="pnaltDBaja" placeholder="Numero de parte ALT.">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">NUMERO DE SERIE</label>
                     <input type="text" class="form-control" id="numserieDBaja" name="numserieDBaja" placeholder="Numero de serie">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">CODIGO</label>
                     <input type="text" class="form-control" id="codigoDBaja" name="codigoDBaja" placeholder="Codigo">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">MARCA O FABRICANTE</label>
                     <input type="text" class="form-control" id="marcafabriDBaja" name="marcafabriDBaja" placeholder="Marca o Fabricante">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">CANTIDAD</label>
                     <input type="text" class="form-control" id="cantidadDBaja" name="cantidadDBaja" placeholder="Cantidad">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UNIDAD</label>
                     <select name="unidadDBaja" id="unidadDBaja" class="form-control">
                         <option>Seleccione</option>
                         <option>PIEZA</option>
                         <option>SET</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">OBSERVACION</label>
                     <input type="text" class="form-control" id="observacionDBaja" name="observacionDBaja" placeholder="Observacion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UBICACION</label>
                     <input type="text" class="form-control" id="ubicacionDBaja" name="ubicacionDBaja" placeholder="Ubicacion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">FECHA CAL.</label>
                     <input type="date" class="form-control" id="fechacalDBaja" name="fechacalDBaja" placeholder="Fecha DBaja">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">PERIODO CAL. MESES</label>
                     <input type="text" class="form-control" id="periodocalDBaja" name="periodocalDBaja" placeholder="Periodo de Cal. Meses">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">FECHA VENCIMIENTO</label>
                     <input type="date" class="form-control" id="fechavenciDBaja" name="fechavenciDBaja">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ESTADO</label>
                     <select name="estadoDBaja" id="estadoDBaja" class="form-control">
                         <option>Seleccione</option>
                         <option>CON TIEMPO</option>
                         <option>VENCIDO</option>
                         <option>N/A</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">DIAS DE ALERTA</label>
                     <input type="text" class="form-control" id="diasalertaDBaja" name="diasalertaDBaja" placeholder="Dias de Alerta">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ORIGEN DE CALI.</label>
                     <select name="origencaliDBaja" id="origencaliDBaja" class="form-control">
                         <option>Seleccione</option>
                         <option>3M</option>
                         <option>INGESTEC</option>
                         <option>METRIC</option>
                         <option>METROTEST</option>
                         <option>S.A.E.</option>
                         <option>CAMPUS</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">PROPIEDAD</label>
                     <select name="propiedaDBaja" id="propiedaDBaja" class="form-control">
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
                     <input type="text" class="form-control" id="numcarpetaDBaja" name="numcarpetaDBaja" placeholder="N° Carpeta">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">N° CERT. LABORATORIO</label>
                     <input type="text" class="form-control" id="numcertiDBaja" name="numcertiDBaja" placeholder="N° Cert. Laboratorio">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">N° REG. LABORATORIO</label>
                     <input type="text" class="form-control" id="numregistroDBaja" name="numregistroDBaja" placeholder="N° Reg. Laboratorio">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ALCANCE INSTRUMENTO</label>
                     <input type="text" class="form-control" id="alcaninstrucDBaja" name="alcaninstrucDBaja" placeholder="Alcance Instrumento">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">RESOLUCION INSTRU.</label>
                     <input type="text" class="form-control" id="resinstruDBaja" name="resinstruDBaja" placeholder="Resolucion Instrumento">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UBICACION AUTOR.</label>
                     <select name="ubicacionautoDBaja" id="ubicacionautoDBaja" class="form-control">
                         <option>Seleccione</option>
                         <option>ALMACEN CBBA</option>
                         <option>EN CALIBRACION</option>
                         <option>N/A</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">DOC. SALIDA</label>
                     <input type="text" class="form-control" id="docsalidaDBaja" name="docsalidaDBaja" placeholder="Doc. Salida">
                 </div>
             </div>
         </div>
     </form>

 </div>
 <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
     <button type="button" class="btn btn-primary" onclick="RegDBaja()">Guardar</button>
 </div>