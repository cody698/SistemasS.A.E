<div class="modal-header">
    <h4 class="modal-title">Datos Adicionales del Informe</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <!-- <form id="FormDatosInforme" method="POST" action="vista/reportes/repHerramientaSelec.php" target="_blank" onsubmit="return validarFormulario()"> -->
    <form id="FormDatosInforme" method="POST" onsubmit="return validarFormulario()">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">FECHA DE INFORME</label>
                    <input type="date" class="form-control" id="fechaInforme" name="fechaInforme" placeholder="Fecha del Informe">
                    <input type="hidden" class="form-control" id="seleccionados" name="seleccionados" value="">
                    <span id="mensajeFecha"></span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">NUMERO DE INFORME</label>
                    <input type="text" class="form-control" id="numInforme" name="numInforme" placeholder="Número de Informe">
                    <span id="mensajeInforme"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">RESPONSABLE DE ALMACÉN</label>
                    <input type="text" class="form-control" id="respAlmacen" name="respAlmacen" placeholder="Responsable de Almacén">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">REPRESENTANTE TÉCNICO</label>
                    <input type="text" class="form-control" id="repTecnico" name="repTecnico" placeholder="Representante Técnico">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">ENCARGADO DEL INFORME</label>
                    <input type="text" class="form-control" id="encargadoInforme" name="encargadoInforme" placeholder="Encargado de elabpración del informe">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">ASUNTO DE INFORME</label>
                    <input type="text" class="form-control" id="asuntoInforme" name="asuntoInforme" placeholder="Asunto del Informe">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="">DESCRIPCIÓN DEL INFORME</label>
                    <textarea class="form-control" name="descInforme" id="descInforme" cols="30" rows="5"></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" onclick="RegDatosInforme()">Guardar</button>
        </div>
    </form>
</div>