<?php
include_once(DIR_BASE.'/admin/DAO/categoriasDao.php');

function businessGuardarCategorias($datos = array()){
    if(!empty($_FILES['imagen'])){
       $datos['imagen'] = $_FILES['imagen']['name'];
   }
   $id = daoGuardarCategoria($datos);
   
   if(!empty($_FILES['imagen'])){
       if(!is_dir(DIR_BASE.'images/'.$id)){
           mkdir(DIR_BASE.'images/'.$id);
       }
       move_uploaded_file($_FILES['imagen']['tmp_name'],DIR_BASE.'images/'.$id.'/'.$_FILES['imagen']['name']);
       if(file_exists(DIR_BASE.'images/'.$id.'/'.$datos['old_imagen'])){
           unlink(DIR_BASE.'images/'.$id.'/'.$datos['old_imagen']);
       } 
   } 
 
 
 }
 

function businessObtenerCategorias(){
 
    return daoObtenerCategorias();

}

function businessobtenerCategoria($id){
    return daoObtenerCategoria($id);

}

function businessmodificarCategoria($id, $datos = array(), ){
   if(!empty($_FILES['imagen'])){
      $datos['imagen'] = $_FILES['imagen']['name'];
  }
  daoModificarCategoria($datos,$id);

  if(!empty($_FILES['imagen'])){
      if(!is_dir(DIR_BASE.'images/'.$id)){
          mkdir(DIR_BASE.'images/'.$id);
      }
      move_uploaded_file($_FILES['imagen']['tmp_name'],DIR_BASE.'images/'.$id.'/'.$_FILES['imagen']['name']);
      if(file_exists(DIR_BASE.'images/'.$id.'/'.$datos['old_imagen'])){
          unlink(DIR_BASE.'images/'.$id.'/'.$datos['old_imagen']);
      }
  }
}

function businessborrarCategoria($id){
    daoBorrarCategoria($id);
}
