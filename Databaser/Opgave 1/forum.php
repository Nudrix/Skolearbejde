<?php
session_start();

//$_GET['login'];
$login = $_GET['login'];
   // if ("login" = false);
  if(($login = 0));  {
      header("location: login.php");
    
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
    <h1>Testing!</h1>
</body>
</html>