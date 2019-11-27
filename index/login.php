<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/signin.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Log In</title>
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
        <h2>Log in Here</h2>
    </div>

    <form action="server/loginServer.php" method="POST">

        <div class="userimagediv">
            <img class="userimage" src="../img/userlogo.png" alt="">
        </div>

        <!--Display validation errors here-->
        <?php include("errors.php"); ?>

        <div class="input-group">
            <label for="">User Name or email</label>
            <input type="text" name="username" value="">
        </div>
        <div class="input-group">
            <label for="">Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Log In</button>
            <button type="reset" name="reset" class="btn">Reset</button>
        </div>
        <div class="agree">
            <p id="para">Forgot<a href="resetpsd.php"> Password </a> ?</p> <br>
            <p id="para">Create an account ?<a href="signin.php"> Sign In </a></p>
            <p id="para">Need <a href="helps.php"> Help</a> ?</p>
        </div>
    </form>

    <!--including FOOTER-->
    <?php include "footer.php" ?>

</body>

</html>
