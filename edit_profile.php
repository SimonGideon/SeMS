<?php

?>
<?php
require_once('config.php');
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $IdNo = $_POST['IdNo'];
    $DoB = $_POST['DoB'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (fname, lname, username, IdNo, DoB, email, address, password)
                VALUES ('$fname', '$lname', '$username', '$IdNo', '$DoB', '$email', '$address', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Wow! User Registration Complete.')</script>";
            } else {
                echo "<script>alert('Whoops! Something went wrong, Please try again.')</script>";
            }
        } else {
            echo "<script>alert('Whoops! Email Already exists.')</script>";
        }
    } else {
        echo "<script>alert('Passwords not Matched.')</script>";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>

    <!--Bootstrap Link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<?php
    $title = 'Edit Profile';
    include_once('header.php');
    ?>

<body>
    <div class="card" id="container">
        <div >
            <div class="">
                <form action="register.php" method="POST" class="login-email">
                    <p class="login-text" style="font-size:2rem; font-weight:800;">Register</p>
                    <div class="input-group">
                        <input  type="text" placeholder="first name" name=fname value="<?php echo $fname; ?>" required>
                    </div>
                    <div class="input-group">
                        <input type="text" placeholder="Last name" name=lname value="<?php echo $lname; ?>" required>
                    </div>
                    <div class="input-group">
                        <input type="text" placeholder="User name" name=username value="<?php echo $username; ?>" required>
                    </div>
                    <div class="input-group">
                        <input type="text" placeholder="ID/Passport" name=IdNo value="<?php echo $IdNo; ?>" required>
                    </div>
                    <div class="input-group">
                        <input type="date" placeholder="Date of Birth" name=DoB value="<?php echo $DoB; ?>" required>
                    </div>
                    <div class="input-group">
                        <input type="email" placeholder="email" name=email value="<?php echo $email; ?>" required>
                    </div>
                    <div class="input-group">
                        <input type="text" placeholder="Postal-address 0000 - Town" name=address value="<?php echo $postaladdress; ?>" required>
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Password" name=password value="<?php echo $_POST['password']; ?>" required>
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="confirm password" name=cpassword value="<?php echo $_POST['cpassword']; ?>" required>
                    </div>
                    <div class="input-group">
                        <button name="submit" class="btn">Register</button>
                        <p class="login-register-text">Already have an account? <a href="index.php">Log in </a>here.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
    <!-- script -->
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/script.js"></script>
</html>
