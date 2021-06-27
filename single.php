<?php

require_once('admin/config/config.php');
require_once('include/header.php');
include_once('admin/Business/comentariosBusiness.php');
require_once(DIR_BASE.'admin/business/productosBusiness.php')

?>

<?php
$seccion = 'products';
		$producto = businessObtenerProducto($_GET['producto']);

include_once('admin/helpers/string.php');
if(isset($_POST['submit'])){ 
    businessGuardarComentario($_POST);     
    }
  
  $comentarios = array( 'nombre' => '','email' => '','mensaje' => '','fecha' => '');
  
?>

<div class="head-bread">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Men</a></li>
            <li class="active">Shop</li>
        </ol>
    </div>
</div>
<div class="showcase-grid">
    <div class="container">
        <div class="col-md-8 showcase">
            <div class="flexslider">



                <?php $imagenes = businessObtenerImagenesProducto($producto['id']) ;
									if(!empty($imagenes)){?>
                <img src="<?php echo str_replace('small','xl',$imagenes[0])?>" alt="">
                <?php }else{ ?>
                <img src="<?php echo URL_BASE?>image/user.png" alt="">
                <?php } ?>

                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-4 showcase">
            <div class="showcase-rt-top">
                <div class="pull-left shoe-name">
                    <h3><?php echo $producto['nombre']?></h3>
                    <p>Men's running shoes</p>
                    <h4>&#36;<?php echo $producto['precio']?></h4>
                </div>
                <div class="pull-left rating-stars">
                    <ul>
                        <!-- <li><a href="#" class="active"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
    <li><a href="#" class="active"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
    <li><a href="#" class="active"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
    <li><a href="#"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
    <li><a href="#"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li> -->
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <hr class="featurette-divider">
            <div class="shocase-rt-bot">
                <div class="float-qty-chart">
                    <ul>
                        <li class="qty">
                            <h3>Size Chart</h3>
                            <select class="form-control siz-chrt">
                                <option>6 US</option>
                                <option>7 US</option>
                                <option>8 US</option>
                                <option>9 US</option>
                                <option>10 US</option>
                                <option>11 US</option>
                            </select>
                        </li>
                        <li class="qty">
                            <h4>QTY</h4>
                            <select class="form-control qnty-chrt">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                            </select>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <ul>
                    <li class="ad-2-crt simpleCart_shelfItem">
                        <a class="btn item_add" href="#" role="button">Add To Cart</a>
                        <a class="btn" href="#" role="button">Buy Now</a>
                    </li>
                </ul>
            </div>
            <div class="showcase-last">
                <h3>product details</h3>

                <p><?php echo cortar_palabras($producto['descripcion'],150)?> </p>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- comentarios -->
<div class="contact">
    <div class="container">
        <h3>commentary</h3>
        <div class="contact-content" >
            <form class="form-horizontal row-fluid" action="" method="POST">
                <input type="text" class="textbox" name= "nombre" value="<?php echo $comentarios['nombre'] ?>" onfocus="this.value = '';"
                    onblur="if (this.value == '') {this.value = 'Your Name';}"><br>
                <input type="text" class="textbox" name="email" value="<?php echo $comentarios['nombre'] ?>" onfocus="this.value = '';"
                    onblur="if (this.value == '') {this.value = 'Your E-Mail';}"><br>
                <div class="clear"> </div>
                <div>
                <textarea name= "mensaje" value="<?php echo $comentarios['nombre'] ?>:">Your Message</textarea><br>
                </div>
                <div class="submit">
                    <input class="btn btn-default cont-btn" type="submit" name= "submit" value="SEND COMMENT" />
                    <input type="hidden" name="producto" value="<?php echo $producto['id']?>">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- fin comentarios -->
<div class="specifications">
    <div class="container">
        <h3>Item Details</h3>
        <div class="detai-tabs">
            <!-- Nav tabs -->
            <ul class="nav nav-pills tab-nike" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                        data-toggle="tab">Highlights</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                        data-toggle="tab">Description</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Terms
                        & conditiona</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <p>The full-length Max Air unit delivers excellent cushioning with enhanced flexibility for
                        smoother transitions through footstrike.</p>
                    <p>Dynamic Flywire cables integrate with the laces and wrap your midfoot for a truly
                        adaptive, supportive fit.</p>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <p>Nike is one of the leading manufacturer and supplier of sports equipment, footwear and
                        apparels. Nike is a global brand and it continuously creates products using high
                        technology and design innovation. Nike has a vast collection of sports shoes for men at
                        Snapdeal. You can explore our range of basketball shoes, football shoes, cricket shoes,
                        tennis shoes, running shoes, daily shoes or lifestyle shoes. Take your pick from an
                        array of sports shoes in vibrant colours like red, yellow, green, blue, brown, black,
                        grey, olive, pink, beige and white. Designed for top performance, these shoes match the
                        way you play or run. Available in materials like leather, canvas, suede leather, faux
                        leather, mesh etc, these shoes are lightweight, comfortable, sturdy and extremely
                        sporty. The sole of all Nike shoes is designed to provide an increased amount of comfort
                        and the material is good enough to provide an improved fit. These shoes are easy to
                        maintain and last for a really long time given to their durability. Buy Nike shoes for
                        men online with us at some unbelievable discounts and great prices. So get faster and
                        run farther with your Nike shoes and track how hard you can play.</p>
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                    The images represent actual product though color of the image and product may slightly
                    differ.
                </div>
            </div>
        </div>
    </div>
</div>



<?php
        include_once('include/footer.php');
        ?>