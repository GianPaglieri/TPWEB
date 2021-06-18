<?php

$marcas = array(
   '1' => array(
          'id' => 1,
          'nombre' => 'nike',
          'activo' => true
   ),
   '2' => array(
          'id' => 2,
          'nombre' => 'adidas',
          'activo' => false     
   ),
    3 => array(
         'id'  => 3,
         'nombre' => 'puma',
         'activo' =>  true   
   )


   );

echo json_encode($marcas);



?>