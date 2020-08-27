<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miniprojekt side 2</title>
</head>
<body>
<?php
// Velkommen, "få navn"(Fra side 1) Der er Strlen= Længde i navn, strrev= Bagfra
echo "Velkommen ", $_GET["navn"], ". Der er ", strlen($_GET["navn"]), " bogstaver i dit navn og dit navn stavet bagfra er ", strrev($_GET["navn"]), ".", "<br>";
echo  "Om 5 år er du ", $_GET["alder"]+5, " år gammel."
?> 


</body>
</html>