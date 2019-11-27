<?php include("server/serverEdit.php");
require 'server/uploadServer.php';

//if user is not logged in, the cannot access this page
if (empty($_SESSION['username'])) {
  header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Island Express | Edit user</title>
  <link rel="icon" href="../img/logo.png">
  <link rel="stylesheet" href="../css/edituser.css">
  <link rel="stylesheet" href="../css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="../java/edituser.js" charset="utf-8"></script>
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
            <a href="user.php"><img class="user_logo" src="../img/userlogo.png"></a>
          </li>
        </ul>
      </nav>
  </header>


  <div class="header">
    <h2>Edit Your Profile</h2>
  </div>

  <form method="POST" action="server/serverEdit.php" enctype="multipart/form-data">
    <!--Display validation errors here-->
    <?php include("errors.php"); ?>

    <div class="mainDiv">
      <div class="content">
        <div class="row">
          <div class="col-left">
            <label for="firstName">First Name </label> <br>
            <input type="text" name="firstName" id="firstName" value="<?php echo $_SESSION['fname']; ?>">
            <div class="col_right">
              <label for="lastname">Last Name </label> <br>
              <input type="text" name="lastname" id="lastname" value="<?php echo $_SESSION['lname']; ?>">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-left">
            <label for="username">User Name </label> <br>
            <input type="text" name="username" id="username" value="<?php echo $_SESSION['username'] ?>">
            <div class="col_right">
              <label for="phone">Phone </label> <br>
              <input type="tel" name="phone" id="phone" value="<?php echo $_SESSION['phone'] ?>">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-left">
            <label for="location">Address Line 1</label> <br>
            <input type="text" name="location1" id="location" value="<?php echo $address1; ?>">
            <div class="col_right">
              <label for="location">Address Line 2</label> <br>
              <input type="text" name="location2" id="location2" value="<?php echo $_SESSION['address_2']; ?>">
            </div>
          </div>
        </div>

        <div class="user_image">
          <img id="user_img" src="../img/user2.png" alt=""> <br>
          <p>Change Profile picture</p> <br>
          <input type="file" name="avater" class="file" value="<?php echo $avater_path; ?>">
        </div>
      </div>

      <br>
      <div class="password">
        <div class="password_session">
          <div class="row">
            <div class="col">
              <label for="email">Email </label> <br>
              <input type="email" id="email" name="mail" value="<?php echo $_SESSION['email']; ?>">
            </div>
          </div>

          <div class="row">
            <div class="col">
              <label for="password">Password </label> <br>
              <input type="password" name="password" id="password">
              <p class="hint"> <span>Hint</span> The password should strong including at least <br> 1 uppercase, 1 lowercase and 1 number.
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <label for="password">Confirm Password </label> <br>
              <input type="password" name="confirm_password" id="confirm_password">
            </div>
          </div>
        </div>
      </div>

      <div class="buttons">
        <button type="reset" class="btn" id="reset" value="Reset">Reset</button>
        <button type="submit" class="btn" id="submit" name="save" value="Save Changes">Save Changes</button>
      </div>
    </div>
  </form>
  <!--including FOOTER-->
  <?php include "footer.php" ?>

</body>

</html>
