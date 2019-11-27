<?php
require 'server/addServer.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>
<title>Island Express | Booking</title>
<link rel="icon" href="../img/logo.png">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/adddetails.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="../java/booking.js"></script>



<body>
  <header style="margin-top:-50px">
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">Island</span>Express</h1>
      </div>
      <nav>
        <ul>
          <li><a href="Home.php">Home</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="timetable.php">Booking</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contactus.php">ContactUs</a></li>
          <li>
            <?php
            if (isset($_SESSION['username'])) {
              echo '<a href="user.php"><img class="user_logo" src="../img/userlogo.png"></a>';
            } else {
              echo '<li>
              <a href="signin.php"><button type="submit" class="button_1">SignIn</button></a>
              </li>
              <li>
              <a href="login.php"><button type="submit" class="button_2">Login</button></a>
              </li>';
            }
            ?>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="header">
    <h2>Update Details</h2>
  </div>

  <form action="adddetails.php" method="POST">
    <!--Display validation errors here-->
    <?php include("errors.php"); ?>

    <div class="input-group">
      <label for="">From</label>
      <input type="text" name="from" value="">
    </div>
    <div class="input-group">
      <label for="">To</label>
      <input type="text" name="to">
    </div>
    <div class="input-group">
      <label for="">Time</label>
      <input type="text" name="time">
    </div>


    <div class="input-group">
      <button type="submit" name="update" . class="btn">Update</button>
      <button type="reset" name="reset" class="btn">Reset</button>
    </div>

  </form>


  <!--including FOOTER-->
  <?php include "footer.php" ?>
</body>

</html>
