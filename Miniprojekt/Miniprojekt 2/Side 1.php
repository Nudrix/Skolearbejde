<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniprojekt Side 1</title>
</head>
<body>
<?php
 session_start();
 if (isset ($_SESSION['input'])){
     $_SESSION['input']++;
 }
 else {
        $_SESSION['input'] = 1;
        $_SESSION['number'] = rand (1,100);
    }
    if ($_SESSION['input'] >= 10){
        echo "Du har ikke flere forsøg";
        session_destroy();
        $_SESSION['number'] = rand(1,100);
    }
?>
    <form action="Side 2.php" method="GET">
    input: <input type="text" name="input" />
    <input type="submit" value="Tryk så det rykker" />
    </form>
    <?php echo $_SESSION['number']; ?>
</body>
</html>