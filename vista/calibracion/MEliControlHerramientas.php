<?php
require_once "../../controlador/materialControlador.php";
require_once "../../modelo/materialModelo.php";
    
$idMaterial = $_GET["idMaterial"];

?>
<div class="modal-header">
    <h4 class="modal-title">Eliminar Material</h4>
</div>
<div class="modal-body">
   <h2 class="text-danger">Estas seguro de eliminar este Material?</h2>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
    <button type="button" class="btn btn-primary" onclick="EliMaterial(<?php echo $idMaterial; ?>)">Confirmar</button>
</div>
