<?php
##take data from form html
if ($_SERVER["Request_Method"] == "POST") {
    $name = htmlspecialchars($_POST["Name"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $dob = htmlspecialchars($_POST["d_of_b"]);
    $grade = htmlspecialchars($_POST["grade"]);
    $contact = htmlspecialchars($_POST["contact"]);
    $email = htmlspecialchars($_POST["email"]);
    $comment = htmlspecialchars($_POST["comment"]);

    
}
?>
