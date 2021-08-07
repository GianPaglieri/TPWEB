<?php 
require_once("helpers/urls.php");
require_once("config/config.php");
include_once("includes/header.php");
include_once("helpers/string.php");


include_once(DIR_BASE."admin/Business/comentariosBusiness.php");



if(isset($_GET['del'] )){
    businessborrarCategoria($_GET["del"]);
    redirect('ListadoComentarios.php');
}
?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <?php 
include ("includes/header.php")
?>
    </head>
    <body>
    <?php 
include ("includes/navbar.php")
?>	
	
<?php 
include ("includes/sidebar.php")
?>				
             <div class="span9">
                        <div class="content">
                            <div class="module message">
                                <div class="module-head">
                                    <h3>
                                        Mensajes</h3>
                                        <div class="control-group">
											<label class="control-label" for="basicinput"></label>
											<div class="controls">
												<div class="dropdown">
													<a class="dropdown-toggle btn" data-toggle="dropdown" href="#">Filtrar productos <i class="icon-caret-down"></i></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<li><a href="#"><?php 
				$arrCat = json_decode(file_get_contents(DIR_BASE.'admin/datos/comentarios.json'),true);
				foreach($arrCat as $cat ){
			?>
					<a href="listadocomentarios.php?producto=<?php echo $cat['producto']?><?php echo (isset($_GET['producto']))?$_GET['producto']:""; ?>" >
					        <span class="icon-chevron-right"></span><?php echo $cat['producto']?>
					    </a></br></br>
			<?php } ?>
			<a href="listadocomentarios.php?<?php echo (isset($_GET['producto']))?$_GET['producto']:""; ?>"><span class="icon-chevron-right"></span>Todos</a></a></li>
														
													</ul>
												</div>
											</div>
										</div>

                                </div>
                                
                                <div class="module-body table">
                                    <table class="table table-message">
                                        <tbody>
                                            <tr class="heading">
                                               
                                                <td class="cell-icon">
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Producto
                                                </td>
                                                <td class="cell-title">
                                                    Nombre
                                                </td>
                                                <td class="cell-title">
                                                    Mensaje
                                                </td>
                                                
                                                <td class="cell-time align-right">
                                                    Date
                                                </td>
                                            </tr>




                                            <tr class="unread">
                                            <?php foreach(businessObtenerComentarios() as $com){
                                                $print = true;
                       
                            if(!empty($_GET['producto']) AND $print){
                                if($com['producto'] != $_GET['producto']) $print = FALSE;
                            }

                            

                            if($print){ 							
                     ?>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                 <?php echo $com ["producto"] ?> 
                                                </td>
                                                <td class="cell-title">
                                                 <?php echo $com ["nombre"] ?> 
                                                </td>
                                                <td class="cell-title">
                                                 <?php echo $com ["mensaje"] ?> 
                                                </td>
                                                
                                                <td class="cell-time align-right">
                                                <?php echo $com ["fecha"] ?> 
                                                </td>
                                            </tr>
                                            <?php }} ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
    </div>
    </div>
    
    
    
    
    <div class="module-foot">
       <div class="footer">
        <div class="container">
            <b class="copyright">&copy; Equipo Davinci </b>All rights reserved.
        </div>
    </div>
    </div>
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="scripts/common.js" type="text/javascript"></script>
    </body>
