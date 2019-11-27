<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Island Express | FAQ</title>
	<link rel="icon" href="../img/logo.png">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/faq.css">
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

	<main class="list">
		<div id="section">
			<h1 class="faq">FAQ</h1>
			<ul class="list1">
				<li>What is the Island Express</li>
				<p class="tag">Island Express is the largest online train reservation system in Sri Lanka.You can easily search train schedules, <br> reserve tickets and more services by using this system.</p>
				<li>How can I sign in?</li>
				<p class="tag">you can use your email address and sign in to our services.</p>
				<li>Why can't I sign in?</li>
				<p class="tag">check your email address and try again.</p>
				<li>Which payment method do I have to use?</li>
				<p class="tag">Visa, PayPal, Amex, Master card</p>
				<li>Where can I find the time table?</li>
				<p class="tag">Go Services<br>Time tables</p>
				<li>Why I have to input my phone number?</li>
				<p class="tag">We can send your registration ID to your phone number.<br>We can inform you to any Postponification of train times </p>
			</ul>
		</div>
	</main>

	<!--including footer-->
	<?php include "footer.php" ?>
</body>

</html>
