<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Opgave: Dag 1</title>
</head>
<body>

<?php
    // Dag 1:

    echo "Dag 1: Opgave 1 - Variabler:", "<br>";
    $myVar = 17;
    echo $myVar, "<br>";
    $myVar = 2;
    echo $myVar;
    echo "<hr>";
    echo "Dag 1: Opgave 2 - Variabler videre:", "<br>";
    $myName = "Mathias";
    echo $myName, "<BR>";
    //Fuldt navn
   $myName = "Mathias Brøndvig";
    echo $myName, "<hr>";

    echo "Dag 1: Opgave 3 - Operatorer:", "<br>";
    $var1 = 17;
    $var2 = 9;
    $var3 = $var1 + $var2;
    echo $var3, "<hr>";

    echo "Dag 1: Opgave 4 del 1 - Strings:", "<br>";
    $var1 = "husk";
    $var2 = "at";
    echo $var1. $var2, "<br>";
    echo "<hr>";
    
    echo "Dag 1: Opgave 5 - Strings del2:", "<br>";
    $minby = "Brenderup";
    echo strlen($minby), "<br>";
    echo "<hr>";
    
    echo "Dag 1: Opgave 6 - Hvad udskriver følgende kode?", "<br>";
    // Du laver en variabel på 10.
    $i = 10;
    // Laver variabelen om til 1
    $i = 1;
    // Du fortæller variablen at den skal tage variabel i, plus med 1 og sætte på variabel $i's plads.
    $i +=1;
    // Du fortæller vaiablen at den skal tage variabel 1 (Ligesom før) (++ betyder det samme som +=1)
    $i++;
    echo $i;
    echo "<hr>";

    echo "Dag 1: Opgave 7 - Hvad udskriver følgende kode?", "<br>";
    // Variable value = 10
    $value = 10;
    // Variable i = 10
    $i = 10;
    // Variable 1 (10) + Value variabel (10)
    $i +=$value;
    // De 2 variabler som er over lægges sammen og "++" betyder plus 1, så den lægger begge variabler sammen og ligger 1 til, derfor 10+10+1=21
    $i++;
    echo $i; 
    echo "<hr>"; 

   ?>
</body>
</html>