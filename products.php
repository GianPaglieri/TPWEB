<?php
  
  require_once('admin/config/config.php');
  require_once('include/header.php');
?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">PRODUCTS</li>
                </ol>
            </div>
        </div>
        <div class="products-gallery">
           <div class="container">
               <div class="col-md-9 grid-gallery">
<!-- logica -->
                     <?php
                        $arrayProductos = json_decode(file_get_contents('admin/datos/productos.json'),TRUE);	

                        foreach($arrayProductos as $producto){ 
                            $print = true;
                       
                            if(!empty($_GET['categoria']) AND $print){
                                if($producto['categoria'] != $_GET['categoria']) $print = FALSE;
                            }

                            if(!empty($_GET['marca']) AND $print){
                                if($producto['marca'] != $_GET['marca']) $print = FALSE;
                            }

                            if($print){ 							
                     ?>
<!-- codigo a repetir -->
                         <div class="col-md-4 grid-stn simpleCart_shelfItem">
                            <div class="ih-item square effect3 bottom_to_top">
                                <div class="bottom-2-top">
                        <div class="img"><img src="images/grid4.jpg" alt="/" class="img-responsive gri-wid"></div>
                                <div class="info">
                                    <div class="pull-left styl-hdn">
                                        <h3><?php echo $producto['nombre']?></h3>
                                    </div>
                                    <div class="pull-right styl-price">
                                        <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$<?php echo $producto['precio']?></span></a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div></div>
                            </div>
                        <div class="quick-view">
                            <a href="single.php">comprar</a>
                        </div>
                    </div>
<!-- fin codigo a repetir -->
<?php
     }}?>

            <div class="clearfix"></div>
                </div>
               <div class="col-md-3 grid-details">
                    <div class="grid-addon">
                        <section  class="sky-form">
					 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>filter</h4>
						 <div class="tab1">
							 <ul class="place">								
								 <li class="sort">Categories</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">
<<<<<<< HEAD
<!-- filtro categorias -->
							 <?php 
				$arrCat = json_decode(file_get_contents(DIR_BASE.'admin/datos/categoria.json'),true);
				foreach($arrCat as $cat ){
			?>
					<li><a href="products.php?categoria=<?php echo $cat['nombre']?>&marca=<?php echo (isset($_GET['marca']))?$_GET['marca']:""; ?>">
					        <span class="icon-chevron-right"></span><?php echo $cat['nombre']?>
					    </a></li>
			<?php } ?>
			<li><a href="products.php?categoria=&marca=<?php echo (isset($_GET['marca']))?$_GET['marca']:""; ?>"><span class="icon-chevron-right"></span>Todas</a></li>
<!-- fin filtro categoria -->
=======
                             <?php
                         $arraycat = json_decode(file_get_contents('admin/datos/categoria.json'),TRUE);	
                         foreach($arraycat as $categorias){   
                             					
					if(!empty($_GET['categoria']) AND $print){
						if($producto['categoria'] != $_GET['categoria']) $print = FALSE;
					}

					if(!empty($_GET['marca']) AND $print){
						if($producto['marca'] != $_GET['marca']) $print = FALSE;
					}

				 	if($print){      
                         ?>
                              <li><a href="#"><?php echo $categorias['nombre']?></a></li>
                               <?php } }?>
>>>>>>> 9a73ffef0c2f9bce58d99fc57ff5ebcdc7a51484
						     </div>
					      </div>						  
						  <div class="tab2">
							 <ul class="place">								
								 <li class="sort">Marcas</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">	
<<<<<<< HEAD
<!-- filtro marca -->
							 <?php 
				$arrMarcas = json_decode(file_get_contents(DIR_BASE.'admin/datos/marca.json'),true);
				foreach($arrMarcas as $mar ){
			?>
					<li><a href="products.php?marca=<?php echo $mar['nombre']?>&categoria=<?php echo (isset($_GET['categoria']))?$_GET['categoria']:""; ?>">
					     <span class="icon-chevron-right"></span><?php echo $mar['nombre']?>
				    </a></li>
			<?php } ?>
			<li><a href="products.php?marca=&categoria=<?php echo (isset($_GET['categoria']))?$_GET['categoria']:""; ?>"><span class="icon-chevron-right"></span>Todas</a></li>
<!-- fin de filtro marca -->
=======

                             <?php
                         $arraymarca = json_decode(file_get_contents('admin/datos/marca.json'),TRUE);	
                         foreach($arraymarca as $marcas){        
                         ?>
                        <li><a href="#"><?php echo $marcas['nombre']?></a></li>
                        <?php } ?>

>>>>>>> 9a73ffef0c2f9bce58d99fc57ff5ebcdc7a51484
						     </div>
					      </div>						  
						  <!--script-->
						
				   <!---->
					 <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
					<script type='text/javascript'>//<![CDATA[ 
					$(window).load(function(){
					 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 400000,
								values: [ 2500, 350000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

					});//]]>  

					</script>
	
                    </div>
               </div>
            <div class="clearfix"></div>
            </div> 
        </div>
       <?php
       include_once('include/footer.php');
       ?>