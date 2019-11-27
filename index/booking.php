<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Island Express | Booking</title>
	<link rel="icon" href="../img/logo.png">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/booking.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="../java/booking.js"></script>
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

	<section id="showcase">
		<section id="booking">
			<div class="container">
				<h4>Train Ticket Booking</h4>

				<form method = "GET">
						<label type="from">From</label><label type="to">to</label><br />
						<?php
						$from = $_GET['from'];
						$to = $_GET['to'];
							echo "<input type='from' name='from' value = '$from'>";
							echo "<input type='to' name='to' value = '$to'>";
						?>
					<div class="passenger">
						<input type="radio" name="item" onload="pOri(0)" onclick="pOri(0)" id="passenger" checked value = "1">Passenger</div>
					<div class="item">
						<input type="radio" name="item" onload="pOri(1)" onclick="pOri(1)" id="item" value = "2">Item</div>
					<section id="pass">
						<label type="passengers">How many Passengers</label><br />
						<input type="passengers" name = "passengers" value = "1">
					</section>
					<section id="ite">
						<label type="weight">Weight(Kg)</label><br />
						<input type="weight" name ="weight" value = "1">
					</section>
					<label type="date">Date</label><br />
					<input type="Date" name= "date">
					<button type="submit" class="button_3" name="submit" value="submit">Calculate</button><br />
					<p><a href="timetable.php">Go to Time table</a></p>
					<p><a href="helps.php">Helps</a></p>
				</form>
				<?php
					include 'server/paymentdata.php';

					//Calculator for calculat the totel amount
					if (isset($_GET['submit'])){
						$from = $_GET['from'];
						$to = $_GET['to'];
						$passengers = $_GET['passengers'];
						$item = $_GET['item'];
						$weight = $_GET['weight'];
						$userName = $_SESSION['username'];
						$date = $_GET['date'];
						$i = 1;
						$amount = 0;

							//When form and to variables are not equal to the 0 continu
							if ($from != $to){
								if ($from === $to){
									echo "<center><p class = 'errorCities'>YOU CAN'T SELECT SAME CITIES!!</p></center>";
								}
								else{
									if ($item == 1){
										if ($date == 0){
											echo "<p class = 'errorDate'>PLEASE ENTER THE DATE!</p>";
										}
										else if($passengers == 0){
											echo "<p class = 'errorWeight'>PLEASE ENTER THE PASSENGERS!</p>";
										}
										else{
											$sql = "SELECT amountPerPas FROM payamount WHERE cityFrom = '$from' AND cityTo = '$to'";
			 								$result = $conn-> query($sql);
											if ($result-> num_rows > 0){
												while($row = $result -> fetch_assoc()){
													$amount = $row['amountPerPas'] * $passengers;
												}
												if (isset ($_SESSION['username'])){
													echo "<p class = 'amount' name = 'amount'>$amount LKR</p>";
													echo "<a href='payment.php'><button class = 'button_4'>Pay</button></a>";
												}
												else{
													echo "<center><p class='errorlog'><a href='login.php'>Please login first</button></a></p></center>";
												}
											}
										$sql = "INSERT INTO pay (userName, cityfrom, cityto, amount, date) VALUES ('$userName', '$from', '$to', '$amount', '$date');";
										mysqli_query($conn, $sql);
										}
									}
									else if ($item == 2){
										if($weight == 0){
											echo "<p class = 'errorWeight'>PLEASE ENTER THE WEIGHT!</p>";
										}
										else if ($date == 0){
											echo "<center><p class = 'errorDate'>PLEASE ENTER THE DATE!</p></center>";
										}
										else{
											$sql = "SELECT amountPerKG FROM payamount WHERE cityFrom = '$from' AND cityTo = '$to'";
			 								$result = $conn-> query($sql);

											if ($result-> num_rows > 0){
												while($row = $result -> fetch_assoc()){
													$amount = $row['amountPerKG'] * $weight;
												}
												if (isset ($_SESSION['username'])){
													echo "<p class = 'amount' name = 'amount'>$amount LKR</p>";
													echo "<a href='payment.php'><button class = 'button_4'>Pay</button></a>";
												}
												else{
													echo "<center><p class='errorlog'><a href='login.php'>Please login first</button></a></p></center>";
												}
											}
										$sql = "INSERT INTO pay (userName, cityfrom, cityto, amount, date) VALUES ('$userName', '$from', '$to', '$amount', '$date');";
										mysqli_query($conn, $sql);
										}
									}
								}
							}
							else{
								echo "<center><p class = 'errorCities'>PLEASE SELECT A CITIES!</p></center>";
							}
						}
					?>
			</div>
		</section>
	</section>
	<!--including FOOTER-->
	<?php include "footer.php" ?>
</body>

</html>
