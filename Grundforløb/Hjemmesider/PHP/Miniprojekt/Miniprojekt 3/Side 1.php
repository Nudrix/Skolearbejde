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

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
        $email = $_POST['email'];
        if (strlen($email) > 7 or strlen($email) < 30) 
        {
            
        
            if (substr_count($email, "@") == "1") 
            {
                      
                    

                     if (substr($email, "-3") == ".dk") 
                     {
                      echo "Valid mail";
                    }
                     else 
                     {
                        echo "Indtast gyldig email. (.dk mangler)";
                    }
                        
                    

            }        
            else 
            {echo "Indtast gyldig email. (@ mangler)";
            }
        }
      else 
        {echo "Email er for kort eller for lang.";
        }
}
      ?>
</body>
</html>