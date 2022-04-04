<?php
    include 'config.php';
    if(isset($_POST['displaySend'])){
        $table='<table class="table">
        <thead class="thread-dark">
            <tr>
                <th scope="col">S no</th>
                <th scope="col>First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Type</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>';
        $sql = "SELECT * FROM CRUD";
        $result = mysqli_query($conn, $sql);
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $fname=$row['fname'];
            $lname=$row['lname'];
            $username=$row['username'];
            $email=$row['email'];
            $type=$row['type'];
            $table .='<tr>
                        <td scope = "row">'.$id.'</td>
                        <td>'.$fname.'</td>
                        <td>'.$lname.'</td>
                        <td>'.$username.'</td>
                        <td>'.$email.'</td>
                        <td>'.$type.'</td>
                    </tr>';
        }
        $table.='<table>';
        echo $table;
    }
?>