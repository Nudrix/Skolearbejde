location:/Skolearbejde/Databaser/Opgave 1/login.php
<?php
session_start();
//echo $_SESSION['success'];
if ($_SESSION['success'] == 0) {
    header("location: ../login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>