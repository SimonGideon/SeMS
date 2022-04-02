<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeMS|Admin|Users</title>
    <!-- bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<?php
$title = 'Update Users';
include_once('admin-header.php');
?>

<body>



    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                        <label for="completelname">First Name</label>
                        <input type="text" class="form-control" id="completelname" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                        <label for="completelname">Last Name</label>
                        <input type="text" class="form-control" id="completelname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label for="completeUsername">User Name</label>
                        <input type="text" class="form-control" id="completeUsername" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <label for="completemail">Email</label>
                        <input type="email" class="form-control" id="completemail" placeholder="User Email">
                    </div>
                    <div class="form-group">
                        <label for="completetype">Type</label>
                        <input type="text" class="form-control" id="completetype" placeholder="UserType">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" style="margin-top: 80px;" data-toggle="modal" data-target="#completeModal">
            Add New User
        </button>
    </div>

</body>
<!-- bootsrap jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</html>