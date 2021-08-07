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
    redirect('ListadoProductos.php');
}
$producto = array( 'nombre' => '','precio' => '','categoria' => '','marca' => '','activa' => '','descripcion'=>'', 'imagen' => '');

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
            <div class="module message">

                <div class="module-head">
                    <h3>
                        Listado de productos</h3>
                    <a href="ABM/formularioProducto.php" class="btn btn-primary">Agregar Producto</a>
                    


                </div>
                <div class="module-body table">
                    <div class="grid">
                        <div id="placeholder2" class="graph">
                        

                            <p>
                                <strong></strong>
                                
                               
                               
                               <!-- FILTRO CATEGORIA -->
                                <div class="control-group">
											<label class="control-label" for="basicinput"></label>
											<div class="controls">
												<div class="dropdown">
													<a class="dropdown-toggle btn" data-toggle="dropdown" href="#">Filtrar categoria <i class="icon-caret-down"></i></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<li><a href="#"> <?php 
				$arrCat = json_decode(file_get_contents(DIR_BASE.'admin/datos/categoria.json'),true);
				foreach($arrCat as $cat ){
			?>
					<a href="listadoproductos.php?categoria=<?php echo $cat['nombre']?>&marca=<?php echo (isset($_GET['marca']))?$_GET['marca']:""; ?>" >
					        <span class="icon-chevron-right"></span><?php echo $cat['nombre']?>
					    </a></br></br>
			<?php } ?>
			<a href="listadoproductos.php?categoria=&marca=<?php echo (isset($_GET['marca']))?$_GET['marca']:""; ?>"><span class="icon-chevron-right"></span>Todas</a></a></li>
														
													</ul>
												</div>
											</div>
										</div>

                                        <!-- FIN FILTRO CATEGORIA -->
<!-- FILTRO MARCA -->
                                        <div class="control-group">
											<label class="control-label" for="basicinput"></label>
											<div class="controls">
												<div class="dropdown">
													<a class="dropdown-toggle btn" data-toggle="dropdown" href="#">Filtrar marcas <i class="icon-caret-down"></i></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<li><a href="#"><?php 
				$arrMarcas = json_decode(file_get_contents(DIR_BASE.'admin/datos/marca.json'),true);
				foreach($arrMarcas as $mar ){
			?>
					<a href="listadoproductos.php?marca=<?php echo $mar['nombre']?>&categoria=<?php echo (isset($_GET['categoria']))?$_GET['categoria']:""; ?>">
					     <span class="icon-chevron-right"></span><?php echo $mar['nombre']?>
				    </a></br></br>
			<?php } ?>
			<a href="listadoproductos.php?marca=&categoria=<?php echo (isset($_GET['categoria']))?$_GET['categoria']:""; ?>"><span class="icon-chevron-right"></span>Todas</a></a></li>
														
													</ul>
												</div>
											</div>
										</div>
<!-- FIN FILTRO MARCA -->



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
  <!-- LOGICA -->
                                    <?php foreach(businessObtenerProductos() as $prod){

                                       
                                        $print = true;
                       
                            if(!empty($_GET['categoria']) AND $print){
                                if($prod['categoria'] != $_GET['categoria']) $print = FALSE;
                            }

                            if(!empty($_GET['marca']) AND $print){
                                if($prod['marca'] != $_GET['marca']) $print = FALSE;
                            }

                            if($print){ 							
                     ?>

                                    <tr>
                                        <td><?php echo cortar_palabras($prod['id'],555)?></td>
                                        <td><?php echo $prod ["nombre"] ?></td>
                                        <td><?php echo $prod ["categoria"] ?></td>
                                        <td><?php echo $prod ["marca"] ?></td>
                                        <td><?php echo $prod ["precio"] ?></td>
                                        <td> <?php echo $prod ["activa"] ?></td>
                                        <td>
                                            <a href="ABM/formularioProducto.php?edit=<?php echo $prod['id']?>"
                                                class="btn btn-warning">Editar</a>
                                            <a href="ListadoProductos.php?del=<?php echo $prod ['id']?>"
                                                class="btn btn-danger">Borrar</a>
                                        </td>
                                    </tr>
                                    <?php }} ?>
                                </tbody>
                            </table>

                        </div>
                     </div>
                
                
                
                
                </div>

            </div>
        </div>    
    </div> 
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