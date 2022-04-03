<?php
    include 'config.php';
    extract($_POST);

    if(isset($_POST['fnameSend']) && isset($_POST['lnameSend']) 
    && isset($_POST['usernameSend']) && isset($_POST['emailSend'])
    && isset($_POST['typeSend'])){
        $sql =  "INSERT INTO `users` (fname, lname, username, email, type
        ) values('$fnameSend', '$lnameSend', '$usernameSend', '$emailSend',
         '$typeSend')";
    $result = mysqli_query($conn,$sql);
    }
?>