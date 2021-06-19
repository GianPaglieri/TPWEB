<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require("../config/config.php");
include_once(DIR_BASE.'/admin/helpers/urls.php');

include_once(DIR_BASE.'/admin/Business/productosBusiness.php');
include_once(DIR_BASE.'/admin/Business/categoriasBusiness.php');
include_once(DIR_BASE.'/admin/Business/marcasBusiness.php');

if(isset($_POST['submit'])){
  if(!empty($_GET['edit'])){
      businessModificarProducto($_POST,$_GET['edit']);
  }else{
      businessGuardarProductos($_POST);
  }

  redirect('../ListadoProductos.php');
}

$producto = array( 'nombre' => '','precio' => '','categoria' => '','marca' => '','activa' => '','descripcion'=>'', 'imagen' => '');
if(!empty($_GET['edit'])){
  $producto = businessObtenerProducto($_GET['edit']);
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo DaVinci</title>
    <link type="text/css" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="../css/theme.css" rel="stylesheet">
    <link type="text/css" href="../images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
<?php 
require(DIR_BASE."/admin/includes/navbar.php");
  require_once(DIR_BASE.'/admin/includes/header.php');
?></head>
<body>

<?php 
 
?>	
		
<?php 
 require(DIR_BASE."/admin/includes/sidebar.php");
?>				


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Agregar/Editar Productos</h3>
							</div>
							<div class="module-body">


									<br />

									<form class="form-horizontal row-fluid" action="" method="post">
										<div class="control-group">
											<label class="control-label" for="basicinput">Nombre</label>
											<div class="controls">
												<input type="text" id="basicinput" name="nombre" value="<?php echo $producto['nombre']?>"  class="span8">
												
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Categoria</label>
											<select name="categoria">
                                             <?php foreach(businessObtenerCategorias() as $cat){?>
                                             <option value="<?php echo $cat['id']?>" <?php echo ($cat['id'] == $producto['categoria'])?'selected':'' ?>> <?php echo $cat['nombre']?></option>
                                             <?php } ?>
                                            </select>
											
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Marca</label>
											<select name="marca">
                                             <?php foreach(businessObtenerMarcas() as $mar){?>
                                             <option value="<?php echo $mar['id']?>" <?php echo ($mar['id'] == $producto['marca'])?'selected':'' ?>> <?php echo $mar['nombre']?></option>
                                             <?php } ?>
                                            </select>
											
										 </div>

                                       
										<div class="control-group">
											<label class="control-label" for="basicinput">Precio</label>
											<div class="controls">
												<input type="text" id="basicinput" name="precio" value="<?php echo $producto['precio']?>" class="span8">
												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Activo</label>
											<div class="controls">
												<label class="checkbox inline">
													<input type="checkbox" value="true" name="activa" <?php echo ($producto["activa"]==TRUE)?'checked':'' ?>>
													
												</label>
												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Descripcion</label>
											<div class="controls">
												<textarea class="span8" name="descripcion" rows="5"> <?php echo $producto['descripcion']?> </textarea>
											</div>
										</div>



									

										

										

										

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Submit Form</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
        <div class="container">
            <b class="copyright">&copy; Equipo Davinci </b>All rights reserved.
        </div>
    </div>
    <script src="../scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="../scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="../scripts/flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="../scripts/common.js" type="text/javascript"></script>
</body>