<body>
    <div class="header">
        <div class="container">
            <div class="header-top">
                <div class="logo">
                    <a href="index.php">AllShoes.com</a>
                </div>
                <div class="login-bars">
                    <div class="total">
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <!---menu-----bar--->
                <div class="header-botom">
                    <div class="content white">
                        <nav class="navbar navbar-default nav-menu" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="clearfix"></div>
                            <!--/.navbar-header-->

                            <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav nav-font">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<b
                                                class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="products.php">Shoes</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Marcas<b
                                                class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-4 menu-img-pad">
                                                    <ul class="multi-column-dropdown">
                                                        <?php 
			                                            	$arrMarcas = json_decode(file_get_contents('admin/datos/marca.json'),true);
				                                            foreach($arrMarcas as $mar ){
			                                        ?>
                                                        <li><a
                                                                href="products.php?marca=<?php echo $mar['nombre']?>&categoria=<?php echo (isset($_GET['categoria']))?$_GET['categoria']:""; ?>">
                                                                <span
                                                                    class="icon-chevron-right"></span><?php echo $mar['nombre']?>
                                                            </a></li>
                                                            <li class="divider"></li>
                                                        <?php } ?>
                                                        <li><a
                                                                href="products.php?marca=&categoria=<?php echo (isset($_GET['categoria']))?$_GET['categoria']:""; ?>"><span
                                                                    class="icon-chevron-right"></span>Todas</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4 menu-img-pad">
                                                    <a href="#"><img src="images/menu1.jpg" alt="/"
                                                            class="img-rsponsive men-img-wid" /></a>
                                                </div>
                                                <div class="col-sm-4 menu-img-pad">
                                                    <a href="#"><img src="images/menu2.jpg" alt="/"
                                                            class="img-rsponsive men-img-wid" /></a>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categoria<b
                                                class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-2">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <ul class="multi-column-dropdown">
                                                        <?php 
				                                            $arrCat = json_decode(file_get_contents('admin/datos/categoria.json'),true);
			                                            	foreach($arrCat as $cat ){
                                                        ?>
                                                        <li><a
                                                                href="products.php?categoria=<?php echo $cat['nombre']?>&marca=<?php echo (isset($_GET['marca']))?$_GET['marca']:""; ?>">
                                                                <span
                                                                    class="icon-chevron-right"></span><?php echo $cat['nombre']?>
                                                            </a></li>
                                                            <li class="divider"></li>
                                                        <?php } ?>
                                                        <li><a
                                                                href="products.php?categoria=&marca=<?php echo (isset($_GET['marca']))?$_GET['marca']:""; ?>"><span
                                                                    class="icon-chevron-right"></span>Todas</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="#"><img src="images/menu3.jpg" alt="/"
                                                            class="img-rsponsive men-img-wid" /></a>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li><a href="contacto.php">Catch</a></li>
                                    <div class="clearfix"></div>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <!--/.navbar-collapse-->
                            <div class="clearfix"></div>
                        </nav>
                        <!--/.navbar-->
                        <div class="clearfix"></div>
                    </div>
                    <!--/.content--->
                </div>
                <!--header-bottom-->
            </div>
        </div>