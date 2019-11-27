
<?php

if (isset($_POST['login'])) {

    require 'config.php';

    $username = $_POST['username'];
    $password = $_POST['password'];


    if (empty($username) || empty($password)) {
        array_push($errors, "Username or Password is empty ");
    } else {
        //$sql = "SELECT * FROM users;";
        $sql = "SELECT * FROM user WHERE username =? OR email=?;";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            array_push($errors, "Error ");
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $username, $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['password1']); //dehash the password
                if ($pwdCheck == false) {
                    array_push($errors, "Wrong password!");
                } else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userid'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $id = $_SESSION['userid'];

                    //fectch the colonm values
                    $sql = "SELECT * FROM user WHERE id='" . $row['id'] . "'";
                    //var_dump($sql);
                    $result = mysqli_query($db, $sql);
                    if ($result->num_rows > 0) {
                        // var_dump($result);
                        // echo "in";
                        while ($row = $result->fetch_assoc()) {
                            $fname = $row['fname'];
                            $lname = $row['lname'];
                            $username = $row['username'];
                            $about = $row['about'];
                            $address2 = $row['address_2'];
                            $phone = $row['phone'];
                            $email = $row['email'];

                            $_SESSION['fname'] = $fname;
                            $_SESSION['lname'] = $lname;
                            $_SESSION['username'] = $username;
                            $_SESSION['about'] = $about;
                            $_SESSION['address_2'] = $address2;
                            $_SESSION['phone'] = $phone;
                            $_SESSION['email'] = $email;
                        }
                    }

                    if ($username == "Admin1" && $password == "Admin1") {

                        header('location: ../admin.php'); //redirect o the admin page
                    } else {

                        header('location: ../user.php'); //redirect o the user page
                    }
                }
            } else {
                array_push($errors, "Invalid user ! ");
            }
        }
    }
}
