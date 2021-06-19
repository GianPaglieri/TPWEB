<?php 
require_once("helpers/urls.php");
require_once("config/config.php");
include_once("includes/header.php");
include_once("helpers/string.php");
include_once("Business/productosBusiness.php");

include_once("Business/categoriasBusiness.php");
include_once("Business/marcasBusiness.php");


$categorias = businessObtenerCategorias();
$marcas = businessObtenerMarcas();

if(isset($_GET['del'] )){
    businessborrarProducto($_GET["del"]);
    redirect('ListadoCategorias.php');
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>

   
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
                       
                        <br />
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    Listado de Categorias</h3>
                                    <a href="ABM/formularioCategoria.php"  class="btn btn-primary">Agregar Categoria</a>  
                            </div>
                            <div class="module-body">
                                <div class="grid">
                                    <div id="placeholder2" class="graph">

                                    <p>
									<strong>Categorias</strong>
									-
									
								</p>
								<table class="table">
								  <thead>
									<tr>
									  <th>ID</th>
									  <th>Nombre</th>
									  <th>Subcategoria</th>
                                      <th>Acciones</th>
									</tr>
								  </thead>
								  <tbody>
                                  <?php foreach(businessObtenerCategorias() as $cats){?>

									<tr>
									  <td><?php echo cortar_palabras($cats['id'],555)?></td>
									  <td><?php echo $cats ["nombre"] ?></td>
									  <td><?php echo $cats ["subcategoria"] ?></td>
									  <td><?php echo $cats ["marca"] ?></td>
                                      
                                      <td> 
                                      <a href="ABM/formularioCategoria.php?edit=<?php echo $cats['id']?>" class="btn btn-warning">Editar</a>
                                      <a href= "ListadoCategorias.php?del=<?php echo $cats ['id']?>" class="btn btn-danger">Borrar</a>
                                      </td>
									</tr>
                                <?php } ?>
								  </tbody>
								</table>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.module-->
                        <br />
                        
                        </div>
                        <!--/.module-->
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>


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
