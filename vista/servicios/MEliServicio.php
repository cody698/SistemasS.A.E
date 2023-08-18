<?php
require_once "../../controlador/servicioControlador.php";
require_once "../../modelo/servicioModelo.php";
    
$idServicio = $_GET["idServicio"];

?>
<div class="modal-header">
    <h4 class="modal-title">Eliminar Servicio</h4>
</div>
<div class="modal-body">
   <h2 class="text-danger">Estas seguro de eliminar este Servicio?</h2>
</div>

<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="button" class="btn btn-primary" onclick="EliServicio(<?php echo $idServicio; ?>)">Confirmar</button>
</div>
