<?php

function daoGuardarComentario($datos = array()){
    $comentarios = obtenerComentarios(); 
    
    $comentarios[date('Ymdhisu')] = array(
        'nombre' => $datos['nombre'],
        'comentario' => $datos['comentario'],
        'email' => $datos['email'],
        'producto' => $datos['producto'],
        'fecha' => date('H:i:s d-m-Y')
    ); 
    $fp = fopen(DIR_BASE.'datos/comentarios.json','w');
    fwrite($fp, json_encode($comentarios));
    fclose($fp);

}

function daoObtenerComentarios(){
    if(file_exists(DIR_BASE.'datos/comentarios.json')){ 
        $comentarios = json_decode(file_get_contents(DIR_BASE.'datos/comentarios.json'),TRUE);	
    }else{
        $comentarios = array();
    }

    return $comentarios;

}

function daoObtenerComentario($id){
    $comentarios = obtenerComentarios();  
    return $comentarios[$id];

}

function daoModificarComentario($datos = array(), $id){
    $comentarios = obtenerComentarios(); 
    $comentarios[$id] = array(
        'nombre' => $datos['nombre'],
        'comentario' => $datos['comentario'],
        'email' => $datos['email'],
        'producto' => $datos['producto'],
        'fecha' => date('H:i:s d-m-Y')
    );
    $fp = fopen(DIR_BASE.'datos/comentarios.json','w');
    fwrite($fp, json_encode($comentarios));
    fclose($fp);
}

function daoBorrarComentario($id){
    $comentarios = obtenerComentarios(); 
    unset($comentarios[$id]);
    $fp = fopen(DIR_BASE.'datos/comentarios.json','w');
    fwrite($fp, json_encode($comentarios));
    fclose($fp);
}