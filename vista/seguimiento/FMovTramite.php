<?php
require_once "../../controlador/seguimientoControlador.php";
require_once "../../modelo/seguimientoModelo.php";

?>
   <div class="modal-header">
    <h4 class="modal-title">Registrar movimiento a la tarjeta</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FRegMovSeguimiento">

        <div class="form-group">
            <label for="">Codigo de Tarjeta</label>
            <select class="form-control select2bs4" name="codSeguimiento" id="codSeguimiento">
                <option value=""></option>
                <?php
                    $tarjeta = ControladorSeguimiento::ctrInfoSeguimientos();
                    foreach ($tarjeta as $value) {
                    ?>
                <option value="<?php echo $value["codigo_seguimiento"]; ?>"><?php echo $value["codigo_seguimiento"]; ?></option>
                <?php
                    }
                    ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Estado</label>
            <select name="estadoSeguimiento" id="estadoSeguimiento" class="form-control">
                <option>Seleccione</option>
                <option>Sin Empezar</option>
                <option>Proceso</option>
                <option>Pendiente Mat</option>
                <option>Limpieza</option>
                <option>Observaciones</option>
                <option>Finalizado</option>
            </select>
        </div>


        <div class="form-group">
            <label for="">Descripción</label>
            <textarea id="descripcionSeguimiento" name="descripcionSeguimiento" rows="5" class="form-control"></textarea>
        </div>

    </form>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="RegMovSeguimiento()">Guardar</button>
</div>

<script>

     $('.select2bs4').select2({
        theme: 'bootstrap4'
    })
</script>
