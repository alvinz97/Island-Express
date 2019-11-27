7<?php session_start();
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
				<table id="mainbox">
					<tr>
						<td><center>Booking ID</center></td>
						<td><center>From</center></td>
						<td><center>To</center></td>
						<td><center>Amount</center></td>
						<td><center>Date</center></td>
						<td><center>Order Action</center></td>
					</tr>
					<?php
						$userName = $_SESSION['username'];
						$conn = mysqli_connect("localhost", "root", "", "island_express");

			 			$sql = "SELECT id, cityfrom, cityto, amount, date FROM pay WHERE userName = '$userName'";
			 			$result = $conn-> query($sql);

			 			if ($result-> num_rows > 0){
							while($row = $result -> fetch_assoc()){
								echo "<tr><td>" . "<center>" . $row['id'] . "</center>" . "</td><td>" . "<center>" .  $row['cityfrom'] . "</center>" . "</td><td>" . "<center>" .  $row['cityto'] . "</center>" . "</td><td>" . "<center>" .  $row['amount'] . "(LKR)" . "</center>" . "</td><td>" . "<center>" .  $row['date'] . "</center>" . "</td></tr>";
							}
							echo "</table>";
			 			}
			 			else{
							echo "<tr><td></td><td></td><td>" . "0 result" . "</td></table>";
			 			}
			 			$conn -> close();
					?>
				</div>
			</section>
		</section>
	<!--End Booking section-->

	<!--including FOOTER-->
	<?php include "footer.php" ?>
</body>
<!--End FOOTER section-->
</html>
