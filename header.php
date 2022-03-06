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
            <?php echo "<h6>Logged in as:  " . $_SESSION['username'] . "</h6>"; ?>
        </li>
        <li>
            <a href="index.php"><i class=" logout bi bi-power text-white"></i></a>
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
        <li class="<?php if($page=='home'){echo 'active';}?>">
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