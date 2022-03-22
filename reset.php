<?php

include 'config.php';
session_start();
error_reporting(0);
// if(isset($_session["username"])){

//     header('location:index.php');
// }

//check what the user posted and reset it in the database.
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //check if the email posted exists



    if ($email = '') {
        echo " <script> alert('Email cant be blank')</script>";
    } else {
        $sql = "select * from users where email ='$email' and password  ='$password'";
        $result = mysqli_query($conn, $sql);
    }
    if ($result) {
    } else {
        echo " <script> alert('Email doesnt exists on the System')</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootsrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- style css -->
    <link rel="stylesheet" href="css/styles.css">
    <title>Reset Pass</title>
</head>

<body>
    <div class="enclose-form">
        <div class="container" id="container">
            <form action="" method="POST" class="login-email">
                <p class="login-text" style="font-size: 2rem; font: weight 800;">Reset Password</p>
                <div class="input-group">
                    <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?> " required>

                </div>

                <div class="input-group">
                    <button name="submit" class="btn">Reset Password</button>
                </div>
                <div>
                <p class="login-register-text text-center">We will send password to your account <br> <a href="index.php">Log in</a></p><br>
                </div>
                

            </form>
        </div>
    </div>

</body>

</html>