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

<!DOCTYPE html>
<html>

<head>
    <title>Send an Email</title>
</head>

<body>
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

    <h4 class="sent-notification"></h4>
    <div class="contact">
        <div class="container">
            <h3>Catch us</h3>
            <div class="contact-content">
                <form id="myForm">

                    <label></label>
                    <input id="name" type="text" class="textbox" placeholder="Enter Name">

                    <label></label>
                    <input id="email" type="text" class="textbox" placeholder="Enter Email">

                    <label></label>
                    <input id="subject" type="text" class="textbox" placeholder=" Enter Subject">

                    <p></p>
                    <textarea id="body" rows="5" placeholder="Type Message"></textarea>



                    <div class="submit">
                        <input class="btn btn-default cont-btn" onclick="sendEmail()" value="Send An Email" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
    function sendEmail() {
        var name = $("#name");
        var email = $("#email");
        var subject = $("#subject");
        var body = $("#body");

        if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
            $.ajax({
                url: 'sendEmail.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    name: name.val(),
                    email: email.val(),
                    subject: subject.val(),
                    body: body.val()
                },
                success: function(response) {
                    $('#myForm')[0].reset();
                    $('.sent-notification').text("Message Sent Successfully.");
                }
            });
        }
    }

    function isNotEmpty(caller) {
        if (caller.val() == "") {
            caller.css('border', '1px solid red');
            return false;
        } else
            caller.css('border', '');

        return true;
    }
    </script>

    <?php
         include_once(DIR_BASE.'/include/footer.php');
        ?>

</body>

</html>