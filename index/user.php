<?php
session_start();

//if user is not logged in, the cannot access this page
if (empty($_SESSION['username']) || !empty($_SESSION['username'] == "Admin1")) {
  header('location: login.php');
}
require 'server/logoutServer.php';
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="../img/logo.png">
  <link rel="stylesheet" href="../css/user.css">
  <link rel="stylesheet" href="../css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Account | <?php echo $_SESSION['username']; ?></title>
</head>

<body>

  <header>
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
            <form action="server/logoutServer.php" method="POST">
              <button type="submit" name="logout" id="logout">Log out</button>
            </form>
          </li>
        </ul>
      </nav>
    </div>
  </header>



  <div class="section">

    <div class="header">
      <h2>Edit Your Profile</h2>
    </div>
    <center>

      <div class="userdetails">

        <?php
        if (isset($_SESSION['avater'])) {
          echo "$fileDestination";
        } else {
          echo '<img src="../img/userlogo.png" alt="">';
        }

        ?>

        <h2><?php echo $_SESSION['username']; ?></h2>
        <table>
          <tr>
            <td>Name : </td>
            <td><?php echo $_SESSION['fname']; ?> <?php echo $_SESSION['lname']; ?> </td>
          </tr>
          <tr>
            <td>Contact Number : </td>
            <td><?php echo $_SESSION['phone']; ?></td>
          </tr>
          <tr>
            <td>From : </td>
            <td><?php echo $_SESSION['address_2']; ?></td>
          </tr>
          <tr>
            <td>About : </td>
            <td><?php echo $_SESSION['about']; ?></td>
          </tr>

          <tr>
            <td>E-mail Address : </td>
            <td><?php echo $_SESSION['email']; ?></td>
          </tr>

        </table>
      </div>
    </center>
    <div class="nav">
      <nav class="edits">
        <a href="policy.php">Privacy Policy</a>
        <a href="timetable.php">Time Table</a>
        <a href="helps.php">Help</a>
        <a href="faqs.php">FAQs</a>
        <a href="settings.php">Settings</a>
      </nav>
    </div>

    <div class="nav-right">
      <nav class="edits">
        <br> <br>
        <form action="server/serverEdit" method="POST">
          <a href="edituser.php" type="submit" name="edit">Edit Profile</a>
        </form> <br>
        <a href="bookinglist.php">My Booking List </a>
        <a href="bookinglist.php">Booking Cancel</a>
        <a href="refund.php">Refund Details</a>
        <a href="remove.php">Deactivate</a>

      </nav>
    </div>

  </div>

  <!--including FOOTER-->
  <?php include "footer.php" ?>
</body>

</html>
