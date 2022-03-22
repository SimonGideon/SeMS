<?php
session_start();
include 'config.php';
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
	<title>settings</title>
</head>

<body>
	<?php
	$title = 'Settings';
	include_once('header.php');
	?>
	<?php

	?>

	<div class="container-fluid">

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
							<?php
							include 'config.php';
							$login = $_SESSION['username'];
							$users = $con->query("SELECT * FROM users WHERE username = $login");
							$i = 1;
							while ($row = $users->fetch_assoc()) :
							?>
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
										<center>
											<div class="btn-group">
												<button type="button" class="btn btn-primary">Action</button>
												<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu">
													<a class="dropdown-item edit_user" href="javascript:void(0)" data-id='<?php echo $row['id'] ?>'>Edit</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item delete_user" href="javascript:void(0)" data-id='<?php echo $row['id'] ?>'>Delete</a>
												</div>
											</div>
										</center>
									</td>
								</tr>
							<?php endwhile; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
	<script>
		$('#new_user').click(function() {
			uni_modal('New User', 'manage_user.php')
		})
		$('.edit_user').click(function() {
			uni_modal('Edit User', 'manage_user.php?id=' + $(this).attr('data-id'))
		})
		$('.delete_user').click(function() {
			_conf("Are you sure to delete this user?", "delete_user", [$(this).attr('data-id')])
		})

		function delete_user($id) {
			start_load()
			$.ajax({
				url: 'ajax.php?action=delete_user',
				method: 'POST',
				data: {
					id: $id
				},
				success: function(resp) {
					if (resp == 1) {
						alert_toast("Data successfully deleted", 'success')
						setTimeout(function() {
							location.reload()
						}, 1500)

					}
				}
			})
		}
	</script>

	<!-- script -->
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="js/script.js"></script>

</body>

</html>