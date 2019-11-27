

<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Island Express | Welcome</title>
	<link rel="icon" href="../img/logo.png">
	<link rel="stylesheet" href="../css/home.css">
	<link rel="stylesheet" href="../css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="../java/home.js"></script>
</head>

<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><span class="highlight">Island</span>Express</h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="Home.php">Home</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="timetable.php">Booking</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contactus.php">ContactUs</a></li>
					<li>
						<?php
						if (isset($_SESSION['username'])  === 'Admin1') {
							echo '<a href="admin.php"><img class="user_logo" src="../img/userlogo.png"></a>';
						} else if (isset($_SESSION['username'])) {
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
		<section id="about">
			<div class="islandEx">Island Express</div>We are the leading online train reservation provider in our country.<br />
			<div class="goal">Our goal</div>Make better service for you.<br />
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

	<!--including FOOTER-->
	<?php include "footer.php" ?>

</body>

</html>
