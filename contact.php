<?php
include_once('admin/config/config.php');
?>


<?php
require_once(DIR_BASE.'/include/header.php');	
require_once(DIR_BASE.'/admin/Business/contactBusiness.php');

if(!empty($_POST['email'])){
    var_dump($_POST);
    sendMail($_POST);
}
?>
            </div>
        </div>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- contact -->
        <div class="contact">
            <div class="container">
                <h3>Catch us</h3>
                <div class="contact-content">
                    <form action="" method="post">
                        <input type="text" name="name" class="textbox" value=" Your Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}"><br>
                        <input type="text" name="email" class="textbox" value="Your E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your E-Mail';}"><br>
                            <div class="clear"> </div>
                        <div>
                            <textarea value="Message:" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Message ';}">Your Message</textarea><br>
                        </div>	
                       <div class="submit"> 
                            <input class="btn btn-default cont-btn" type="submit" value="SEND " />
                      </div>
                    </form>
                </div>
            </div>
        </div>
	   <!--contact-->
        <?php
         include_once(DIR_BASE.'/include/footer.php');
        ?>