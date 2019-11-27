<?php
  include_once 'server/cities.php';
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Island Express | Time Table</title>
  <link rel="icon" href="../img/logo.png">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/avbtrain.css">
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

  <section id="basic">
    <section id="showcase">
      <div class="main">
        <h1>Available trains</h1>
        <?php
          if (isset($_POST['submit'])){
            $from = $_POST['from'];
            $to = $_POST['to'];

            $sql = "SELECT * FROM timetable WHERE cityfrom='$from' && cityto ='$to';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
              while($row = mysqli_fetch_assoc($result)){
                $city_from = $row ['cityfrom'];
                $city_to = $row['cityto'];
                $time = $row['time'];

                echo "<form action= 'booking.php' method = 'GET'><input type = 'text' name = 'from' value = '$city_from'> to <input type = 'text' name = 'to' value = '$city_to'> $time</p><br><button type = 'submit' name = 'submit'>select</button></form>" ;
              }
            }
            else{
              echo "No trains available";
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
