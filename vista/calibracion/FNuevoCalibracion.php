 <div class="modal-header">
     <h4 class="modal-title">Registro Punto de Origen o Calibracion</h4>
     <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="FormRegCalibracion" enctype="multipart/form-data">
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">DESCRIPCION</label>
                     <input type="text" class="form-control" id="desCalibracion" name="desCalibracion" placeholder="Descripcion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">NUMERO DE PARTE</label>
                     <input type="text" class="form-control" id="pnCalibracion" name="pnCalibracion" placeholder="Numero de parte">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">NUMERO DE PARTE ALT.</label>
                     <input type="text" class="form-control" id="pnaltCalibracion" name="pnaltCalibracion" placeholder="Numero de parte ALT.">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">NUMERO DE SERIE</label>
                     <input type="text" class="form-control" id="numserieCalibracion" name="numserieCalibracion" placeholder="Numero de serie">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">CODIGO</label>
                     <input type="text" class="form-control" id="codigoCalibracion" name="codigoCalibracion" placeholder="Codigo">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">MARCA O FABRICANTE</label>
                     <input type="text" class="form-control" id="marcafabriCalibracion" name="marcafabriCalibracion" placeholder="Marca o Fabricante">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">CANTIDAD</label>
                     <input type="text" class="form-control" id="cantidadCalibracion" name="cantidadCalibracion" placeholder="Cantidad">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UNIDAD</label>
                     <select name="unidadCalibracion" id="unidadCalibracion" class="form-control">
                         <option>Seleccione</option>
                         <option>PIEZA</option>
                         <option>SET</option>
                         <option>KIT</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">OBSERVACION</label>
                     <input type="text" class="form-control" id="observacionCalibracion" name="observacionCalibracion" placeholder="Observacion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UBICACION</label>
                     <input type="text" class="form-control" id="ubicacionCalibracion" name="ubicacionCalibracion" placeholder="Ubicacion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">FECHA CAL.</label>
                     <input type="date" class="form-control" id="fechacalCalibracion" name="fechacalCalibracion" placeholder="Fecha Calibracion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">PERIODO CAL. MESES</label>
                     <input type="text" class="form-control" id="periodocalCalibracion" name="periodocalCalibracion" placeholder="Periodo de Cal. Meses">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">FECHA VENCIMIENTO</label>
                     <input type="date" class="form-control" id="fechavenciCalibracion" name="fechavenciCalibracion">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ESTADO</label>
                     <select name="estadoCalibracion" id="estadoCalibracion" class="form-control">
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
                     <input type="text" class="form-control" id="diasalertaCalibracion" name="diasalertaCalibracion" placeholder="Dias de Alerta">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ORIGEN DE CALI.</label>
                     <select name="origencaliCalibracion" id="origencaliCalibracion" class="form-control">
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
                     <select name="propiedaCalibracion" id="propiedaCalibracion" class="form-control">
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
                     <input type="text" class="form-control" id="numcarpetaCalibracion" name="numcarpetaCalibracion" placeholder="N° Carpeta">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">N° CERT. LABORATORIO</label>
                     <input type="text" class="form-control" id="numcertiCalibracion" name="numcertiCalibracion" placeholder="N° Cert. Laboratorio">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">N° REG. LABORATORIO</label>
                     <input type="text" class="form-control" id="numregistroCalibracion" name="numregistroCalibracion" placeholder="N° Reg. Laboratorio">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ALCANCE INSTRUMENTO</label>
                     <input type="text" class="form-control" id="alcaninstrucCalibracion" name="alcaninstrucCalibracion" placeholder="Alcance Instrumento">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">RESOLUCION INSTRU.</label>
                     <input type="text" class="form-control" id="resinstruCalibracion" name="resinstruCalibracion" placeholder="Resolucion Instrumento">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UBICACION AUTOR.</label>
                     <select name="ubicacionautoCalibracion" id="ubicacionautoCalibracion" class="form-control">
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
                     <input type="text" class="form-control" id="docsalidaCalibracion" name="docsalidaCalibracion" placeholder="Doc. Salida">
                 </div>
             </div>
         </div>
     </form>

 </div>
 <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
     <button type="button" class="btn btn-primary" onclick="RegCalibracion()">Guardar</button>
 </div>