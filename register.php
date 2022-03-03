
<?php
include 'config.php' ;
session_start();
error_reporting(0);
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword){
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if(!$result->num_rows > 0){
            $sql = "INSERT INTO users (fname, lname, username, email, password)
                VALUES ('$fname', '$lname', '$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo"<script>alert( 'Congratulations! Your registration was sucessful . You can now log in.')</script>";
                $fname = "";
                $lname = "";
                $username = "";
                $email = "";
                $_POST['pass'] = "";
                $_POST['cpassword'] = "";

            }else {
                echo"<script>alert('woops!, something went wrong, try agaain')</script>";
            }
        } else {
            echo"<script>alert('woops!, email already exists.')</script>";
        } 
    } else {
        echo"<script>alert('passwords don't match')</script>";
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
    <body>
      <div class="container" id="container">
          <form action="" method="POST" class="login-email">
              <p class="login-text" style="font-size:2rem; font-weight:800;">Register</p>
              <div class="input-group">
                  <input type="text" placeholder="first name" name=fname value="<?php echo $fname; ?>" required>
              </div>
              <div class="input-group">
                  <input type="text" placeholder="Last name" name=lname value="<?php echo $lname; ?>" required>
              </div>
              <div class="input-group">
                  <input type="text" placeholder="User name" name=username value="<?php echo $username; ?>" required>
              </div>
              <div class="input-group">
                  <input type="email" placeholder="email" name=email value="<?php echo $email; ?>" required>
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
  </body>