<?php

function printData($objeto){

    foreach ($objeto as $propiedad){
        echo "
            <tr>
                <td>$propiedad->id_perfil</td>
                <td>$propiedad->nombres $propiedad->apellidos</td>
                <td>$propiedad->correo</td>
                <td>$propiedad->nombre_estatus</td>
                <td>
                    <div class='container'>
                        <button type='button' class='btn btn-info' data-toggle='modal' 
                        data-target='#modalDetail' onclick='getInfoUser($propiedad->id_perfil)'>
                            <i class='fas fa-info-circle'></i> Ver a detalle
                        </button>
                        <button type='button' class='btn btn-primary' data-toggle='modal' 
                        data-target='#modalUpdate' onclick='getInfoUserUpdate($propiedad->id_perfil)'>    
                            <i class='fas fa-user-edit'></i> Editar
                        </button>
                        <button type='button' class='btn btn-danger' data-toggle='modal' 
                        data-target='#modalDelete' onclick='getInfoUserDelete($propiedad->id_perfil)'>
                            <i class='fas fa-user-times'></i> Eliminar
                        </button>
                    </div>
                </td>
            </tr>
        ";
    }

}