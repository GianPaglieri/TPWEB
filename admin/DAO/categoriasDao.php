<?php
 

 function daoguardarCategoria($datos = array()){
    $categorias = daoObtenerCategorias();
    $id = date('Ymdhis');
    $categorias[$id] = array(
       'id' => $id,
       'nombre' => $datos['nombre'],
       'subcategoria' => $datos['subcategoria'],
       
       'descripcion' => $datos['descripcion'],
       
   ); 
   file_put_contents(DIR_BASE.'/admin/datos/categoria.json',json_encode($categorias));
   return $id;

}




function daoObtenerCategorias(){
    if(file_exists(DIR_BASE.'/admin/datos/categoria.json')){ 
        $categorias = json_decode(file_get_contents(DIR_BASE.'/admin/datos/categoria.json'),TRUE);	
    }else{
        $categorias = array();
    }

    return $categorias;

}

function daoobtenerCategoria($id){
    $categorias = daoobtenerCategorias();  
    return $categorias[$id];

}

function daomodificarCategoria($id ,$datos = array() ){

    $categorias = daoObtenerCategorias();
    $categorias[$id] = array(
       'id' => $id,
       'nombre' => $datos['nombre'],
       'subcategoria' => $datos['subcategoria'],
       
      
       'descripcion' => $datos['descripcion'],
      
   ); 
   file_put_contents('../datos/productos.json',json_encode($categorias));
    
}

function daoborrarCategoria($id){
     $categorias=daoObtenerCategorias();
     unset($categorias[$id]);
     file_put_contents(DIR_BASE.'/admin/datos/categoria.json', json_encode($categoria));
}
?>
 