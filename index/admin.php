<?php
session_start();
if ($_SESSION['about'] != "Admin") {
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="../img/logo.png">
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="../css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | <?php echo $_SESSION['username']; ?></title>
</head>

<body>
  <header>
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">Island</span>Express</h1>
      </div>
      <nav>
        <ul>
          <?php
          // if ($_SESSION['about'] == "Admin") {
          //   include('nav-admin.php');
          // } else {
          //   include('nav-user.php');
          // }

          ?>
          <li><a href="Home.php">Home</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="timetable.php">Booking</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contactus.php">ContactUs</a></li>
          <li>
            <?php
            if (isset($_SESSION['username'])) {
              echo '<form action="server/logoutServer.php" method="POST">
								<button type="submit" name="logout" id="logout">Log out</button>
							  </form>';
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
    <div class="userdetails">

      <?php
      if (isset($_SESSION['avater'])) {
        echo "$fileDestination";
      } else {
        echo '<img src="../img/userlogo.png" alt="">';
      }

      ?>




      <h2><?php echo $_SESSION['username']; ?></h2>
      <table>
        <tr>
          <td>Contact Number : </td>
          <td><?php echo $_SESSION['phone']; ?></td>
        </tr>
        <tr>
          <td>From : </td>
          <td><?php echo $_SESSION['address_2']; ?></td>
        </tr>
        <tr>
          <td>About : </td>
          <td><?php echo $_SESSION['about']; ?></td>
        </tr>

        <tr>
          <td>E-mail : </td>
          <td><?php echo $_SESSION['email']; ?></td>
        </tr>

      </table>
    </div>


    <div class="today">
      <table>
        <tr id="tit1">
          <th>Today profit</th>
          <th>This month</th>
          <th>This month total</th>
        </tr>
        <tr id="value1">
          <td>5 124 LKR</td>
          <td>120 576 LKR</td>
          <td>1 243</td>
        </tr>
      </table>
    </div>

    <div class="month">
      <table>
        <tr id="tit2">
          <th>Visitors</th>
          <th>Views</th>
          <th>Total members</th>
        </tr>
        <tr id="value2">
          <td>845</td>
          <td>58 426</td>
          <td>12 750</td>
        </tr>
      </table>
    </div>

    <div class="button-links">
      <table>
        <tr>
          <td>
            <a href="admin-booking.php"><button>Booking List</button></a>
          </td>
        </tr>
        <tr>
          <td>
            <a href="adddetails.php"><button>Add Details</button></a>
          </td>
        </tr>
        <tr>
          <td>
            <a href=""><button>Booking List</button></a>
          </td>
        </tr>
      </table>
    </div>

    <div class="block">
      <div class="bookingCl">
        <h4>Members</h4>
        <div class="scroll" onscroll="myFunction()">
          <div class="requests">
            <table class="users">
              <tr class="users-caption">
                <th>Id</th>
                <th>About</th>
                <th>Username</th>
                <th>Remove</th>
              </tr>

              <?php
              require 'server/config.php';
              $sql = "SELECT * FROM user";
              $result = mysqli_query($db, $sql);
              //$row = $result->fetch_assoc();
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_array()) {
                  $id = $row['id'];
                  $userabout = $row['about'];
                  $username_1 = $row['username'];
                  //echo "<button type='submit' >Remove</button>";
                  ?>

                  <tr class="display-details">
                    <td><?php echo $id; ?></td>
                    <td><?php echo $userabout; ?></td>
                    <td><?php echo $username_1; ?></td>
                    <td>
                      <!-- <form action="" method="POST"> -->
                      <a href="server/helpServer.php?id=<?php echo $id ?>">
                        <button type="submit" name="remove">Remove</button>
                      </a>
                      <!-- </form> -->
                    </td>
                  </tr>

                <?php }
            } ?>
            </table>

          </div>
        </div>
      </div>


      <div class="conversations">
        <h4>Conversations</h4>
        <div class="scroll">
          <div class="requests">
            <table class="conversations">
              <tr class="user-conversations">
                <th>Id</th>
                <th>Name</th>
                <th>Message</th>
                <th>Remove</th>
              </tr>

              <?php
              require 'server/helpServer.php';
              $sql1 = "SELECT * FROM details";
              $result = mysqli_query($db, $sql1);
              //$row = $result->fetch_assoc();
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_array()) {
                  $id = $row['id'];
                  $userName = $row['names'];
                  $userMsg = $row['messages'];
                  //echo "<button type='submit' >Remove</button>";
                  ?>

                  <tr class="display-details-msg">
                    <td><?php echo $id; ?></td>
                    <td><?php echo $userName; ?></td>
                    <td><?php echo $userMsg; ?></td>
                    <td>
                      <form action="">
                        <button type="submit" class="reply">Reply</button>
                      </form>
                    </td>
                  </tr>

                <?php }
            } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--including FOOTER-->
  <?php include "footer.php" ?>
  <!--End FOOTER section-->
</body>

</html>
