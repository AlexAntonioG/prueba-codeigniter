<?php

function printSexOptions($objeto){

    foreach ($objeto as $propiedad){
        echo "
            <option value='$propiedad->id_sexo'>$propiedad->nombre</option>
        ";
    }

}