<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Island Express | About Us</title>
	<link rel="icon" href="../img/logo.png">
	<link rel="stylesheet" href="../css/about.css">
	<link rel="stylesheet" href="../css/main.css">
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
					<li class="current"><a href="about.php">About</a></li>
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

	<section id="showcase">
		<section id="aboutus">
			<div class="container">
				<div class="about">
					<h1 class="headline">About Us</h1>
					<p class="paragraph1">Island Express is the leading online train reservation <br>provider in the country.<br>
						Our core value differentiator is the most trusted user experience <br>be it in terms of quickest search and booking <br> fastest payments processes.</p><br>
					<p class="paragraph2">We offer web-based payment solutions to over 10k merchants and allow consumers to makepayments from cards <br> Bank Accounts and Digital Credit among others.<br>
					</p>
				</div>
		</section>
	</section>

	<!--including FOOTER-->
	<?php include "footer.php" ?>
</body>

</html>
