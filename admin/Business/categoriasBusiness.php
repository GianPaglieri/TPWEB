<?php
include_once(DIR_BASE.'/admin/DAO/categoriasDao.php');

function businessGuardarCategorias($datoscategoria = array()){
    if(!empty($_FILES['imagen'])){
       $datoscategoria['imagen'] = $_FILES['imagen']['name'];
   }
   $id = daoGuardarCategoria($datoscategoria);
   
   if(!empty($_FILES['imagen'])){
       if(!is_dir(DIR_BASE.'images/'.$id)){
           mkdir(DIR_BASE.'images/'.$id);
       }
       move_uploaded_file($_FILES['imagen']['tmp_name'],DIR_BASE.'images/'.$id.'/'.$_FILES['imagen']['name']);
       if(file_exists(DIR_BASE.'images/'.$id.'/'.$datoscategoria['old_imagen'])){
           unlink(DIR_BASE.'images/'.$id.'/'.$datoscategoria['old_imagen']);
       } 
   } 
 
 
 }
 

function businessObtenerCategorias(){
 
    return daoObtenerCategorias();

}

function businessobtenerCategoria($id){
    return daoObtenerCategoria($id);

}

function businessmodificarCategoria($id, $datoscategoria = array(), ){
   if(!empty($_FILES['imagen'])){
      $datoscategoria['imagen'] = $_FILES['imagen']['name'];
  }
  daoModificarCategoria($datoscategoria,$id);

  if(!empty($_FILES['imagen'])){
      if(!is_dir(DIR_BASE.'images/'.$id)){
          mkdir(DIR_BASE.'images/'.$id);
      }
      move_uploaded_file($_FILES['imagen']['tmp_name'],DIR_BASE.'images/'.$id.'/'.$_FILES['imagen']['name']);
      if(file_exists(DIR_BASE.'images/'.$id.'/'.$datoscategoria['old_imagen'])){
          unlink(DIR_BASE.'images/'.$id.'/'.$datoscategoria['old_imagen']);
      }
  }
}

function businessborrarCategoria($id){
    daoBorrarCategoria($id);
}
