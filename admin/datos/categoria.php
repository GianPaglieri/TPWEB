<?php

$categorias = array(
    '1' =>  array(
            'id' => 1,
            'nombre' => 'Remeras',
            'activa' => FALSE
        ),
    '2' =>  array(
        'id' => 2,
        'nombre' => 'Pantalones',
        'activa' => TRUE
        )
    );

echo json_encode($categorias);
?>