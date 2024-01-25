    
    <div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="modalUpdateLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalUpdateLabel">Actualizar perfil</h5>
        </div>
        <div class="modal-body" id="modal-body-detail">
            <form id="formUpdate" novalidate>
                <div class="row col-12 mb-3">
                    <label class="form-label font-weight-bold">Usuario:</label>
                    <input type='text 'class="form-control" id='input-usuario' required>
                </div>
                <div class="row col-12 mb-3">
                    <label class="form-label font-weight-bold">Nombre/s:</label>
                    <input type='text 'class="form-control" id='input-nombre' required>
                </div>
                <div class="row col-12 mb-3">
                    <label class="form-label font-weight-bold">Apellidos:</label>
                    <input type='text 'class="form-control" id='input-apellidos' required>
                </div>
                <div class="row col-12 mb-3">
                    <label class="form-label font-weight-bold">Sexo:</label>
                    <select class="form-control" id='input-sexo'>
                    <?= printSexOptions($opciones_sexos); ?>
                    </select>
                </div>
                <div class="row col-12 mb-3">
                    <label class="form-label font-weight-bold">Correo:</label>
                    <input type='email' class="form-control" id='input-correo' required>
                </div>
                <div class="row col-12 mb-3">
                    <label class="form-label font-weight-bold">Télefono:</label>
                    <input type='text' class="form-control" max="10" id='input-telefono' required>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <label class="form-label font-weight-bold">Código postal:</label>
                        <input class="form-control" id='input-codigo-postal' required>
                    </div>
                    <div class="col-8">
                        <label class="form-label font-weight-bold">Colonia:</label>
                        <input class="form-control" id='input-colonia' required>
                    </div>
                    <div class="col-12">
                        <label class="form-label font-weight-bold">Municipio:</label>
                        <input class="form-control" id='input-municipio' required>
                    </div>
                    <div class="col-8">
                        <label class="form-label font-weight-bold">Estado:</label>
                        <input class="form-control" id='input-estado' required>
                    </div>
                </div>
                <div class="row col-12 mb-3">
                    <label class="form-label font-weight-bold">Tipo perfil:</label>
                    <select class="form-control" id='input-tipo'>
                    <?= printTypesOptions($opciones_tipos); ?>
                    </select>
                </div>
                <div class="row col-12 mb-3">
                    <label class="form-label font-weight-bold">Estatus:</label>
                    <select class="form-control" id='input-estatus'>
                        <?= printEstatusOptions($opciones_estatus); ?>
                    </select>
                </div>
                <input type="hidden" id="input-perfil">
                <input type="hidden" id="input-cuenta">
                <input type="hidden" id="input-direccion">
            </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="removeClassModal('formUpdate')">Cerrar</button>
            <button type="button" class="btn btn-primary" onclick="updateProfile()">Actualizar</button>
        </div>
        </div>
    </div>
    </div>