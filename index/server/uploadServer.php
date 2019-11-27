<?php
require 'server/config.php';

if (isset($_POST['save'])) {
    $file = $_FILES['avater'];

    $fileName = $_FILES['avater']['name'];
    $fileTmpName = $_FILES['avater']['tmp_name'];
    $fileError = $_FILES['avater']['error'];
    $fileType = $_FILES['avater']['type'];

    $fileExtention = explode('.', $fileName);
    $fileActualExtention = strtolower(end($fileExtention));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExtention, $allowed)) {
        if ($fileError === 0) {
            $fileNameNew = uniqid('', true) . "." . $fileActualExtention;
            $fileDestination = 'upload_img/' . $fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
            $sql = "INSERT INTO profiles (avater) VALUES ( '$file')";
            mysqli_query($db, $sql);
            $_SESSION['avater'] = $file;
            header("location: user.php");
        } else {
            array_push($errors, "There was an error uploading your file ! ");
        }
    } else {
        array_push($errors, "You cannot upload file of this type ! ");
    }
}
