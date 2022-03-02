<?php
session_start();
if (!isset($_SESSION['username'])) {
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
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/styles.css">
    <title>Student Shelve</title>
</head>
<nav id=mynavmenu class="nav navbar-expand-lg bg-dark navbar-dark px-3 navbar fixed-top mynav">
    <div class="nav-brand">
        <h2>SeMS</h2>
    </div>
    <ul>
        <li>
        <?php echo "<h6>Logged in as:  " . $_SESSION['username'] . "</h6>"; ?>
        </li>
        <li>
            <a href="index.php"><i class="bi bi-power text-white"></i></a>
        </li>
    </ul>
</nav>

<body>
    
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

    <!-- Use any element to open the sidenav -->
    <span onclick="openNav()">open</span>

    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="main">
        ...
    </div>

</body>

</html>