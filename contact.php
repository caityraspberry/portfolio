

<?php
if($_POST["message"]) {
    mail("caityraspberry313@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
