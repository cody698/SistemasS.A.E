<?php
require_once "../../controlador/usuarioControlador.php";
require_once "../../modelo/usuarioModelo.php";
    
$idUsuario = $_GET["idUsuario"];

?>
<div class="modal-header">
    
</div>
<div class="modal-body">
   
</div>

<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="button" class="btn btn-primary" onclick="EliUsuario(<?php echo $idUsuario; ?>)">Confirmar</button>
</div>
