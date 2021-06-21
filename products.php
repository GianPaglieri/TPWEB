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
						     </div>
					      </div>						  
						  <div class="tab2">
							 <ul class="place">								
								 <li class="sort">Marcas</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">	

                             <?php
                         $arraymarca = json_decode(file_get_contents('admin/datos/marca.json'),TRUE);	
                         foreach($arraymarca as $marcas){        
                         ?>
                        <li><a href="#"><?php echo $marcas['nombre']?></a></li>
                        <?php } ?>

						     </div>
					      </div>
						  
						  <!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .single-bottom").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .single-bottom").hide();
								
								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
								$(".tab5 ul").click(function(){
									$(".tab5 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
							});
						</script>
						<!-- script -->					 
				 </section>
				 <section  class="sky-form">
					 <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>DISCOUNTS</h4>
					 <div class="row row1 scroll-pane">
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Upto - 10% (20)</label>
						 </div>
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>40% - 50% (5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						 </div>
					 </div>
				 </section> 				 
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
					<section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Type</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Air Max (30)</label>
								</div>
								<div class="col col-4">
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Armagadon   (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Helium (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kyron     (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Napolean  (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Foot Rock   (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Radiated  (30)</label>
<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Spiked  (30)</label>
								</div>
							</div>
				   </section>
	
                    </div>
               </div>
            <div class="clearfix"></div>
            </div> 
        </div>
       <?php
       include_once('include/footer.php');
       ?>