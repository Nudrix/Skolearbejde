<?php
session_start();
//echo $_SESSION['success'];
if ($_SESSION['success'] == 0) {
    header("location: login.php");
    exit();
}
$host="localhost"; // Navn på host
$username="root"; // Mysgl username (Standard admin i linux er root)
$password="";    // mysgl password (Som standard ikke sat noget password)
$db_name="opslag"; // Database's navn
$tbl_name="opslag"; // Tabel's navn

$conn = mysqli_connect($host, $username, $password, $db_name);
$sql = "SELECT * FROM `opslag`";
$opslag = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.container {
  position: relative;
}

.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
} 
.Topmid {
  position: absolute;
  top: 65px;
  right: 875px;
  font-size: 22px;
} 
.Left {
  position: relative;
  top: 75px;
  left: 100px;
  font-size: 20px;
} 
.break{
    max-width:1550px;
    word-wrap:break-word;
}
body {
           background-image:url('https://www.mathiaslindholm.dk/wp-content/uploads/2017/07/Opslagstavle-1.jpg');
           background-size:100%;
           background-repeat:no-repeat;

        }
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0", method="POST">
    <title>Forum</title>
</head>
<body>
<h1 style="color:Black"> <center>Opslagstavlen</center></h1>
    <input type="button" class="Topmid" value="Lav nyt opslag" onclick="location.href='Create_post.php';">
    
    <?php 
    $i = 1;
    while ($row = mysqli_fetch_array($opslag)) { ?>
    <table class="Left">
      <tr>
        <td> <?php echo $i; ?> </td>
        <td> <?php echo $row['Username'] ?> </td>
        <td> <?php echo $row['Date'] ?> </td>
        <td> <?php echo $row['Title'] ?> </td>
        <td class="break"> <?php echo $row['Input'] ?> </td>
      </tr>
    </table>
    <?php $i++; } ?>



















    <div class="topright"> 
                  <input type="button" value="Logout" onclick="location.href='../Login.php';">
                  <br> 
                  <input type="button" value="Return" onclick="location.href='../Mainpage.php';"> 
                  </div> 
</body>
</html>