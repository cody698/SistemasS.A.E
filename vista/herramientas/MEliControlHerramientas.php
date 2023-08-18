<?php
require_once "../../controlador/herramientasControlador.php";
require_once "../../modelo/herramientasModelo.php";
    
$idHerramientas = $_GET["idHerramientas"];

?>
<div class="modal-header">
    <h4 class="modal-title">Eliminar Herramientas</h4>
</div>
<div class="modal-body">
   <h2 class="text-danger">Estas seguro de eliminar este Herramienta?</h2>
</div>

<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="button" class="btn btn-primary" onclick="EliHerramientas(<?php echo $idHerramientas; ?>)">Confirmar</button>
</div>
