<?php
include_once(DIR_BASE.'admin/DAO/categoriasDao.php');

function businessGuardarCategorias($datos = array()){
    if(!empty($_FILES['imagen'])){
       $datos['imagen'] = $_FILES['imagen']['name'];
   }
   $id = daoGuardarCategoria($datos);
   
 }

function businessObtenerCategorias(){
    return daoObtenerCategorias();
}

function businessobtenerCategoria($id){
    return daoObtenerCategoria($id);
}

function businessmodificarCategoria($datos = array(), $id){
    daoModificarCategoria($datos,$id);
  

}

function businessborrarCategoria($id){
    daoBorrarCategoria($id);
}