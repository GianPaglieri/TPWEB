 <div class="quick-view">
                        <a href="single.php">Quick view</a>
                    </div>
                </div>
        <div class="clearfix"></div>
            </div>
        </div>
        <div class="sub-news">
            <div class="container">
                <form>
                    <h3>NewsLetter</h3>
                <input type="text" class="sub-email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                <a class="btn btn-default subs-btn" href="#" role="button">SUBSCRIBE</a>
                </form>
            </div>
        </div>
        <div class="footer-grid">
            <div class="container">
                <div class="col-md-2 re-ft-grd">
                    <h3>Categories</h3>
                    <ul class="categories">
<!-- filtro categoria -->
                    <ul class="nav nav-list">
                    <?php 
				$arrCat = json_decode(file_get_contents('admin/datos/categoria.json'),true);
				foreach($arrCat as $cat ){
			?>
					<li><a href="products.php?categoria=<?php echo $cat['nombre']?>&marca=<?php echo (isset($_GET['marca']))?$_GET['marca']:""; ?>">
					        <span class="icon-chevron-right"></span><?php echo $cat['nombre']?>
					    </a></li>
                        <li class="divider"></li>
			<?php } ?>
			<li><a href="products.php?categoria=&marca=<?php echo (isset($_GET['marca']))?$_GET['marca']:""; ?>"><span class="icon-chevron-right"></span>Todas</a></li>
                </div>
<!-- fin filtro categorias   -->           
                <div class="col-md-2 re-ft-grd">
                    <h3>Marcas</h3>
                    <ul class="nav nav-list">
<!-- filtro marcas -->
                    <?php 
				$arrMarcas = json_decode(file_get_contents('admin/datos/marca.json'),true);
				foreach($arrMarcas as $mar ){
			?>
					<li><a href="products.php?marca=<?php echo $mar['nombre']?>&categoria=<?php echo (isset($_GET['categoria']))?$_GET['categoria']:""; ?>">
					     <span class="icon-chevron-right"></span><?php echo $mar['nombre']?>
				    </a></li>
                    <li class="divider"></li>
			<?php } ?>
			<li><a href="products.php?marca=&categoria=<?php echo (isset($_GET['categoria']))?$_GET['categoria']:""; ?>"><span class="icon-chevron-right"></span>Todas</a></li>
<!-- fin filtro marcas -->
                </div>
                <div class="col-md-6 re-ft-grd">
                    <h3>Social</h3>
                    <ul class="social">
                        <li><a href="https://es-la.facebook.com/" class="fb">facebook</a></li>
                        <li><a href="https://twitter.com/?lang=es" class="twt">twitter</a></li>
                        <li><a href="https://www.instagram.com/" class="gpls">instagram</a></li>
                        <div class="clearfix"></div>
                    </ul>
                </div>
                <div class="col-md-2 re-ft-grd">
                    <div class="bt-logo">
                        <div class="logo">
                            <a href="index.php" class="ft-log">AllShoes.com</a>
                        </div>
                    </div>
                </div>
        <div class="clearfix"></div>
            </div>
            <div class="copy-rt">
                <div class="container">
            <p>&copy;   2021 N-AIR All Rights Reserved. Design by <a href="https://www.nike.com/ar/">Nike</a></p>
                </div>
            </div>
        </div>
    </body>
</html>