<?php

$productos = array(
    '1' =>  array(
            'id' => 1,
            'nombre' => 'Remeras Nike',
            'precio' => 150,
            'categoria' => 1,
            'marca' => 1,
            'activa' => TRUE,
            'descripcion' => "Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.",
            'imagen' => 'a.jpg'
        ),
    '3' =>  array(
        'id' => 3,
        'nombre' => 'Pantalon Adidas',
        'precio' => 150,
        'categoria' => 2,
        'marca' => 2,
        'activa' => TRUE,
        'descripcion' => "Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.",
        'imagen' => 'b.jpg'
    ),
    '4' =>  array(
        'id' => 4,
        'nombre' => 'Remeras Adidas',
        'precio' => 150,
        'categoria' => 1,
        'marca' => 2,
        'activa' => TRUE,
        'descripcion' => "Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.",
        'imagen' => 'c.jpg'
    ),
    '5' =>  array(
        'id' => 5,
        'nombre' => 'Pantalon Nike',
        'precio' => 150,
        'categoria' => 2,
        'marca' => 1,
        'activa' => TRUE,
        'descripcion' => "Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.",
        'imagen' => 'd.jpg'
    ),
    );

echo json_encode($productos);

?>