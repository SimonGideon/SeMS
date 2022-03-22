<?php
session_start();
include 'config.php'
?>
<?php
if (!empty($_POST["send"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];
    mysqli_query($conn, "INSERT INTO tblcontact (user_name, user_email,subject,content) VALUES ('" . $name . "', '" . $email . "','" . $subject . "','" . $content . "')");
    $insert_id = mysqli_insert_id($conn);
    //if(!empty($insert_id)) {
    $message = "Your contact information is saved successfully.";
    $type = "success";
    //}
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
    <title>message</title>
</head>

<body>
    <?php
    $title = 'Messages';
    include_once('header.php');
    ?>

    <div class="   container row" style="margin-top: 25vh;">
        
            <form class="col md-8 container mt-70 card " style="margin: 4px 22px 70px 70px;  " id="message-cont">
                <!-- Name input -->
                <div class="form-outline  m-4">
                    <input type="text" id="form4Example1" class="form-control" style="" />
                    <label class="form-label" for="form4Example1">subject</label>
                </div>
                <!-- Message input -->
                <div class="form-outline mb-4">
                    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                    <label class="form-label" for="form4Example3">Message</label>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
            </form>
        </span>
        <div class="col xl-8 jumbotron text-center" style="margin-top: 4px; width: 20%; margin-bottom: 70px;">
            <div class="">
                <div class="">
                    <h4>Announcements</h4>
                    <table class="table table-bordered" id="loan-list">
					<colgroup>
						<col width="10%">
						<col width="25%">
						<col width="25%">
						<col width="20%">
						<col width="10%">
						<col width="10%">
					</colgroup>
					<thead>
						<tr>
							<th class="text-center">subject</th>
							<th class="text-center">Payee</th>
							<th class="text-center">To</th>
							<th class="text-center">Author</th>
							<th class="text-center">Date</th>
                            <th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						 <tr>	
						 	<td>Repayment of loans</td>
                             <td>Loan</td>
                             <td>Thursday</td>
                             <td>Mark</td>
                             <td>Today</td>
                             <td><button class="btn bg-primary">View</button></td>
						 </tr>
					</tbody>
				</table>

                </div>


            </div>

        </div>

    </div>
    <!-- script -->
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>