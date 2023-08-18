<?php
require_once "../../controlador/carpetaControlador.php";
require_once "../../modelo/carpetaModelo.php";
    
$idCarpeta = $_GET["idCarpeta"];

?>
<div class="modal-header">
    <h4 class="modal-title">Eliminar Carpeta</h4>
</div>
<div class="modal-body">
   <h2 class="text-danger">Estas seguro de eliminar este Carpeta?</h2>
</div>

<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="button" class="btn btn-primary" onclick="EliCarpeta(<?php echo $idCarpeta; ?>)">Confirmar</button>
</div>