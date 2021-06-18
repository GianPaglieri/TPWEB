<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../config/config.php');
include('../includes/header.php');


include(DIR_BASE.'/admin/includes/sidebar.php');
include_once(DIR_BASE.'/admin/Business/productosBusiness.php');
include_once(DIR_BASE.'/admin/Business/categoriasBusiness.php');
include_once(DIR_BASE.'/admin/Business/marcasBusiness.php');

if(isset($_POST['submit'])){
  if(!empty($_GET['edit'])){
      businessModificarProducto($_POST,$_GET['edit']);
  }else{
      businessGuardarProducto($_POST);
  }

  redirect('productosListado.php');
}

$producto = array( 'nombre' => '','precio' => '','categoria' => '','marca' => '','activa' => '','descripcion'=>'', 'imagen' => '');
if(!empty($_GET['edit'])){
  $producto = businessObtenerProducto($_GET['edit']);
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Agregar/Editar Productos</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary"> 
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" value="<?php echo $producto['nombre']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Categoría</label>
                    <select name="categoria">
                      <?php foreach(businessObtenerCategorias() as $cat){?>
                        <option value="<?php echo $cat['id']?>" <?php echo ($cat['id'] == $producto['categoria'])?'selected':'' ?>> <?php echo $cat['nombre']?></option>
                      <?php } ?>
                    </select>
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Precio</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="precio" value="<?php echo $producto['precio']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Activo</label>
                    <input type="checkbox" class="form-check-label" id="exampleInputEmail1" value="true" name="activa" <?php echo ($producto['activa']==TRUE)?'checked':'' ?>>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Descripción</label>
                    <textarea class="form-control" name="descripcion"><?php echo $producto['descripcion']?></textarea>
                  </div>
                 <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="imagen" class="custom-file-input" id="exampleInputFile">  
                        <input type="hidden" name="old_imagen" value="<?php echo $producto['imagen'] ?>" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div> 
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
  <?php

include('inc/footer.php'); 

?>
