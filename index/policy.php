<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Island Express | Privacy and Policy</title>
  <link rel="icon" href="../img/logo.png">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/policy.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Saira+Extra+Condensed|Source+Sans+Pro" rel="stylesheet">
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

  <!--Start main section-->
  <section id="basic">
    <section id="showcase">
      <div class="text-area">

        <h1>Privacy Policy</h1>
        <h3>Intoduction</h3>
        <p>The IslandExpress recognises that your privacy is important, and we committed to protecting the personal data that we collect from you. IslandExpress includes four brands, which are </p>
        <ul>
          <li>Nothern Express</li>
          <li>Estern Express</li>
          <li>Southern Express</li>
          <li>Central Express</li>
        </ul>

        <h3>Collecting personal data</h3>
        <p>The IslandExpress will only collect and hold Personal Data about you that is reasonably necessary to undertake our normal activities, bookings and functions, or as otherwise permitted by law.</p>

        <h3>Why we collect your data </h3>
        <p>We may collect your Personal Data for one or more of the reasons outlined below.</p>
        <ul>
          <li>Providing our membership services to you including newsletters, and information about events.</li>
          <li>To assist with your enquiries</li>
          <li>We can inform you to any Postponification of train times</li>
          <li>For us to be able to contact you by email, phone number regarding your bookings, transactions or contracts you enter into us with</li>
        </ul>

        <h3>What kinds of personal data we collet</h3>
        <p>You are under no legal responsibility to provide your Personal Data. If however you do not provide us with your personal data it may affect our ability to offer you our products and services</p>
        <p>The types of Personal Data that we collect may include:</p>
        <ul>
          <li>Your name </li>
          <li>Contact information such as postal address</li>
          <li>E-mail address</li>
          <li>Phone number</li>
          <li>We do not store credit card details</li>
        </ul>

        <h3>Your Rights</h3>
        <ul>
          <li>You can ask for a copy of the information we hold about you and have it corrected if it is wrong.</li>
          <li>You have the right to ask us to delete any personal data we hold about you.</li>
          <li>You have the right to object to your data being used for specific purposes.</li>
        </ul>

        <h3>How we use cookies</h3>
        <p>A cookie is a small file which asks permission to be placed on your computer's hard drive. Once you agree, the file is added, and the cookie helps analyse web traffic or lets you know when you visit a particular site. Cookies allow web applications to respond to you as an individual. The web application can tailor its operations to your needs, likes and dislikes by gathering and remembering information about your preferences</p>
        <br> <br>
        <h4 class="end">We may occasionally update this statement - Last updated 25 March 2018</h4>


      </div>
    </section>
  </section>
  <!--End main section-->

  <!--including header-->
  <?php include "footer.php" ?>
</body>

</html>
