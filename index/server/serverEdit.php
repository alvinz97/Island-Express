<?php
session_start();
$fname = "";
$lname = "";
$username = "";
$phone = "";
$address1 = "";
$address2 = "";
$mail = "";
$password = "";
$errors = array();


require 'config.php';
if (isset($_POST['edit'])) {
    # code...
}

//If the register button is clicked
if (isset($_POST['save'])) {
    $fname = mysqli_real_escape_string($db, $_POST['firstName']);
    $lname = mysqli_real_escape_string($db, $_POST['lastname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $address1 = mysqli_real_escape_string($db, $_POST['location1']);
    $address2 = mysqli_real_escape_string($db, $_POST['location2']);
    $mail = mysqli_real_escape_string($db, $_POST['mail']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    //ensure that form fields are fillde properly

    if (!empty($username)) {
        if (preg_match('/^[a-zA-Z0-9]{5,}$/', $username) == false) { //check the username
            array_push($errors, "User name can only have english chars + numbers & longer than or equals 5 chars ");
        } else { // check username has taken
            $sql = "SELECT username FROM user WHERE username = '$username';";
            $result = mysqli_query($db, $sql);
            $checkResult = mysqli_num_rows($result);

            if ($checkResult > 0) {
                array_push($errors, "This username has already taken ");
            }
        }
    }

    if (!empty($phone)) {
        if (empty($phone)) {
            array_push($errors, "Contact Number can not be empty ");
        } elseif (preg_match("/^[0-9]{10}$/", $phone) == false) { //check contact no includes 10 numbers
            array_push($errors, "Contact Number only can have 10 numbers ");
        }
    }

    if (!empty($address1)) {
        if (empty($address1)) {
            array_push($errors, "Address Line 1 can not be empty ");
        } elseif (empty($address2)) {
            array_push($errors, "Address Line 2 can not be empty ");
        }
    }


    if (!empty($password)) {
        if (!preg_match("#[0-9]+#", $password)) { // check the password does have at least 1 no
            array_push($errors, "Your Password Must Contain At Least 1 Number! ");
        } elseif (!preg_match("#[A-Z]+#", $password)) { // check the password does have at least 1 capital letter
            array_push($errors, "Your Password Must Contain At Least 1 Capital Letter!");
        } elseif (!preg_match("#[a-z]+#", $password)) { // check the password does have at least 1 lower case letter
            array_push($errors, "Your Password Must Contain At Least 1 Lowercase Letter!");
        }
    }


    //If there ara no errors, save to the database
    if (count($errors) == 0) {
        //$password_new = password_hash($password, PASSWORD_DEFAULT); //encrpt password before storing into databese

        //$sql = "UPDATE user SET fname =  $fname, lname =  $lname, username = $username, phone = $phone, address_2 =  $address1, email = $mail, password1 =  $password_new  WHERE user. id =  $id;";


        $sql = "UPDATE `user` SET `fname`=[ $fname],`lname`=[$lname],`username`=[$username],`phone`=[$phone],`address_2`=[ $address2],`email`=[ $mail],`password1`=[  $password] WHERE `id` = [ $id]";
        mysqli_query($db, $sql);
        $_SESSION['address_1'] = $address1;
        $_SESSION['address_2'] = $address1;
        //$_SESSION['success'] = "You are now Logged in";
        header('location: ../user.php'); //redirect o the home page
    }
}
