<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Island Express | Services</title>
	<link rel="icon" href="../img/logo.png">
	<link rel="stylesheet" href="../css/services.css">
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

	</section>
	<section id="showcase">
		
	<section id="booking">
			<div class="container">
        		<h4>Train Time Table</h4>
        		<form action = "avbtrains.php" method = "POST">
					<label>From</label><br/>
            		<select type="from" name="from">
						<option>Select</option>
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
					</select><br/>
					
					<label>To</label><br />
            		<select type = "to" name="to">
						<option>Select</option>
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
            		</select><br/>
					<button type="submit" class="button_3" name="submit">Search</button><br/>
          		<p>Go to <a href="helps.php">Helps</a> </p>
        		</form>
			</div>
		</section>
		<section id="goto">
			<div class="container">
				<h4>Go to</h4>
				<li><a href="timetablelist.php">Time table<br /></a></li>
				<li><a href="helps.php">Helps<br /></a></li>
				<li><a href="faqs.php">FAQs<br /></a></li>
				<li><a href="policy.php">Privacy Policy<br /></a></li>
			</div>
		</section>
	</section>
	<section id="populartrains">
		<h2>Popular trains<br /></h2>
		<div class="box">
			<a href="booking.php?from=Maradana&to=Matara">
				<img src="../img/maratomata.png">
				<h5>Maradana to Mathara</h5>
			</a>
		</div>
		<div class="box">
			<a href="booking.php?from=Colombo&to=Badulla">
				<img src="../img/colotobadu.png">
				<h5>Colombo to Badulla</h5>
			</a>
		</div>
		<div class="box">
			<a href="booking.php?from=Palgahawela&to=Colombo">
				<img src="../img/polgaoffi.png">
				<h5>Polgahawela to Colombo</h5>
			</a>
		</div>
		<div class="box">
			<a href="booking.php?from=Colombo&to=Omanthai">
				<img src="../img/omanthai.png">
				<h5>Colombo to Omanthai</h5>
			</a>
		</div>
		</div>
	</section>
	<!--including header-->
	<?php include "footer.php" ?>
</body>

</html>