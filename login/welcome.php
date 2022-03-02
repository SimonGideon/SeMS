<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
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
    <title>Student Shelve</title>
</head>
<nav id= mynavmenu class="nav navbar-expand-lg bg-dark navbar-dark px-3 navbar fixed-top mynav">

			<div class="container-fluid">
            <i class="bi bi-telephone-fill"></i>
            <ul>
                <li>My contributions <style>color: white; </style></li>
            </ul>
            </div>
		</nav>
<body>
    <?php echo "<h1>Welcome " .$_SESSION['username'] ."</h1>"; ?>
    <a href="logout.php">Logout</a>
</body> 
</html>