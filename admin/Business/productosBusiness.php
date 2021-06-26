<?php
include_once(DIR_BASE.'admin/DAO/productosDao.php');
include_once(DIR_BASE.'admin/helpers/image.php');


function businessGuardarProductos($datos = array()){
    $id = daoGuardarProducto($datos);
    if(!empty($_FILES['imagen'])){
        saveImage($_FILES['imagen'], $id);
    }
} 

function businessobtenerProductos(){
   return daoObtenerproductos();
}

function businessobtenerProducto($id){
    return daoObtenerProducto($id);
}

function businessmodificarProducto($datos = array(), $id ){

      daoModificarProducto($datos,$id);
      if(!empty($_FILES['imagen'])){
        saveImage($_FILES['imagen'], $id);
    }
}

function saveImage($datos,$id){ 
    $ruta = DIR_BASE.'admin/images/'.$id.'/';
    if(!is_dir($ruta)){
        mkdir($ruta);
    }
    $tamanhos = array(0 => array('nombre'=>'big','ancho'=>'300','alto'=>'400'),
                      1 => array('nombre'=>'small','ancho'=>'100','alto'=>'200'),
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
        return obtener_imagenes('admin/images/'.$id.'/');
} 
    
function businessBorrarProducto($id){
        daoBorrarProducto($id);
        $ruta = DIR_BASE.'admin/images/'.$id.'/';
        eliminar_archivos($ruta);
}