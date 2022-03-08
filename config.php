<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'student-shelvedb';

$conn = mysqli_connect($server, $user, $password, $database );
$con= new mysqli('localhost','root','','loan_db')or die("Could not connect to mysql".mysqli_error($con));

if(!$conn){
    die("<script>alert('Connection failed')</script>");
}
?>