<?php

function printEstatusOptions($objeto){

    foreach ($objeto as $propiedad){
        echo "
            <option value='$propiedad->id_estatus'>$propiedad->nombre</option>
        ";
    }

}