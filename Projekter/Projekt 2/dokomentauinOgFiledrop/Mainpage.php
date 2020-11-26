<?php
session_start();
//echo $_SESSION['success'];
if ($_SESSION['success'] == 0) {
    header("location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mainpage</title>
    <style>
        .container {
  position: relative;
}

.Topmid {
  position: absolute;
  top: 3px;
  right: 960px;
  font-size: 22px;
} 

        
        .container {
          position: relative;
        }
        
        .Topmid {
          position: absolute;
          top: 3px;
          right: 960px;
          font-size: 22px;
        } 
        
             body {
           background-image:url('https://files.guidedanmark.org/files/475/74928_Spejder_sport_01.jpg?width=1024');
           background-size:100%;
           background-repeat:no-repeat;
           height: 100%;
           width: 100%;
        }

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
</style>
        </style>

</head>
<body>
    <h1 style="color:Black"> <center>Velkommen til Spejdersport</center></h1>
    <center><input type="button" class="w3-button w3-black" value="Forum" onclick="location.href='Opgave 1/forum.php';"></center>
    <br>
    <center><input type="button" class="w3-button w3-black" value="Dokumentation" onclick="location.href='Index.php';"> </center>

    <div class="topright"> 
                  <input type="button" value="Logout" onclick="location.href='Login.php';">
                  <br> 
                  </div> 
</body>
</html>