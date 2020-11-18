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
    <meta name="viewport" content="width=device-width, initial-scale=1.0", method="POST">
    <title>Forum</title>
</head>
<body>
    <h1>RET I KODNING</h1> <br><br>
    <h1>Redirect fra create_post til post. <br> Forum Box <br></h1>
    <input type="button" class="w3-button w3-black" value="Lav nyt opslag" onclick="location.href='/Databaser/Opgave 1/Create_post.php';">
</body>
</html>