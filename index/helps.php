<?php
require 'server/helpServer.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Island Express | Helps</title>
  <link rel="icon" href="../img/logo.png">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/helps.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          <li class="current"><a href="services.php">Services</a></li>
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

  <!--Start main section-->
  <section id="basic">
    <section id="showcase">
      <h1>Need a help ?</h1>

      <div class="main">
        <form action="server/helpServer.php" method="POST">
          <ul>
            <li class="listname">Your Name </li>
            <li class="listmail">E-mail Address</li>
          </ul>
          <ul class="listsel">
            <input class="name" type="text" name="name" value="" placeholder="Write Your Name ">
            <input class="mail" type="text" name="email" value="" placeholder="Write Your E-mail ">
            <h4 class="texth4">How can we help you ?</h4>
            <textarea class="textArea" name="message" placeholder="White a message"></textarea>
          </ul>
          <button class="sendButton" type="submit" name="send"> Send </button>
          <button class="cancelButton" type="submit" name="cancel"> Cancel </button>
          <ul class="inDiv">
            <li> Go to <a href="faqs.php"> FAQs</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>
        </form>
      </div>
    </section>
  </section>
  <!--End main section-->

  <!--Start FOOTER section-->
  <?php include "footer.php" ?>
</body>
<!--End FOOTER section-->

</html>
