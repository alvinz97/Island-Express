<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Island Express | Payment</title>
	<link rel="icon" href="../img/logo.png">
	<link rel="stylesheet" href="../css/payment.css">
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
		<div class="billing">
			<?php
				if($_POST){
					$errors = array();
					if(empty($_POST['cardnumber'])){
						$errors['cardnumber'] = "Enter the card number";
					}
					if(empty($_POST['nameoncard'])){
						$errors['nameoncard'] = "Enter the name on card";
					}
					if(empty($_POST['cvvnumber'])){
						$errors['cvvnumber'] = "Enter the CVV number";
					}
					if(empty($_POST['expirydate'])){
						$errors['expirydate'] = "Select the expir date";
					}

					if(count($errors) == 0){
						header ("location: paysuccess.php");
						exit();
					}
				}
			?>
			<form method="POST">

				<h1 class="bill">Billing details</h1>
				<ul class="image1">
					<li>Card type:<input type="radio" name="cardtype" value = "1"> <img class="image2" src="../img/visa.png" alt=""></li>
					<li><input type="radio" name="cardtype" value = "2"> <img class="image2" src="../img/mastercard.png" alt=""></li>
					<li><input type="radio" name="cardtype" value = "3"> <img class="image2" src="../img/american.png" alt=""></li>
					<li><input type="radio" name="cardtype" value = "4"> <img class="image2" src="../img/paypal.png" alt=""></li>
				</ul>
				<p> Card number:<input id="card" class="number" type="text" name="cardnumber"></p><br>
				<p2 calss = "error"><?php
					if(isset($errors['cardnumber'])){
						echo $errors['cardnumber'];
					}
					?>
				</p2><br>
				<p> Name on card:<input id="name" class="number" type="text" name="nameoncard"></p><br>
				<p2 calss = "error"><?php
					if(isset($errors['nameoncard'])){
						echo $errors['nameoncard'];
					}
					?>
				</p2><br>
				<p> CVV number:<input id="cvv" class="number" type="text" name="cvvnumber"></p><br>
				<p2 calss = "error"><?php
					if(isset($errors['cvvnumber'])){
						echo $errors['cvvnumber'];
					}
					?>
				</p2><br>
				<p> Expiry date:<input id="expiry" class="number" type="date" name="expirydate"></p><br>
				<p2 calss = "error"><?php
					if(isset($errors['expirydate'])){
						echo $errors['expirydate'];
					}
					?>
				</p2><br>
				<button type="submit" class="button_3" name = "submit">Pay now</button><br>
				<p class="pay1">or go back to <a href="home.php">Home</a></p>
			</form>
		</div>
	</section>
	<!--including header-->
	<?php include "footer.php" ?>
</body>

</html>