<?php

function daoGuardarComentario($datos = array()){
    $comentarios = daoObtenerComentarios(); 
    
    $comentarios[date('Ymdhisu')] = array(
        'nombre' => $datos['nombre'],
        'mensaje' => $datos['mensaje'],
        'email' => $datos['email'],
        'producto' => $datos['producto'],
        'fecha' => date('H:i:s d-m-Y')
    ); 
    $fp = fopen(DIR_BASE.'admin/datos/comentarios.json','w');
    fwrite($fp, json_encode($comentarios));
    fclose($fp);

}

function daoObtenerComentarios(){
    if(file_exists(DIR_BASE.'datos/comentarios.json')){ 
        $comentarios = json_decode(file_get_contents(DIR_BASE.'admin/datos/comentarios.json'),TRUE);	
    }else{
        $comentarios = array();
    }

    return $comentarios;

}

function daoObtenerComentario($id){
    $comentarios = daoObtenerComentarios();  
    return $comentarios[$id];

}

function daoModificarComentario($datos = array(), $id){
    $comentarios = daoObtenerComentarios(); 
    $comentarios[$id] = array(
        'nombre' => $datos['nombre'],
        'comentario' => $datos['comentario'],
        'email' => $datos['email'],
        'producto' => $datos['producto'],
        'fecha' => $datos['fecha']
    );
    $fp = fopen(DIR_BASE.'admin/datos/comentarios.json','w');
    fwrite($fp, json_encode($comentarios));
    fclose($fp);
}


 function daoBorrarComentario($id){
    $comentarios = daoObtenerComentarios(); 
    unset($comentarios[$id]);
    $fp = fopen(DIR_BASE.'admin/datos/comentarios.json','w');
    fwrite($fp, json_encode($comentarios));
    fclose($fp);
}