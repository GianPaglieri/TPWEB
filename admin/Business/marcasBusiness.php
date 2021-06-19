<?php
include_once(DIR_BASE.'/admin/DAO/marcasDao.php');

function businessGuardarMarcas($datos = array()){
    if(!empty($_FILES['imagen'])){
       $datos['imagen'] = $_FILES['imagen']['name'];
   }
   $id = daoGuardarMarca($datos);
   
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
 
 
function businessObtenerMarcas(){
 
    return daoObtenerMarcas();

}

function businessobtenerMarca($id){
    return daoObtenerMarca($id);

}

function businessmodificarMarca($id, $datos = array(), ){
   if(!empty($_FILES['imagen'])){
      $datos['imagen'] = $_FILES['imagen']['name'];
  }
  daoModificarMarca($datos,$id);

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

function businessborrarMarca($id){
    daoBorrarMarca($id);
}
