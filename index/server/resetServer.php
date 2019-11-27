<?php
$mail = "";
$captcha = "";
$errors = array();

//Connect to the database
require 'server/config.php';

//If the SUBMIT button is clicked
if (isset($_POST['signup'])) {
    $mail = mysqli_real_escape_string($db, $_POST['email']);
    $captcha = mysqli_real_escape_string($db, $_POST['captcha']);

    //ensure that form fields are fillde properly
    if (empty($mail)) {
        array_push($errors, "Email addres can not be empty ");
    }
    if (empty($captcha)) {
        array_push($errors, "Captcha code must be include ");
    }

    //If there ara no errors, save to the database
    if (count($errors) == 0) {
        $sql = "INSERT INTO user (email) VALUES ('$mail')";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now Logged in";
        header('location: index.php'); //redirect o the user page
    }
}
