
<?php
include 'config.php';
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

<body>
    <!-- ==nav and side menu begins here== -->
    <?php
    $title = 'Dashboard';
    $page = 'dashboard';
    include_once('header.php');
    ?>
    <section class="container-fluid">
        <!-- ===layering top ====-->
        <div class="carol-cards ms-auto ms-md-0 me-lg-4">
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
                    <div class="col-sm ">
                        <div class="jumbotron">
                            <img src="img/avartar.webp" alt="avartar" class="avatar">
                            <h5>User Profile</h5>
                            <?php echo $_SESSION['username']. "<br>" ;
                            $u_name = $_SESSION['username'];
                            $sql = "SELECT fname, lname FROM users WHERE username='$u_name'";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                  echo  $row["fname"]. " " . $row["lname"];
                                }
                              } else {
                                echo "0 results";
                              }
                              
                              $conn->close();
                            
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="jumbotron">
                        <h5>Personal Information</h5>
                        <div class="row">
	                        <div class="col-lg-12">
			                        <button class="btn btn-primary float-right btn-sm" id="new_user"><i class="fa fa-plus"></i> Edit Profile</button>
	                        </div>
	                        </div>
	                        <br>
	                        <div class="row">
		                        <div class="card col-lg-12">
			                        <div class="card-body">
				                        <table class="table-striped table-bordered col-md-12">
			                        <thead>
				                        <tr>
					                        <th class="text-center">#</th>
					                        <th class="text-center">Name</th>
					                        <th class="text-center">Username</th>
					                        <th class="text-center">Action</th>
				                        </tr>
			                        </thead>
			                        <tbody>
				                        <tr>
				 	                        <td>
				 		                        <?php echo $i++ ?>
				 	                        </td>
				 	                        <td>
				 		                        <?php echo $row['name'] ?>
				 	                        </td>
				 	                        <td>
				 		                        <?php echo $row['username'] ?>
				 	                        </td>
				 	                        <td>
				 	                        </td>
				                        </tr>
			                        </tbody>
		                        </table>
			                        </div>
		                        </div>
	                        </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <?php
    $conn->close();
    ?>
    <!-- script -->
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>