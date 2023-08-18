<?php
require_once "../../controlador/controlherramientasControlador.php";
require_once "../../modelo/controlherramientasModelo.php";

$id = $_GET["id"];

$controlherramientas = ControladorHerramientas::ctrInfoControlHerramienta($id);

?>
<div class="modal-header">
    <h4 class="modal-title">Actualizar Control Herramientas</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormEditControlHerramienta" enctype="multipart/form-data">
    <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">DESCRIPCION</label>
                     <input type="text" class="form-control" id="desControlHerramientas" name="desControlHerramientas" value="<?php echo $controlherramientas["descripcion_controlherramientas"]; ?>">
                     <input type="hidden" name="idControlHerramientas" value="<?php echo $id; ?>">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">NUMERO DE PARTE</label>
                     <input type="text" class="form-control" id="pnControlHerramientas" name="pnControlHerramientas" value="<?php echo $controlherramientas["pn_controlherramientas"]; ?>">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">NUMERO DE PARTE ALT.</label>
                     <input type="text" class="form-control" id="pnaltControlHerramientas" name="pnaltControlHerramientas" value="<?php echo $controlherramientas["pnalt_controlherramientas"]; ?>">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">NUMERO DE SERIE</label>
                     <input type="text" class="form-control" id="     " name="numserieControlHerramientas" value="<?php echo $controlherramientas["numserie_controlherramientas"]; ?>">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">CODIGO</label>
                     <input type="text" class="form-control" id="codigoControlHerramientas" name="codigoControlHerramientas" value="<?php echo $controlherramientas["codigo_controlherramientas"]; ?>">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">MARCA O FABRICANTE</label>
                     <input type="text" class="form-control" id="marcafabriControlHerramientas" name="marcafabriControlHerramientas" value="<?php echo $controlherramientas["marcaofabri_controlherramientas"]; ?>">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">CANTIDAD</label>
                     <input type="text" class="form-control" id="cantidadControlHerramientas" name="cantidadControlHerramientas" value="<?php echo $controlherramientas["cantidad_controlherramientas"]; ?>">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UNIDAD</label>
                     <select name="unidadControlHerramientas" id="unidadControlHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option value="PIEZA" <?php if ($controlherramientas["unidad_controlherramientas"] == "PIEZA") : ?> selected <?php endif; ?>>PIEZA</option>
                         <option value="SET" <?php if ($controlherramientas["unidad_controlherramientas"] == "SET") : ?> selected <?php endif; ?>>SET</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UBICACION</label>
                     <input type="text" class="form-control" id="ubicacionControlHerramientas" name="ubicacionControlHerramientas" value="<?php echo $controlherramientas["ubicacion_controlherramientas"]; ?>">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">FECHA CAL.</label>
                     <input type="date" class="form-control" id="fechacalControlHerramientas" name="fechacalControlHerramientas" value="<?php echo $controlherramientas["fechacali_controlherramientas"]; ?>" onclick="fechSelec()">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">PERIODO CAL. MESES</label>
                     <input type="text" class="form-control" id="periodocalControlHerramientas" name="periodocalControlHerramientas" value="<?php echo $controlherramientas["periodocali_controlherramientas"]; ?>" onkeyup="sumarMeses()" >
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">FECHA VENCIMIENTO</label>
                     <input type="date" class="form-control" id="fechavenciControlHerramientas" name="fechavenciControlHerramientas" value="<?php echo $controlherramientas["fechavenci_controlherramientas"]; ?>" >
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ESTADO</label>
                     <select name="estadoControlHerramientas" id="estadoControlHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option value="CON TIEMPO" <?php if ($controlherramientas["estado_controlherramientas"] == "CON TIEMPO") : ?> selected <?php endif; ?>>CON TIEMPO</option>
                         <option value="VENCIDO" <?php if ($controlherramientas["estado_controlherramientas"] == "VENCIDO") : ?> selected <?php endif; ?>>VENCIDO</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">DIAS DE ALERTA</label>
                     <input type="text" class="form-control" id="diasalertaControlHerramientas" name="diasalertaControlHerramientas" value="<?php echo $controlherramientas["diasalerta_controlherramientas"]; ?>">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ORIGEN DE CALI.</label>
                     <select name="origencaliControlHerramientas" id="origencaliControlHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option value="3M" <?php if ($controlherramientas["origencali_controlherramientas"] == "3M") : ?> selected <?php endif; ?>>3M</option>
                         <option value="INGESTEC" <?php if ($controlherramientas["origencali_controlherramientas"] == "INGESTEC") : ?> selected <?php endif; ?>>INGESTEC</option>
                         <option value="METRIC" <?php if ($controlherramientas["origencali_controlherramientas"] == "METRIC") : ?> selected <?php endif; ?>>METRIC</option>
                         <option value="METROTEST" <?php if ($controlherramientas["origencali_controlherramientas"] == "METROTEST") : ?> selected <?php endif; ?>>METROTEST</option>
                         <option value="S.A.E." <?php if ($controlherramientas["origencali_controlherramientas"] == "S.A.E.") : ?> selected <?php endif; ?>>S.A.E.</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">PROPIEDAD</label>
                     <select name="propiedaControlHerramientas" id="propiedaControlHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option value="LAB" <?php if ($controlherramientas["propiedad_controlherramientas"] == "LAB") : ?> selected <?php endif; ?>>LAB</option>
                         <option value="LATAM" <?php if ($controlherramientas["propiedad_controlherramientas"] == "LATAM") : ?> selected <?php endif; ?>>LATAM</option>
                         <option value="S.A.E." <?php if ($controlherramientas["propiedad_controlherramientas"] == "S.A.E.") : ?> selected <?php endif; ?>>S.A.E.</option>
                         <option value="SAUL. 14-11-22" <?php if ($controlherramientas["propiedad_controlherramientas"] == "SAUL. 14-11-22") : ?> selected <?php endif; ?>>SAUL. 14-11-22</option>
                         <option value="W. SEJAS" <?php if ($controlherramientas["propiedad_controlherramientas"] == "W. SEJAS") : ?> selected <?php endif; ?>>W. SEJAS</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">N° CARPETA</label>
                     <input type="text" class="form-control" id="numcarpetaControlHerramientas" name="numcarpetaControlHerramientas" value="<?php echo $controlherramientas["numcarpeta_controlherramientas"]; ?>">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">N° CERT. LABORATORIO</label>
                     <input type="text" class="form-control" id="numcertiControlHerramientas" name="numcertiControlHerramientas" value="<?php echo $controlherramientas["numcertifi_controlherramientas"]; ?>">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">N° REG. LABORATORIO</label>
                     <input type="text" class="form-control" id="numregistroControlHerramientas" name="numregistroControlHerramientas" value="<?php echo $controlherramientas["numregistro_controlherramientas"]; ?>">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">ALCANCE INSTRUMENTO</label>
                     <input type="text" class="form-control" id="alcaninstrucControlHerramientas" name="alcaninstrucControlHerramientas" value="<?php echo $controlherramientas["alcanceinstru_controlherramientas"]; ?>">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">RESOLUCION INSTRU.</label>
                     <input type="text" class="form-control" id="resinstruControlHerramientas" name="resinstruControlHerramientas" value="<?php echo $controlherramientas["resuinstru_controlherramientas"]; ?>">
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">UBICACION AUTOR.</label>
                     <select name="ubicacionautoControlHerramientas" id="ubicacionautoControlHerramientas" class="form-control">
                         <option>Seleccione</option>
                         <option value="ALMACEN CBBA" <?php if ($controlherramientas["ubicacionautorizada_controlherramientas"] == "ALMACEN CBBA") : ?> selected <?php endif; ?>>ALMACEN CBBA</option>
                         <option value="EN CALIBRACION" <?php if ($controlherramientas["ubicacionautorizada_controlherramientas"] == "EN CALIBRACION") : ?> selected <?php endif; ?>>EN CALIBRACION</option>
                     </select>
                 </div>
             </div>
             <div class="col-sm-2">
                 <div class="form-group">
                     <label for="">DOC. SALIDA</label>
                     <input type="text" class="form-control" id="docsalidaControlHerramientas" name="docsalidaControlHerramientas" value="<?php echo $controlherramientas["docsalida_controlherramientas"]; ?>">
                 </div>
             </div>
             <div class="col-sm-2">

             </div>
         </div>
    </form>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="EditControlHerramientas()">Guardar</button>
</div>