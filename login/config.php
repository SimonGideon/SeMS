<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'student-shelvedb';

$conn = mysqli_connect($server, $user, $password, $database );

if(!$conn){
    die("<script>alert('Connection failed')</script>");
}
?>