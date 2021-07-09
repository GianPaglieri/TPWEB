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
                                            <?php foreach(businessObtenerComentarios() as $com){?>
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
                                            <?php } ?>
                                            
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
