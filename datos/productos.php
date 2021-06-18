<?php

$productos = array(
   '1' => array(
          'id' => 1,                /* producto: 1 */ 
          'nombre' => 'airmax 2015',/* nombre producto 1: airmax 2015 */
          'categoria' => 1,         /* categoria: zapatilla  */ 
          'marca' => 1,             /* marca: nike */
          'precio' => 100,          /* precio usd: 100 */ 
          'activo' => true
   ),
   '2' => array(
          'id' => 2,                      /* producto: 2 */ 
          'nombre' => 'jogger sportswear',/* nombre producto 2: jogger sportswear */
          'categoria' => 2,               /* categoria: pantalon  */ 
          'marca' => 1,                   /* marca: nike */
          'precio' => 80,                 /* precio usd: 80 */  
          'activo' => true 
   ),
    3 => array(
         'id'  => 3,                /* producto: 3  */
         'nombre' => 'nike t-shirt',/* nombre producto 3: nike t-shirt */ 
         'categoria' => 3,          /* categoria: remera */ 
          'marca' => 1,             /* marca: nike */
          'precio' => 50,           /* precio usd: 50 */ 
          'activo' => true
    ),
    '4' => array(
        'id' => 4,                    /* producto: 4 */ 
        'nombre' => 'ultraboost 2015',/* nombre producto 4: ultraboost 2015 */
        'categoria' => 1,             /* categoria: zapatilla  */ 
        'marca' => 2,                 /* marca: adidas */ 
        'precio' => 100,              /* precio usd: 100 */ 
        'activo' => true
 ),
 '5' => array(
        'id' => 5,                 /* producto: 5 */
        'nombre' => 'essentials 3',/* nombre producto 5: essentials 3 */ 
        'categoria' => 2,          /* categoria: pantalon  */ 
        'marca' => 2,              /* marca: adidas */
        'precio' => 80,            /* precio usd: 80 */  
        'activo' => true 
 ),
  6 => array(
       'id'  => 6,                  /* producto: 6  */
       'nombre' => 'adidas t-shirt',/* nombre producto 6: adidas t-shirt */ 
       'categoria' => 3,            /* categoria: remera */ 
        'marca' => 2,               /* marca: adidas */ 
        'precio' => 50,             /* precio usd: 50 */ 
        'activo' => true
  ),
  '7' => array(
      'id' => 7,                   /* producto: 7 */
      'nombre' => 'st runner 2015',/* nombre producto 7: st runner 2015 */ 
      'categoria' => 1,            /* categoria: zapatilla  */ 
      'marca' => 3,                /* marca: puma */
      'precio' => 100,             /* precio usd: 100 */  
      'activo' => true
),
'8' => array(
      'id' => 8,              /* producto: 8 */
      'nombre' => 'tfs track',/* nombre producto 8: tfs track */
      'categoria' => 2,       /* categoria: pantalon  */ 
      'marca' => 3,           /* marca: puma */
      'precio' => 80,         /* precio usd: 80 */  
      'activo' => true 
),
9 => array(
     'id'  => 9,                /* producto: 9  */
     'nombre' => 'puma t-shirt',/* nombre producto 9: puma t-shirt */ 
     'categoria' => 3,          /* categoria: remera */ 
      'marca' => 3,             /* marca: puma */ 
      'precio' => 50,           /* precio usd: 50 */ 
      'activo' => true
)

  );

echo json_encode($productos);



?>