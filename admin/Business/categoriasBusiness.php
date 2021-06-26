<?php
include_once(DIR_BASE.'admin/DAO/categoriasDao.php');

function businessGuardarCategorias($datoscategoria = array()){
    if(!empty($_FILES['imagen'])){
       $datoscategoria['imagen'] = $_FILES['imagen']['name'];
   }
   $id = daoGuardarCategoria($datoscategoria);
   
 }

function businessObtenerCategorias(){
    return daoObtenerCategorias();
}

function businessobtenerCategoria($id){
    return daoObtenerCategoria($id);
}

function businessmodificarCategoria($datoscategoria = array(), $id){
   if(!empty($_FILES['imagen'])){
      $datoscategoria['imagen'] = $_FILES['imagen']['name'];
  }
  daoModificarCategoria($datoscategoria,$id);
}

function businessborrarCategoria($id){
    daoBorrarCategoria($id);
}