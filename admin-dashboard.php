<?php
include 'config.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
$title = 'Dashboard';
$page = 'dashboard';
include_once('admin-header.php');

?>


<body>
    <div class="container" style="margin-top: 100px;">
        <h2>Admin Dashboard</h2>
        <div class="row mx-md-n5" style="padding: 25px;">
            <div class="col px-md-5">
                <button tyep="submit" onclick="window.location.href='manage_user.php'" class="btn btn-primary float-right btn-sm" id="new_user"><i class="fa-solid fa-user-plus"></i> Edit Profile</button>
            </div>
            <div class="col px-md-5">
                <div class="p-3 border bg-light">Custom column padding</div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card bg-light">
                    <div class="card-header">
                        <h4>Import Users shares</h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <input type="file" name="import_file" class="form-control" />
                            <button type="submit" name="save_excel_data" class="btn btn-primary mt-3">Import</button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
</body>
<script>

</script>

</html>