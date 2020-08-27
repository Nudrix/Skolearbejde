<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniprojekt side 4</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <input type="text" name="input" />
        <input type="submit" value="Tryk så det rykker" />
    </form>
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tal = 10; //rand(1,100)
        $input = $_POST['input'];
        echo $tal;
    
        if($input == $tal){
            echo "Flot - rigtig gættet!";
        }
        elseif ($input);

    }

    ?>
</body>
</html>