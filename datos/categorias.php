<?php

$categorias = array(
   '1' => array(
          'id' => 1,
          'nombre' => 'running',
          'activo' => true
   ),
   '2' => array(
          'id' => 2,
          'nombre' => 'jordan',
          'activo' => true     
   ),
    '3' => array(
         'id'  => 3,
         'nombre' => 'futbol',
         'activo' =>  true   
    ),
    '4' => array(
       'id'  => 4,
       'nombre' => 'training',
       'activo' =>  true   
     )
   );

echo json_encode($categorias);



?>