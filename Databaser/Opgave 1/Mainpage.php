<?php
session_start();
echo $_SESSION['success'];
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
</head>
<body>
    <h1> Testing!</h1>

    <input type="button" class="w3-button w3-black" value="Forum" onclick="location.href='forum.php';">
    <br> <br>
    <input type="button" class="w3-button w3-black" value="Dokumentation" onclick="location.href='Dokumentation.php';">

</body>
</html>