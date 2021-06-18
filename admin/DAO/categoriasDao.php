<?php
 

function daoObtenerCategorias(){
    if(file_exists('../datos/categoria.json')){ 
        $cats = json_decode(file_get_contents('../datos/categoria.json'),TRUE);	
    }else{
        $cats = array();
    }

    return $cats;

}
 