<?php

$marcas = array(
    '1' =>  array(
            'id' => 1,
            'nombre' => 'Nike',
            'activa' => FALSE
        ),
    '2' =>  array(
        'id' => 2,
        'nombre' => 'Adidas',
        'activa' => TRUE
        )
    );

echo json_encode($marcas);
?>