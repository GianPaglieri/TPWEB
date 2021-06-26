<?php

function daoguardarProducto($datos = array()){
    $productos = daoObtenerProductos();
    $id = date('Ymdhis');
    $productos[$id] = array(
       'id' => $id,
       'nombre' => $datos['nombre'],
       'precio' => $datos['precio'],
       'categoria' => $datos['categoria'],
       'marca' => $datos['marca'],      
       'activa' => isset($datos['activa'])?'TRUE':'FALSE',
       'descripcion' => $datos['descripcion']
   ); 
   file_put_contents(DIR_BASE.'admin/datos/productos.json',json_encode($productos));
   return $id;
}

function daoObtenerProductos(){
    if(file_exists(DIR_BASE.'/admin/datos/productos.json')){ 
        $productos = json_decode(file_get_contents(DIR_BASE.'/admin/datos/productos.json'),TRUE);	
              
    }else{
        $productos = array();   
    }
    return $productos;
}

function daoobtenerProducto($id){
    $productos = daoobtenerProductos();  
    return $productos[$id];
}

function daomodificarProducto($datos = array(), $id  ){

    $productos = daoObtenerProductos();
    $productos[$id] = array(
       'id' => $id,
       'nombre' => $datos['nombre'],
       'precio' => $datos['precio'],
       'categoria' => $datos['categoria'],
       'marca' => $datos['marca'],
       'activa' => isset($datos['activa'])?'TRUE':'FALSE',
       'descripcion' => $datos['descripcion']
   ); 
   file_put_contents('../datos/productos.json',json_encode($productos));
    
}

function daoborrarProducto($id){
     $productos=daoObtenerProductos();
     unset($productos[$id]);
     file_put_contents(DIR_BASE.'admin/datos/productos.json', json_encode($productos));
}
?>