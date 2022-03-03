<?php
include 'config.php';
// starting a session 
session_start();
error_reporting(0); //start error reporting

//check if session is existing.
if (isset($_session["username"])) {

    header('location:welcome.php');
}

// check the info isset haha.. by using the superglobal post
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']); //md5 encrypts the password
    //select from users to pick data
    $sql = "select * from users where email ='$email' and password ='$password'"; //check the email in db and compare if the user exists in db.
    $result = mysqli_query($conn, $sql); //query and store result in result
    if ($result->num_rows > 0) {
        $row  = mysqli_fetch_assoc($result); //fetch the entire row of the result if any.
        $_SESSION["username"] = $row["username"]; //assign the row result to the session
        header("location: welcome.php");
    } else {
        echo "<script> alert('OOps Email or Password is wrong')</script>";
    }
}
?>
<!-- the form used -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- bootstrap links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>

<body>

    <head>
        <div class="enclose-form">
            <div class="container card justify-content-center" id="container">
                <form action="" method="POST" class="login-email">
                    <p class="login-text" style="font-size: 2rem; font: weight 800;">login</p>
                    <div>

                    </div>
                    <div class="input-group">
                        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?> " required>

                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="password" name="password" value="<?php echo $password; ?> " required>

                    </div>
                    <div class="input-group">
                        <button name="submit" class="btn">Login</button>
                    </div>
                    <p class="login-register-text text-center">Dont have an account?<a href="register.php">Register here</a><br>
                    <a href="reset.php">Reset Password</a></p>

                </form>
            </div>
        </div>

    </head>
</body>

</html>