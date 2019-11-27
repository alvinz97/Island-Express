<?php
    $cityFrom = $_POST['cityFrom'];

    if (!empty($cityFrom)){
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "island_express";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
        }
        else{
            $INSERT = "INSERT Into temp (cityFrom) values(?)";
        }
    }
    else{
        echo "All field are required";
        die();
    }