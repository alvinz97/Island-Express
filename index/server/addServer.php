<?php

$db = mysqli_connect("localhost", "root", "", "island_express");

if (!$db) {
  die("Connection failed". mysqli_connect_error());
}

$from = "";
$to = "";
$time = "";
$errors = array();

if(isset($_POST['update'])) {
  $from = mysqli_real_escape_string($db, $_POST['from']);
  $to = mysqli_real_escape_string($db, $_POST['to']);
  $time = mysqli_real_escape_string($db, $_POST['time']);

if(empty($from)){
  array_push($errors, "can not be empty");
}
if(empty($to)){
  array_push($errors, "can not be empty");
}

if(empty($time)){
  array_push($errors, "can not be empty");
}
  // else{
  //   //$sql = "SELECT * FROM ;";
  //    //$sql = "SELECT * FROM timetable WHERE cityfrom =? OR cityto=? OR time=?;";
  // }

  if(count($errors) === 0) {
  $sql=" INSERT INTO timetable (cityfrom, cityto, time) VALUES('$from', '$to', '$time')";
  mysqli_query($db, $sql);
  header('location: ../adddetails.php');
  header('location: timetablelist.php'); //redirect o the login page
}
}
