<?php require("server/server.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/signin.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Sign In</title>
</head>

<body>
    <header style="margin-top:-50px">
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
                    <li><a href="signin.php"><button type="signIn" class="button_1">SignIn</button></a></li>
                    <li><a href="login.php"><button type="logIn" class="button_2">Login</button></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="header">
        <h2>Register in Here</h2>
    </div>

    <form method="POST" action="signin.php" enctype="multipart/form-data">

        <!--Display validation errors here-->
        <?php include("errors.php"); ?>

        <div class="input-group">
            <label for="">First Name</label>
            <input type="text" name="fname" value="<?php echo $fname; ?>">
        </div>
        <div class="input-group">
            <label for="">Last Name</label>
            <input type="text" name="lname" value="<?php echo $lname; ?>">
        </div>
        <div class="input-group">
            <label for="">User Name</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label for="">Contact Number</label>
            <input type="tel" name="phone" value="<?php echo $phone; ?>">
        </div>
        <div class="input-group">
            <label for="">Gender</label>
            <select name="gender" id="gen">
                <option value="">--Gender--</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div class="input-group">
            <label for="">About</label>
            <input type="text" name="about" value="<?php echo $about; ?>">
        </div>
        <div class="input-group">
            <label for="">From</label>
            <input type="text" name="address2" value="<?php echo $address2; ?>">
        </div>


        <div class="input-group">
            <label for="">Email</label>
            <input type="email" name="mail" value="<?php echo $mail; ?>">
        </div>
        <div class="input-group">
            <label for="">Re-enter Email address</label>
            <input type="email" name="mail2" value="<?php echo $mail2; ?>">
        </div>
        <div class="input-group">
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <label for="">Confirm Password</label>
            <input type="password" name="confirmPassword">
        </div>


        <input id="agreeBtn" type="radio"> I Agree to the
        <a href="policy.php">Terms and Conditions </a> <br><br>
        <div class="input-group">
            <button type="submit" name="signup" class="btn">Sign Up</button>
            <button type="reset" name="reset" class="btn">Reset</button>
        </div>
        <div class="agree">

            <p id="para">Already have an account ?<a href="login.php"> Log In </a></p>
            <p id="para">Need <a href="helps.php"> Help</a> ?</p>
        </div>
    </form>

    <!--including FOOTER-->
    <?php include "footer.php" ?>

</body>

</html>
