<?php
  require_once('admin/config/config.php');
  require_once('include/header.php');
  require_once(DIR_BASE.'admin/business/productosBusiness.php')
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
                       
								<?php $imagenes = businessObtenerImagenesProducto($producto['id']) ;
									if(!empty($imagenes)){?>
										<img src="<?php echo str_replace('big','small',$imagenes[0])?>" alt="">
									<?php }else{ ?>
										<img src="<?php echo URL_BASE?>image/user.png" alt="">
									<?php } ?>

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
                           
                            <a href="single.php?producto=<?php echo $producto['id']?>" class="shopBtn">VIEW</a>
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
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categorias</h4>
						 <div class="tab1">

							 <div class="single-bottom">
<!-- filtro categorias -->
							 <?php 
				$arrCat = json_decode(file_get_contents(DIR_BASE.'admin/datos/categoria.json'),true);
				foreach($arrCat as $cat ){
			?>
					<a href="products.php?categoria=<?php echo $cat['nombre']?>&marca=<?php echo (isset($_GET['marca']))?$_GET['marca']:""; ?>" >
					        <span class="icon-chevron-right"></span><?php echo $cat['nombre']?>
					    </a></br></br>
			<?php } ?>
			<a href="products.php?categoria=&marca=<?php echo (isset($_GET['marca']))?$_GET['marca']:""; ?>"><span class="icon-chevron-right"></span>Todas</a>
<!-- fin filtro categoria -->
						     </div>
					      </div>	
						  <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Marcas</h4>					  
						  <div class="tab2">

							 <div class="single-bottom">	
<!-- filtro marca -->
							 <?php 
				$arrMarcas = json_decode(file_get_contents(DIR_BASE.'admin/datos/marca.json'),true);
				foreach($arrMarcas as $mar ){
			?>
					<a href="products.php?marca=<?php echo $mar['nombre']?>&categoria=<?php echo (isset($_GET['categoria']))?$_GET['categoria']:""; ?>">
					     <span class="icon-chevron-right"></span><?php echo $mar['nombre']?>
				    </a></br></br>
			<?php } ?>
			<a href="products.php?marca=&categoria=<?php echo (isset($_GET['categoria']))?$_GET['categoria']:""; ?>"><span class="icon-chevron-right"></span>Todas</a>
<!-- fin de filtro marca -->
						     </div>
					      </div>						  
						  <!--script-->
						
				   <!---->

	
                    </div>
               </div>
            <div class="clearfix"></div>
            </div> 
        </div>
       <?php
       include_once('include/footer.php');
       ?>