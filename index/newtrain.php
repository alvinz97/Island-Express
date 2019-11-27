<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="../img/logo.png">
  <link rel="stylesheet" href="../css/user.css">
  <link rel="stylesheet" href="../css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IslandExpress | User Account</title>
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
          <li><a href="booking.php">Booking</a></li>
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




      <div class="section">

        <div class="header">
          <h2>Update train details</h2>
        </div>
        <center>

          <div class="userdetails">




            <table>
              <tr>
                <td>From : </td>
                <td><?php echo $_SESSION['from ']; ?> <?php echo $_SESSION['lname']; ?> </td>
              </tr>
              <tr>
                <td>To : </td>
                <td><?php echo $_SESSION['to']; ?></td>
              </tr>
              <tr>
                <td>Time: </td>
                <td><?php echo $_SESSION['time']; ?></td>
              </tr>


            </table>
          </div>
        </center>




      </div>

      <!--including FOOTER-->
      <?php include "footer.php" ?>
    </body>

    </html>
