<?php

$categorias = array(
   '1' => array(
          'id' => 1,
          'nombre' => 'zapatilla',
          'activo' => true
   ),
   '2' => array(
          'id' => 2,
          'nombre' => 'pantalon',
          'activo' => true     
   ),
    3 => array(
         'id'  => 3,
         'nombre' => 'remera',
         'activo' =>  true   
   )


   );

echo json_encode($categorias);



?>