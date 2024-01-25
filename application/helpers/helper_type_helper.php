<?php

function printTypesOptions($objeto){

    foreach ($objeto as $propiedad){
        echo "
            <option value='$propiedad->id_tipo'>$propiedad->nombre</option>
        ";
    }

}