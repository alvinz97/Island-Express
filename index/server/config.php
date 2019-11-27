<?php
//Connect to the database
$db = mysqli_connect("localhost", "root", "", "island_express");

if (!$db) {
    die("Connection Failed! " . mysqli_connect_error());
}
