<?php
session_start();
$fname = "";
$lname = "";
$username = "";
$phone = "";
$gender = "";
$address2 = "";
$about = "";
$mail = "";
$mail2 = "";
$password = "";
$confirmPassword = "";
$errors = array();

//Connect to the database
require 'config.php';
//include ( "server/config.php");

//If the register button is clicked
if (isset($_POST['signup'])) {
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $address2 = mysqli_real_escape_string($db, $_POST['address2']);
    $about = mysqli_real_escape_string($db, $_POST['about']);
    $mail = mysqli_real_escape_string($db, $_POST['mail']);
    $mail2 = mysqli_real_escape_string($db, $_POST['mail2']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($db, $_POST['confirmPassword']);


    //ensure that form fields are filled properly

    if (empty($fname)) {
        array_push($errors, "First name can not be empty ");
    } elseif (empty($lname)) {
        array_push($errors, "Last name can not be empty ");
    } else if (empty($address2)) {
        array_push($errors, "Address can not be empty ");
    }
    if (empty($username)) {
        array_push($errors, "User name can not be empty ");
    } elseif (preg_match('/^[a-zA-Z0-9]{6,}$/', $username) == false) { //check the username
        array_push($errors, "User name can only have english chars + numbers & longer than or equals 6 chars ");
    } else { // check username has taken
        $sql = "SELECT username FROM user WHERE username = '$username';";
        $result = mysqli_query($db, $sql);
        $checkResult = mysqli_num_rows($result);

        if ($checkResult > 0) {
            array_push($errors, "This username has already taken ");
        }
    }
    if (empty($phone)) {
        array_push($errors, "Contact Number can not be empty ");
    } elseif (preg_match("/^[0-9]{10}$/", $phone) == false) { //check contact no includes 10 numbers
        array_push($errors, "Contact Number only can have 10 numbers ");
    }
    if (empty($mail)) {
        array_push($errors, "Email address can not be empty ");
        if (!empty($mail)) {
            if (filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
                array_push($errors, "Invalid Email address");
            }
        }
    }
    if ($mail != $mail2) {
        array_push($errors, "Confirm Email doesn't match with the Email ");
    }
    if (empty($password)) {
        array_push($errors, "Password can not be empty ");
    } else {
        if (!preg_match("#[0-9]+#", $password)) { // check the password does have at least 1 no
            array_push($errors, "Your Password Must Contain At Least 1 Number! ");
        } elseif (!preg_match("#[A-Z]+#", $password)) { // check the password does have at least 1 capital letter
            array_push($errors, "Your Password Must Contain At Least 1 Capital Letter!");
        } elseif (!preg_match("#[a-z]+#", $password)) { // check the password does have at least 1 lower case letter
            array_push($errors, "Your Password Must Contain At Least 1 Lowercase Letter!");
        }
    }
    if ($password != $confirmPassword) {
        array_push($errors, "Confirm password doesn't match with password");
    }

    //If there ara no errors, save to the database
    if (count($errors) == 0) {
        $password_new = password_hash($password, PASSWORD_DEFAULT); //encrpt password before storing in databese
        $hashConfirmPsd = password_hash($confirmPassword, PASSWORD_DEFAULT); //encrpt password before storing in databese
        $sql = "INSERT INTO user (fname, lname, username, phone, gender, address_2, about, email, confirm_email, password1, confirm_password)
VALUES ('$fname','$lname','$username','$phone',  '$gender', '$address2', '$about', '$mail', '$mail2', '$password_new',' $hashConfirmPsd')";
        mysqli_query($db, $sql);
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['username'] = $username;
        $_SESSION['phone'] = $phone;
        $_SESSION['email'] = $mail;
        $_SESSION['about'] = $about;
        $_SESSION['address_2'] = $address2;
        //$_SESSION['gender'] = $gender;
        header('location: user.php'); //redirect o the login page
    }
}
