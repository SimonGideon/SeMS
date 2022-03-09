<?php
include 'config.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
$u_name = $_SESSION['username'];
$sql = "SELECT  * FROM users WHERE username='$u_name'";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">



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
                        <div class="jumbotron" style="margin-top: -125px;">
                            <img src="img/avartar.webp" alt="avartar" class="avatar">
                            <h5>User Profile</h5>
                            <?php echo $_SESSION['username'] . "<br>";
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo  $row["fname"] . " " . $row["lname"]; ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="jumbotron">
                        <p>Personal Information</P>
                        <div class="row">
                            <div class="col-lg-12">
                                <button href="edit_profile.php" class="btn btn-primary float-right btn-sm" id="new_user"><i class="fa fa-plus"></i> Edit Profile</button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="card col-lg-12">
                                <div class="card-body">
                                    <table class="table-striped table-bordered col-md-12">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Names:</th>
                                                <td><?php echo  $row["fname"] . " " . $row["lname"]; ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ID No:</th>
                                                <td><?php echo $row['IdNo'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Username:</th>
                                                <td><?php echo $row['username'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Email:</th>
                                                <td><?php echo $row['email'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Address:</th>
                                                <td><?php echo $row['address'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">DoB</th>
                                                <td><?php echo $row['DoB'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Phone:</th>
                                                <td><?php echo $row['phone'] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                            <?php
                                }
                            } else {
                                echo "0 results";
                            }

                            $conn->close(); ?>
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
    <script src="sweetalert.min.js"></script>
    <script src="js/script.js"></script>
</body>
</body>

</html>