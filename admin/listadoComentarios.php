<?php 
require_once("helpers/urls.php");
require_once("config/config.php");
include_once("includes/header.php");
include_once("helpers/string.php");


include_once("Business/comentariosBusiness.php");



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
                                        Message</h3>
                                </div>
                                <div class="module-option clearfix">
                                    <div class="pull-left">
                                        <div class="btn-group">
                                            <button class="btn">
                                                Inbox</button>
                                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Inbox(11)</a></li>
                                                <li><a href="#">Sent</a></li>
                                                <li><a href="#">Draft(2)</a></li>
                                                <li><a href="#">Trash</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Settings</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-primary">Compose</a>
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
                                                 <?php echo $com ["comentario"] ?> 
                                                </td>
                                                
                                                <td class="cell-time align-right">
                                                    18:24
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="module-foot">
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
        <!--/.wrapper-->
       <!--/.wrapper-->
       <div class="footer">
        <div class="container">
            <b class="copyright">&copy; Equipo Davinci </b>All rights reserved.
        </div>
    </div>
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="scripts/common.js" type="text/javascript"></script>
    </body>
