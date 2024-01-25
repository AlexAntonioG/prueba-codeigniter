    
    <div class="modal fade" id="modalInsert" tabindex="-1" aria-labelledby="modalInsertLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalInsertLabel">Registrar perfil</h5>
        </div>
        <div class="modal-body" id="modal-body-detail">
            <form id="formInsert" novalidate>
                <div class="row col-12 mb-3">
                    <label class="form-label font-weight-bold">Usuario:</label>
                    <input type='text 'class="form-control" id='registrar-usuario' required>
                </div>
                <div class="row col-12 mb-3">
                    <label class="form-label font-weight-bold">Nombre/s:</label>
                    <input type='text 'class="form-control" id='registrar-nombre' required>
                </div>
                <div class="row col-12 mb-3">
                    <label class="form-label font-weight-bold">Apellidos:</label>
                    <input type='text 'class="form-control" id='registrar-apellidos' required>
                </div>
                <div class="row col-12 mb-3">
                    <label class="form-label font-weight-bold">Sexo:</label>
                    <select class="form-control" id='registrar-sexo'>
                    <option value="">Selecciona</option>
                    <?= printSexOptions($opciones_sexos); ?>
                    </select>
                </div>
                <div class="row col-12 mb-3">
                    <label class="form-label font-weight-bold">Correo:</label>
                    <input type='email' class="form-control" id='registrar-correo' required>
                </div>
                <div class="row col-12 mb-3">
                    <label class="form-label font-weight-bold">Télefono:</label>
                    <input type='text' class="form-control" max="10" id='registrar-telefono' required>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <label class="form-label font-weight-bold">Código postal:</label>
                        <input class="form-control" id='registrar-codigo-postal' required>
                    </div>
                    <div class="col-8">
                        <label class="form-label font-weight-bold">Colonia:</label>
                        <input class="form-control" id='registrar-colonia' required>
                    </div>
                    <div class="col-12">
                        <label class="form-label font-weight-bold">Municipio:</label>
                        <input class="form-control" id='registrar-municipio' required>
                    </div>
                    <div class="col-8">
                        <label class="form-label font-weight-bold">Estado:</label>
                        <input class="form-control" id='registrar-estado' required>
                    </div>
                </div>
                <div class="row col-12 mb-3">
                    <label class="form-label font-weight-bold">Tipo perfil:</label>
                    <select class="form-control" id='registrar-tipo'>
                    <option value="">Selecciona</option>
                    <?= printTypesOptions($opciones_tipos); ?>
                    </select>
                </div>
            </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="removeClassModal('formInsert')">Cerrar</button>
            <button type="button" class="btn btn-primary" onclick="insertProfile()">Registrar</button>
        </div>
        </div>
    </div>
    </div>