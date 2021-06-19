<?php
 
function daoguardarMarca($datos = array()){
    $marcas = daoObtenerMarcas();
    $id = date('Ymdhis');
    $marcas[$id] = array(
       'id' => $id,
       'nombre' => $datos['nombre'],
       'fabricante' => $datos['fabricante'],
       'contacto' => $datos['contacto'],
       'descripcion' => $datos['descripcion'],
       'imagen' => $datos['imagen']
   ); 
   file_put_contents(DIR_BASE.'/admin/datos/marca.json',json_encode($marcas));
   return $id;

}





function daoObtenerMarcas(){
    if(file_exists(DIR_BASE.'/admin/datos/marca.json')){ 
        $marcas = json_decode(file_get_contents(DIR_BASE.'/admin/datos/marca.json'),TRUE);	
    }else{
        $marcas = array();
    }

    return $marcas;

}

function daoobtenerMarca($id){
    $marcas = daoobtenerMarcas();  
    return $marcas[$id];

}

function daomodificarMarca($id ,$datos = array() ){

    $marcas = daoObtenerMarcas();
    $marcas[$id] = array(
       'id' => $id,
       'nombre' => $datos['nombre'],
       'fabricante' => $datos['fabricante'],
       'contacto' => $datos['contacto'],
       'marca' => $datos['marca'],
       'descripcion' => $datos['descripcion'],
     
   ); 
   file_put_contents('../datos/marca.json',json_encode($marcas));
    
}

function daoborrarMarca($id){
     $marcas=daoObtenerMarcas();
     unset($marcas[$id]);
     file_put_contents(DIR_BASE.'/admin/datos/marca.json', json_encode($marcas));
}
?>