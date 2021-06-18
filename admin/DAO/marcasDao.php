<?php
 

function daoObtenerMarcas(){
    if(file_exists('../datos/marca.json')){ 
        $data = json_decode(file_get_contents('../datos/marca.json'),TRUE);	
    }else{
        $data = array();
    }

    return $data;

}
 