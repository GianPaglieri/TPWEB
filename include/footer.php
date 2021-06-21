  <!-- end normal -->
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
                        <?php
                         $arraycat = json_decode(file_get_contents('admin/datos/categoria.json'),TRUE);	
                         foreach($arraycat as $categorias){        
                         ?>
                        <li><a href="#"><?php echo $categorias['nombre']?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-md-2 re-ft-grd">
                    <h3>Marcas</h3>
                    <ul class="shot-links">
                        <?php
                         $arraymarca = json_decode(file_get_contents('admin/datos/marca.json'),TRUE);	
                         foreach($arraymarca as $marcas){        
                         ?>
                        <li><a href="#"><?php echo $marcas['nombre']?></a></li>
                        <?php } ?>
                    </ul>
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