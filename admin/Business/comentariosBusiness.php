<?php

include_once(DIR_BASE."admin/DAO/comentariosDao.php");

function businessGuardarComentario($datos = array()){
   daoGuardarcomentario($datos);
}

function businessobtenerComentarios(){
   return daoObtenerComentarios();
}

function businessobtenerComentario($id){
    return daoObtenerComentario();
}

function modificarComentario($datos = array(), $id){
   daoModificarComentario($datos, $id); 
}

function borrarComentario($id){
    daoBorrarComentario();
}