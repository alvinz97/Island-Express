<?php
session_start();

if (isset($_POST['submit'])) {
  $sessionCaptcha = $_SESSION['captcha'];
  $formCaptcha = $_POST['captcha'];

  if ($sessionCaptcha == $formCaptcha) {
    header('location: user.php'); //redirect to USER ACCOUNT
  }
}
?>
<?php include("server/resetServer.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/resetpsd.css">
  <link rel="stylesheet" href="../css/main.css">
  <title>Forgotten Password</title>
</head>

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
    <h2 class="header_text">IslandExpress Account</h2>
  </div>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

    <div class="psd_section">
      <div class="psd_section2">
        <h3>Reset Your Password</h3> <br>
        <hr>
        <p>To reset your password, enter your IslandExpress account email and captcha below.</p>
        <p>Then we'll send instruction to your email address.</p>
        <hr> <br>

        <!--Display validation errors here-->
        <?php include("errors.php"); ?>

        <div class="input-group">
          <label for="">IslandExpress account email</label>
          <input type="email" name="email" placeholder="someone@example.com" value="<?php echo $mail; ?>">

          <div class="captcha">
            <div class="captcha_left">
              <label for="">Enter captcha</label>
              <input type="text" class="captcha" name="captcha">
            </div>
            <div class="captcha_right">
              <img class="captcha_img" src="captcha.php" alt="">
              <button type="cancel" name="cancel" id="refresh" class="btn">Refresh</button>
            </div>
          </div>
        </div>
        <div class="input-group">
          <button type="submit" name="submit" class="btn">Submit</button>
          <button type="cancel" name="cancel" class="btn">Cancel</button>
        </div>
      </div>
    </div>
  </form>

  <!--including FOOTER-->
  <?php include "footer.php" ?>
</body>

</html>
