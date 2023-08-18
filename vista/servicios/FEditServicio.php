<?php
require_once "../../controlador/servicioControlador.php";
require_once "../../modelo/servicioModelo.php";

$id=$_GET["id"];

$servicio=ControladorServicio::ctrInfoServicio($id);

?>


<div class="modal-header">
    <h4 class="modal-title">Actualizar Paquete Servicio</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormEditServicio" enctype="multipart/form-data">
    <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Cliente</label>
                     <input type="text" class="form-control" id="clienteServicio" name="clienteServicio" value="<?php echo $servicio["cliente"];?>">
                     <input type="hidden" name="idServicio" value="<?php echo $id;?>">
                    </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Matricula Aeronave</label>
                     <input type="text" class="form-control" id="matriculaServicio" name="matriculaServicio" value="<?php echo $servicio["matricula"];?>">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Observaciones</label>
                     <input type="text" class="form-control" id="observacionServicio" name="observacionServicio" value="<?php echo $servicio["observacion_servicio"];?>">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Horas Minimo</label>
                     <input type="number" class="form-control" id="horasminServicio" name="horasminServicio" value="<?php echo $servicio["horasminimo"];?>">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">Horas Maximo</label>
                     <input type="number" class="form-control" id="horasmaxServicio" name="horasmaxServicio" value="<?php echo $servicio["horasmaximo"];?>">
                 </div>
             </div>
             <div class="col-sm-4">
                <div class="form-group">
                    <label for="">Estado</label>
                    <select name="estadoServicio" id="estadoServicio" class="form-control">
                        <option value="1" <?php if($servicio["estado"]=="1"):?> selected <?php endif;?>>Activo</option>
                        <option value="0" <?php if($servicio["estado"]=="0"):?> selected <?php endif;?>>Inactivo</option>
                    </select>
                </div>
            </div>
         </div>
    </form>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="EditServicio()">Guardar</button>
</div>
