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
        if ($row["type"] == "1") {
            header("location: admin-dashboard.php");
?>
            <script>
                swal({
                    title: "User created!",
                    text: "Suceess message sent!!",
                    icon: "success",
                    button: "Ok",
                    timer: 2000
                });
            </script>
        <?php
        } else {
            header("location: welcome.php");
        }
    } else {
        ?>
        <script>
            swal({
                title: "Error!",
                text: "Check your username and Password!!",
                icon: "warning",
                button: "Ok",
                timer: 2000
            });
        </script>
<?php
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
    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    </link>

</head>
<?php
?>

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
                        <button name="submit" class="btn" onclick="clickMe()">Login</button>
                    </div>
                    <p class="login-register-text text-center">Dont have an account?<a href="register.php">Register here</a><br>
                        <a href="reset.php">Reset Password</a>
                    </p>

                </form>
            </div>
        </div>

    </head>
    <script type="text/javascript">
        function clickMe() {
            swal("Log in Success!", "Redirecting!", "success");
        }
    </script>
</body>
<!-- js links -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/script.js"></script>

</html>