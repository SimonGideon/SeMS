<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootsrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/bootstrap-icons.css">
        <!-- font-awesome icons -->
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <script src="https://kit.fontawesome.com/cfc4a4fe0f.js" crossorigin="anonymous"></script>
        <!-- style css -->
        <link rel="stylesheet" href="css/styles.css">
        <title>SeMS| Dashboard </title>
    </head> <!-- bootsrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <script src="https://kit.fontawesome.com/cfc4a4fe0f.js" crossorigin="anonymous"></script>
    <!-- style css -->
    <link rel="stylesheet" href="css/styles.css">
    <title>SeMS| <?php $title?> </title>
</head>
<nav id=mynavmenu class="navbar fixed-top mynav">
    <div class="nav-brand text-white">
        <h2>SeMS</h2>
    </div>
    <div class="text-center text-white" id="page-header">
        <div class="dispaly-3">
            <h4><?php echo $title; ?></h4>
        </div>

    </div>
    <ul>
        <li>
            <?php echo "<p>Logged in as:  " . $_SESSION['username'] . "</p>"; ?>
        </li>
        <li>
            <a onclick="clickMe()" href="index.php"><i class=" logout bi bi-power text-white"></i></a>
        </li>
    </ul>
</nav>
<div class="side-bar " id="side-bar">
    <header>
        <h3>Dashboard</h3>
    </header>
    <!--===== navigation side bar ====-->

    <ul>
        <li>
            <a href="#" class="toggle">
                <span class="icon"><i class="bi bi-list-task"></i></span>
                <span class="title">Menu</span>
            </a>
        </li>
        <li class="active">
            <a href="welcome.php">
                <span class="icon"><i class="bi bi-house-fill"></i></span>
                <span class="title">Home</span>
            </a>
        </li>
        <li>
            <a href="profile.php">
                <span class="icon"><i class="bi bi-person-plus-fill"></i></span>
                <span class="title">Profile</span>
            </a>
        </li>
        <li>
            <a href="messages.php">
                <span class="icon"><i class="bi bi-envelope-fill"></i></span>
                <span class="title">Message</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="icon"><i class="bi bi-question-circle"></i></span>
                <span class="title">Help</span>
            </a>
        </li>
        <li>
            <a href="settings.php">
                <span class="icon"><i class="bi bi-gear"></i></span>
                <span class="title">Settings</span>
            </a>
        </li>
        <li>
            <a href="notifications.php">
                <span class="icon"><i class="bi bi-bell"></i></span>
                <span class="title">Notification</span>
            </a>
        </li>

    </ul>
</div>