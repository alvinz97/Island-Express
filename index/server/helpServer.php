<?php
//session_start();

$db = mysqli_connect("localhost", "root", "", "island_express");

if (!$db) {
    die("Connection Failed! " . mysqli_connect_error());
}

//If the user SEND button is clicked
if (isset($_POST['send'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $messages = mysqli_real_escape_string($db, $_POST['message']);

    $sql = "INSERT INTO details (names, email, messages ) VALUES ('$name', '$email', '$messages')";
    mysqli_query($db, $sql);

    header('location: ../helps.php'); //redirect to the home page
} /* else {
    header('location: helps.php'); //redirect to the helps page
} */

//Chech the user remove button clicked
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM `user` WHERE id=" . $id . "";
    if (mysqli_query($db, $query)) {
        header("Location: ../admin.php");
    } else {
        echo mysqli_error_no();
    }
}
