<?php
include_once(DIR_BASE.'/admin/DAO/marcasDao.php');

function businessGuardarMarcas($datos = array()){

   $id = daoGuardarMarca($datos); 
 }

function businessObtenerMarcas(){
 
    return daoObtenerMarcas();
}

function businessobtenerMarca($id){
    return daoObtenerMarca($id);
}

function businessmodificarMarca($datos = array(), $id){
  daoModificarMarca($datos,$id);
}

function businessborrarMarca($id){
    daoBorrarMarca($id);
}
