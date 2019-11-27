<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Island Express | Time Table</title>
  <link rel="icon" href="../img/logo.png">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/timetable.css">
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
          <li><a href="services.php">Services</a></li>
          <li class="current"><a href="timetable.php">Booking</a></li>
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

  <section id="basic">
    <section id="showcase">
      <div class="main">
        <h1>Train Time Table</h1>
        <form action = "avbtrains.php" method = "POST">
          <ul class="from_to">
            <li class="listfrom">From</li>
            <li class="list_to">To</li>
          </ul>
          <!--Choose an option start-->
          <ul id="option">
            <select class="city_from" name="from">
							<option>--Cities--</option>
							<option>Colombo</option>
							<option>Maradana</option>
							<option>Gampaha</option>
							<option>Polgahawela</option>
							<option>Kandy</option>
							<option>Anuradhapura</option>
							<option>Badulla</option>
							<option>Omanthai</option>
							<option>Matara</option>
							<option>Beliatta</option>
            </select>

            <select class="city_to" name="to">
							<option>--Cities--</option>
							<option>Colombo</option>
							<option>Maradana</option>
							<option>Gampaha</option>
							<option>Polgahawela</option>
							<option>Kandy</option>
							<option>Anuradhapura</option>
							<option>Badulla</option>
							<option>Omanthai</option>
							<option>Matara</option>
							<option>Beliatta</option>
            </select>
            <!--Choose an option end-->
          </ul>
          <input class="btn" type="submit" name="submit">
          <p>Go to <a href="helps.php">Helps</a> </p>
        </form>
      </div>
    </section>
  </section>



  <!--including FOOTER-->
  <?php include "footer.php" ?>
</body>

</html>
