<?php 
require_once("helpers/urls.php");
require_once("config/config.php");
include_once("includes/header.php");
include_once("helpers/string.php");
include_once("Business/marcasBusiness.php");
require_once("helpers/urls.php");
require_once("config/config.php");
include_once("includes/header.php");
include_once("helpers/string.php");





if(isset($_GET['del'] )){
    businessborrarMarca($_GET["del"]);
    redirect('ListadoMarcas.php');
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
                                    Listado de marcas</h3>
                                    <a href="ABM/formularioMarca.php"  class="btn btn-primary">Agregar Marca</a> 
                            </div>
                            <div class="module-body">
                                <div class="grid">
                                    <div id="placeholder2" class="graph">

                                    <p>
									<strong>Marcas</strong>
									-
									
								</p>
								<table class="table">
								  <thead>
									<tr>
									  <th>ID</th>
									  <th>Nombre</th>
									  <th>Fabricante</th>
                                      <th>Contacto</th>
									  
                                      <th>Acciones</th>
									</tr>
								  </thead>
								  <tbody>

                                  <?php foreach(businessObtenerMarcas() as $mar){?>
                                

									<tr>
									  <td><?php echo cortar_palabras($mar['id'],555)?></td>
									  <td><?php echo $mar ["nombre"] ?></td>
									  <td><?php echo $mar ["fabricante"] ?></td>
									  <td><?php echo $mar ["contacto"] ?></td>
                                      
                                      <td> 
                                      <a href="ABM/formularioMarca.php?edit=<?php echo $mar['id']?>" class="btn btn-warning">Editar</a>
                                      <a href= "ListadoMarcas.php?del=<?php echo $mar ['id']?>" class="btn btn-danger">Borrar</a>
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
