<?php
//connect mysql database
$host = "localhost";
$user = "root";
$password = "";
$db = "demo";
$con = mysqli_connect($host, $user, $password, $db) or die("Error " . mysqli_error($con));
?>
