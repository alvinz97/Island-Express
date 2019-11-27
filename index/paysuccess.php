<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Island Express | History</title>
	<link rel="icon" href="../img/logo.png">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/bookinglist.css">
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

	<!--Start Booking section-->
	<section id="basic">
		<section id="showcase">
			<div class="mainbox">
        <center><h2>Your Book Has Successfully Placed</h2></center>
        <p></p>
        <center> Go To <a href="Home.php">Home</a></center>
        <p></p>
        <center> Go To <a href="bookinglist.php">booking list</a></center>
        <p></p>
        <center> Go To <a href="timetablelist.php">Time table</a></center>
        <p></p>
        <center> Go To <a href="timetable.php">booking</a></center>
        <p></p>
        <center> Go To <a href="user.php">User account</a></center> 
        <p></p>
			</div>
			</section>
		</section>
	<!--End Booking section-->

	<!--including FOOTER-->
	<?php include "footer.php" ?>
</body>
<!--End FOOTER section-->
</html>