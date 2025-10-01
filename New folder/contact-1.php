<?php
##take data from form html
if ($_SERVER["Request_Method"] == "POST") {
    $name = htmlspecialchars($_POST["Name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
  
}
?>
