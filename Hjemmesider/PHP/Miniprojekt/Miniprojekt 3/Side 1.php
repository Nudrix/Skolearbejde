<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniprojekt side 3</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        email: <input type="text" name="email" />
        <input type="submit" value="Tryk den i bund!!!" />
    </form>
    
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        if (strlen($email) < 7) {
            echo "Email er for kort.";
        }
        else if (strlen($email) > 30) {
            echo "Email er for lang.";
        }
        else if (substr_count($email, "@") == "1") {
            echo "Indtast gyldig email. (@ mangler)";
        }

        else if (substr($email, "-3") == ".dk") {
            echo "Indtast gyldig email. (.dk mangler)";
        }
        else {
            echo "Valid Email";
        }
    }
    ?>  
</body>
</html>