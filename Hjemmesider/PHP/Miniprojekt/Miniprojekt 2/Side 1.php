<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniprojekt Side 1</title>
</head>
<body>
<?php
// Session start, starter spillet
 session_start();
 // Session færdig = false
    $_SESSION['finished'] = false;
    // isset tjekker om variabel er 0 
        if (isset ($_SESSION['input'])) {
            // Session +1
             $_SESSION['input']++;
             echo $_SESSION['number'];
 }
 else {
     // Laver variabler og giver værdi
        $_SESSION['input'] = 1;
        $_SESSION['number'] = rand(1,100);

    }
    // Hvis input variabel kommer på 10, er session finised sand og spillet slutter.
    if  ($_SESSION['input'] == 10) {
         $_SESSION['finished'] = true;
    }
?>
    <form action="Side 2.php" method="GET">
    input: <input type="text" name="input" />
    <input type="submit" value="Tryk så det rykker" />
    </form>

    <?php
    //// Til at udskrive nummeret som bliver genereret
    // echo $_SESSION['number']; 
    ?>
</body>
</html>