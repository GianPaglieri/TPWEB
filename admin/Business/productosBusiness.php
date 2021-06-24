<?php
include_once('admin/config/config.php');
include_once(DIR_BASE.'/admin/DAO/productosDao.php');
include_once(DIR_BASE.'/admin/helpers/image.php');




function businessGuardarProductos($datos = array()){
    $id = daoGuardarProducto($datos);
    if(!empty($_FILES['imagen'])){
        saveImage($_FILES['imagen'], $id);
  }
  

  
//   if(!empty($_FILES['imagen'])){
//       if(!is_dir(DIR_BASE.'/admin/images/'.$id)){
//           mkdir(DIR_BASE.'/admin/images/'.$id);
//       }
//       move_uploaded_file($_FILES['imagen']['tmp_name'],DIR_BASE.'/admin/images/'.$id.'/'.$_FILES['imagen']['name']);
//       if(file_exists(DIR_BASE.'/admin/images/'.$id.'/'.$datos['old_imagen'])){
//           unlink(DIR_BASE.'/admin/images/'.$id.'/'.$datos['old_imagen']);
      } 
  




function businessobtenerProductos(){
   return daoObtenerproductos();
   

}

function businessobtenerProducto($id){
    return daoObtenerProducto($id);

}

function businessmodificarProducto($datos = array(), $id ){
//    if(!empty($_FILES['imagen'])){
//       $datos['imagen'] = $_FILES['imagen']['name'];
      daoModificarProducto($datos,$id);
      if(!empty($_FILES['imagen'])){
        saveImage($_FILES['imagen'], $id);

  }



  if(!empty($_FILES['imagen'])){
      if(!is_dir(DIR_BASE.'/admin/images/'.$id)){
          mkdir(DIR_BASE.'/admin/images/'.$id);
      }
      move_uploaded_file($_FILES['imagen']['tmp_name'],DIR_BASE.'/admin/images/'.$id.'/'.$_FILES['imagen']['name']);
      if(file_exists(DIR_BASE.'/admin/images/'.$id.'/'.$datos['old_imagen'])){
          unlink(DIR_BASE.'/admin/images/'.$id.'/'.$datos['old_imagen']);
      }
  }
}


function saveImage($datos,$id){ 
    $ruta = DIR_BASE.'/admin/images/'.$id.'/';
    if(!is_dir($ruta)){
        mkdir($ruta);
    }
    //var_dump($datos);
    $tamanhos = array(0 => array('nombre'=>'big','ancho'=>'100','alto'=>'200'),
                      1 => array('nombre'=>'small','ancho'=>'50','alto'=>'100'),
                       2 => array('nombre'=>'xl','ancho'=>'500','alto'=>'1000'));
    if(is_array($datos['name'])){
        $cantidadImg = cant_imagenes($ruta);
        foreach($datos['name'] as $index => $name){ 
            redimensionar($ruta,$datos['name'][$index],$datos['tmp_name'][$index],$index+$cantidadImg,$tamanhos);
        }
    }else{
        redimensionar($ruta,$datos['name'],$datos['tmp_name'],cant_imagenes($ruta),$tamanhos);
    }
}

    function businessObtenerImagenesProducto($id){
        return obtener_imagenes('images/'.$id.'/');
    } 
    
    function businessBorrarProducto($id){
        daoBorrarProducto($id);
        $ruta = DIR_BASE.'/admin/images/'.$id.'/';
        eliminar_archivos($ruta);
    }
