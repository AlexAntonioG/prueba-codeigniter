<?php

function printData($objeto){

    foreach ($objeto as $propiedad){
        echo "
            <tr>
                <td>$propiedad->id_perfil</td>
                <td>$propiedad->nombres</td>
                <td>$propiedad->correo</td>
                <td>$propiedad->estatus</td>
                <td></td>
            </tr>
        ";
    }

}