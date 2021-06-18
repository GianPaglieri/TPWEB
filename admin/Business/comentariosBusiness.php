<?php
include_once(DIR_BASE."/admin/DAO/comentarios.php");

function businessGuardarComentario($datos = array()){
   daoGuardarcomentario($datos);

}

function obtenerComentarios(){
   return daoObtenerComentarios();

}

function obtenerComentario($id){
    return daoObtenerComentario();

}

function modificarComentario($datos = array(), $id){
   daoModificarComentario($datos, $id); 
}

function borrarComentario($id){
    daoBorrarComentario();
}