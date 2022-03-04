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
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <script src="https://kit.fontawesome.com/cfc4a4fe0f.js" crossorigin="anonymous"></script>
    <!-- style css -->
    <link rel="stylesheet" href="css/styles.css">
    <title>Student Shelve</title>
</head>
<nav id=mynavmenu class="navbar fixed-top mynav">
    <div class="nav-brand text-white">
        <h2>SeMS</h2>
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

<body>
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
            <li>
                <a href="#">
                    <span class="icon"><i class="bi bi-house-fill"></i></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="bi bi-person-plus-fill"></i></span>
                    <span class="title">Profile</span>
                </a>
            </li>
            <li>
                <a href="#">
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
                <a href="#">
                    <span class="icon"><i class="bi bi-gear"></i></span>
                    <span class="title">Settings</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="bi bi-bell"></i></span>
                    <span class="title">Notification</span>
                </a>
            </li>

        </ul>
        <script>
            var sidebar = document.querySelector('side-bar');
            var toggle = document.getElementsByClassName('toggle');
            for (var i = 0; i <= toggle.length; i++) {
                toggle[i].addEventListener('click', function() {
                    sidebar.classList.toggle('active');
                });
            }
        </script>

    </div>
    <section class="container-fluid">
        <!-- ===layering top ====-->
        <div class="carol-cards">
            <div class="row my-4">
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="card text-center bg-info">
                        <div class="card-body">
                            <h5>Total Shares</h5>
                            <i class="bi bi-bar-chart-line"></i>
                            <div>
                                <h5 class="card-title">345k+</h5>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="card text-center bg-warning">
                        <div class="card-body">
                            <h5>Revenue</h5>
                            <i class="bi bi-bank"></i>
                            <div>
                                <h5 class="card-title">ks.24k</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5>Shares</h5>
                            <i class="bi bi-building"></i>
                            <div>
                                <h5 class="card-title">Ksh.43+</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                    <div class="card text-center bg-success">
                        <div class="card-body">
                            <h5>Loans</h5>
                            <h2>
                                <i class="fa-solid fa-hand-holding-dollar fa-large fa-100px"></i>
                            </h2>

                            <div>
                                <h5 class="card-title">Ksh.64k+</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===Personal info and profile==== -->
        <div class="container">
            <div class="row">
                <div class="user-profile" id="user-profile">
                    <div class="col-sm">
                        <div class="jumbotron">
                            <img src="img/avartar.webp" alt="avartar" class="avatar">
                            <h5>User Profile</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="jumbotron">
                        <h5>Personal Information</h5>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- script -->
    <script src="js/script.js"></script>
</body>

</html>