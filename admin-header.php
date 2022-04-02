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
        <!-- favicon -->
        <link rel="shortcut icon" href="img/favicon.png">
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
        <!-- sweet alert -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
        <!-- js links -->
        <script src="js/script.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- favicon -->
        <link rel="shortcut icon" href="img/favicon.png">
        <!-- title -->
        <title>SeMS| <?php $title ?> </title>
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
                <a onclick="clickMe()"><i class=" logout bi bi-power text-white"></i></a>
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
                <a href="" class="toggle">
                    <span class="icon"><i class="bi bi-list-task"></i></span>
                    <span class="title">Menu</span>
                </a>
            </li>
            <li class="">
                <a href="elcome.php">
                    <span class="icon"><i class="bi bi-house-fill"></i></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="icon"><i class="bi bi-person-plus-fill"></i></span>
                    <span class="title">Profile</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="icon"><i class="bi bi-envelope-fill"></i></span>
                    <span class="title">Message</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="icon"><i class="bi bi-question-circle"></i></span>
                    <span class="title">Help</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="icon"><i class="bi bi-gear"></i></span>
                    <span class="title">Settings</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="icon"><i class="bi bi-bell"></i></span>
                    <span class="title">Notification</span>
                </a>
            </li>

        </ul>
    </div>
    <script type="text/javascript">
        function clickMe() {
            swal({
                    title: "Are you sure?",
                    text: "You want log out as the current user.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("You've succefully logged out!", {
                            icon: "success",
                        }).then(function() {
                            window.location = "index.php"
                        });
                    } else {
                        swal("You havent logged out yet");
                    }
                });
        }
    </script>