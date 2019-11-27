<?php/*
session_start();
// Checking first page values for empty,If it finds any blank field then redirected to first page.
if (empty($_POST['fname'])|| empty($_POST['lname'])|| empty($_POST['username'])|| empty($_POST['phone'])|| empty($_POST['email'])|| empty($_POST['password'] || true)
		|| empty($_POST['confirm']) || empty($_POST['confirmpassword'])) {
 // Setting error message
$_SESSION['error'] = "Mandatory field(s) are missing, Please fill it again";
 header("location: nSignin.php"); // Redirecting to first page
	} else {
		$name= $_POST['fname'];
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
 // Sanitizing email field to remove unwanted characters.
	$email = $_POST['email'];
	}else{
		$_SESSION['error'] = "Invalid Email Address";
 header("location: nSignin.php");//redirecting to first page
}
if (preg_match("/^[0-9]{10}$/", $_POST['contact'])){
$contact= $_POST['contact'];
}else{
	$_SESSION['error'] = "10 digit contact number is required.";
	header("location: nSignin.php");

}if (($_POST['password']) === ($_POST['confirm']))  {
$password=$_POST['password'];

} else {
	$_SESSION['error'] = "Password does not match with Confirm Password.";
 header("location: nSignin.php"); //redirecting to first page

}
}

*/
?>






<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
	<link rel="icon" href="../img/logo.png">
  </head>
  <body>
    <h1>You are Successfully Registered</h1>
    <a href="user.php">Go to user profile</a>
  </body>
</html>
