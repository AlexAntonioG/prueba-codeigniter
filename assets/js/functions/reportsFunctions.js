
var baseUrl = 'http://localhost/prueba-codeigniter'; 

function getInfoUser(id_perfil){

    $.ajax({
        url: baseUrl + '/index.php/Ajax_reports/obtener_info_perfil/',
        type:'POST',
        data:{id_perfil:id_perfil},
        dataType:'json',
        success: function (result){

            let data = result[0];

            $("#label-id").html(data.id_perfil);
            $("#label-usuario").html(data.usuario);
            $("#label-nombre").html(data.nombres + " " + data.apellidos);
            $("#label-sexo").html(data.nombre_sexo);
            $("#label-correo").html(data.correo);
            $("#label-telefono").html(data.telefono);
            $("#label-direccion").html(
                data.codigo_postal + "," + 
                data.colonia + "," +     
                data.municipio + "," +
                data.estado
            );
            $("#label-tipo").html(data.nombre_tipo);
            $("#label-estatus").html(data.nombre_estatus);
            $("#label-registro").html(data.registro);

        },
        error: function (error) {
            console.error('Error en la solicitud AJAX', error);
        }
    });

}

function getInfoUserUpdate(id_perfil){

    $.ajax({
        url: baseUrl + '/index.php/Ajax_reports/obtener_info_perfil/',
        type:'POST',
        data:{id_perfil:id_perfil},
        dataType:'json',
        success: function (result){

            let data = result[0];

            $("#input-usuario").val(data.usuario);
            $("#input-nombre").val(data.nombres);
            $("#input-apellidos").val(data.apellidos);
            $("#input-sexo").val(data.id_sexo);
            $("#input-correo").val(data.correo);
            $("#input-telefono").val(data.telefono);
            $("#input-codigo-postal").val(data.codigo_postal);
            $("#input-colonia").val(data.colonia);
            $("#input-municipio").val(data.municipio);
            $("#input-estado").val(data.estado);
            $("#input-tipo").val(data.id_tipo);
            $("#input-estatus").val(data.id_estatus);
            $("#input-registro").val(data.registro);
            $("#input-perfil").val(data.id_perfil);
            $("#input-cuenta").val(data.id_cuenta);
            $("#input-direccion").val(data.id_direccion);

        },
        error: function (error) {
            console.error('Error en la solicitud AJAX', error);
        }
    });
}

function getInfoUserDelete(id_perfil){
    $.ajax({
        url: baseUrl + '/index.php/Ajax_reports/obtener_info_perfil/',
        type:'POST',
        data:{id_perfil:id_perfil},
        dataType:'json',
        success: function (result){

            let data = result[0];

            $("#delete-nombre").html(data.nombres + " " + data.apellidos);
            $("#delete-perfil").val(data.id_perfil);

        },
        error: function (error) {
            console.error('Error en la solicitud AJAX', error);
        }
    });
}

function insertProfile(){

    const form = $("#formInsert").addClass("was-validated");

    //Revisar la validación del form, [0] es debido a que buscamos en el array de Jquery de todos los form
    if(form[0].checkValidity()){ 

        let usuario = $('#registrar-usuario').val();
        let nombre = $('#registrar-nombre').val();
        let apellidos = $('#registrar-apellidos').val();
        let sexo = $('#registrar-sexo').val();
        let correo = $('#registrar-correo').val();
        let telefono = $('#registrar-telefono').val();
        let codigoPostal = $('#registrar-codigo-postal').val();
        let colonia = $('#registrar-colonia').val();
        let municipio = $('#registrar-municipio').val();
        let estado = $('#registrar-estado').val();
        let tipoPerfil = $('#registrar-tipo').val();

        let datos = {
            usuario: usuario,
            nombre: nombre,
            apellidos: apellidos,
            sexo: sexo,
            correo: correo,
            telefono: telefono,
            codigoPostal: codigoPostal,
            colonia: colonia,
            municipio: municipio,
            estado: estado,
            tipoPerfil: tipoPerfil
        };

        $.ajax({
            url: baseUrl + '/index.php/Ajax_reports/registrar_perfil/',
            type: 'POST',
            data: datos,
            dataType:'json',
            success: function (result) {
                
                var mensajeModal = $('#modalInsert').find('.modal-body');

                if (result.resultado) {
                    mensajeModal.html('<div class="alert alert-success" role="alert">' + "Registro exitoso" + '</div>');
                
                    setTimeout(function() {
                        location.reload();
                    }, 1200);

                } else {

                    mensajeModal.html('<div class="alert alert-danger" role="alert">' + "Error en registro" + '</div>');

                }
            },
            error: function (error) {
                console.error('Error en la solicitud AJAX', error);
            }
        });
    }
}

function updateProfile(){

    const form = $("#formUpdate").addClass("was-validated");

    //Revisar la validación del form, [0] es debido a que buscamos en el array de Jquery de todos los form
    if(form[0].checkValidity()){ 

        let usuario = $('#input-usuario').val();
        let nombre = $('#input-nombre').val();
        let apellidos = $('#input-apellidos').val();
        let sexo = $('#input-sexo').val();
        let correo = $('#input-correo').val();
        let telefono = $('#input-telefono').val();
        let codigoPostal = $('#input-codigo-postal').val();
        let colonia = $('#input-colonia').val();
        let municipio = $('#input-municipio').val();
        let estado = $('#input-estado').val();
        let tipoPerfil = $('#input-tipo').val();
        let estatus = $('#input-estatus').val();
        let cuenta = $('#input-cuenta').val();
        let direccion = $('#input-direccion').val();
        let perfil = $('#input-perfil').val();

        let datos = {
            usuario: usuario,
            nombre: nombre,
            apellidos: apellidos,
            sexo: sexo,
            correo: correo,
            telefono: telefono,
            codigoPostal: codigoPostal,
            colonia: colonia,
            municipio: municipio,
            estado: estado,
            tipoPerfil: tipoPerfil,
            estatus: estatus,
            cuenta: cuenta,
            direccion: direccion,
            perfil: perfil
        };

        $.ajax({
            url: baseUrl + '/index.php/Ajax_reports/actualizar_perfil/',
            type: 'POST',
            data: datos,
            dataType:'json',
            success: function (result) {
                
                var mensajeModal = $('#modalUpdate').find('.modal-body');

                if (result.resultado) {
                    mensajeModal.html('<div class="alert alert-success" role="alert">' + "Actualización exitosa" + '</div>');
                
                    setTimeout(function() {
                        location.reload();
                    }, 1200);

                } else {

                    mensajeModal.html('<div class="alert alert-danger" role="alert">' + "Error en actualización" + '</div>');

                }
            },
            error: function (error) {
                console.error('Error en la solicitud AJAX', error);
            }
        });
    }
}

function deleteProfile(){

    let perfil = $('#delete-perfil').val();

    let datos = {perfil : perfil}

    $.ajax({
        url: baseUrl + '/index.php/Ajax_reports/eliminar_perfil/',
        type: 'POST',
        data: datos,
        dataType:'json',
        success: function (result) {
            
            var mensajeModal = $('#modalDelete').find('.modal-body');

            if (result.resultado) {
                mensajeModal.html('<div class="alert alert-success" role="alert">' + "Se eliminó el perfil" + '</div>');
            
                setTimeout(function() {
                    location.reload();
                }, 1200);

            } else {

                mensajeModal.html('<div class="alert alert-danger" role="alert">' + "Error en baja de perfil" + '</div>');

            }
        },
        error: function (error) {
            console.error('Error en la solicitud AJAX', error);
        }
    });

    

}

function removeClassModal(modal){
    $("#" + modal).removeClass('was-validated');
}