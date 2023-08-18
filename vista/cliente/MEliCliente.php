<?php
require_once "../../controlador/clienteControlador.php";
require_once "../../modelo/clienteModelo.php";
    
$idCliente = $_GET["idCliente"];

?>
<div class="modal-header">
    <h4 class="modal-title">Eliminar Cliente</h4>
</div>
<div class="modal-body">
   <h2 class="text-danger">Estas seguro de eliminar este Cliente?</h2>
</div>

<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="button" class="btn btn-primary" onclick="EliCliente(<?php echo $idCliente; ?>)">Confirmar</button>
</div>
