<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Island Express | Contact Us</title>
	<link rel="icon" href="../img/logo.png">
	<link rel="stylesheet" href="../css/contactus.css">
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
					<li><a href="about.php">About</a></li>
					<li class="current"><a href="contactus.php">ContactUs</a></li>
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
			<div class="container">
				<h2>Contact Us</h2>
				<p>Use the contact information below to connect with us. If you any questions,
					comments or need help with your purchase, <br> please contact us at
					<a href="#">support@islandexpress.com</a> </p>

				<div class="left">
					<table id="left">
						<tr>
							<td class="data" id="data">Address :</td>
							<td class="info">Address line 1 <br>Address line 2 <br> Street <br> Postal code </td>
						</tr>
						<tr>
							<td id="data" class="phone">Phone : </td>
							<td class="pinfo">+94xxxxxxxx</td>
						</tr>
					</table>
				</div>
				<div class="right">
					<table>
						<tr>
							<td id="data">E-mail : </td>
							<td>info@islandexpress.com</td>
						</tr>
						<tr>

							<td id="data">Customer supports : </td>
							<td> support@islandexpress.com</td>
						</tr>
					</table>
				</div>
				<div class="follow">
					<h4 id="follow_text">Follow Us </h4>
					<a href="https://www.facebook.com/">
						<img src="../img/facebook.png"></a>
					<a href="https://www.linkedin.com/">
						<img src="../img/linkedin.png"></a>
					<a href="https://twitter.com/">
						<img src="../img/twitter.png"></a>
					<a href="#">
				</div>
			</div>
		</section>

	</section>
	</section>
</body>
<!--including FOOTER-->
<?php include "footer.php" ?>
</body>

</html>
