<?php
 

function daoObtenerMarcas(){
    if(file_exists('../datos/marca.json')){ 
        $marcas = json_decode(file_get_contents('../datos/marca.json'),TRUE);	
    }else{
        $marcas = array();
    }

    return $marcas;

}