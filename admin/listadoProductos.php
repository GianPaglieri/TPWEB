<?php 
require_once("helpers/urls.php");
require_once("config/config.php");
include_once("includes/header.php");
include_once("helpers/string.php");
include_once("Business/productosBusiness.php");
include_once("Business/marcasBusiness.php");
include_once("Business/categoriasBusiness.php");

$marcas = businessObtenerMarcas();
$categorias = businessObtenerCategorias();

if(isset($_GET['del'] )){
    businessborrarProducto($_GET["del"]);
    redirect('ListadoProductos.php');
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
                                    Listado de productos</h3>
                            </div>
                            <div class="module-body">
                                <div class="grid">
                                    <div id="placeholder2" class="graph">

                                    <p>
									<strong>Productos</strong>
									-
									
								</p>
								<table class="table">
								  <thead>
									<tr>
									  <th>ID</th>
									  <th>Nombre</th>
									  <th>Categoria</th>
                                      <th>Marca</th>
									  <th>Precio</th>
                                      <th>Activo</th>
                                      <th>Acciones</th>
									</tr>
								  </thead>
								  <tbody>
                                  <?php foreach(businessObtenerProductos() as $prod){?>

									<tr>
									  <td><?php echo cortar_palabras($prod['id'],555)?></td>
									  <td><?php echo $prod ["nombre"] ?></td>
									  <td><?php echo $prod ["categoria"] ?></td>
									  <td><?php echo $prod ["marca"] ?></td>
                                      <td><?php echo $prod ["precio"] ?></td>
                                      <td> <?php echo $prod ["activa"]? 'SI' :'NO' ?></td>
                                      <td> 
                                      <a href="ABM/formularioProducto.php?edit=<?php echo $prod['id']?>" class="btn btn-warning">Editar</a>
                                      <a href= "ListadoProductos.php?del=<?php echo $prod ['id']?>" class="btn btn-danger">Borrar</a>
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
