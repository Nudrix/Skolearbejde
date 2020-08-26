<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $myVar = 17;
    echo $myVar, "<br>";
    $myVar = 2;
    echo $myVar;
    echo "<hr>";
    //Navn
    $myName = "Mathias";
    echo $myName, "<BR>";
    //Fuldt navn
   $myName = "Mathias Brøndvig";
    echo $myName, "<BR>";

    $var1 = 17;
    $var2 = 9;
    $var3 = $var1 + $var2;
    echo $var3, "<br>";

    $var1 = "husk";
    $var2 = "at";
    echo $var1. $var2, "<br>";
    echo "<hr>";

    $minby = "Brenderup";
    echo strlen($minby), "<br>";
    echo "<hr>";
    
    
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

    

    // DAG 2 Opgave
    // Hvis alder er 18, udskriv "Du har stemmeret"
    $age= 18;
    if($age >=18) {
        echo "Du har stemmeret";
    }
    //Hvis alderen er 17 udskriver den "Du har stemmeret om 1 år"
    elseif ($age ==17) {
        echo "Du har stemmeret om 1 år";
    }
    // Hvis alderen er under 18, udskriv "Du har ikke stemmeret"
    else {
        echo "Du har ikke stemmeret";
    }
    echo "<hr>";
    // Hvis alder er under 0 eller over 130 udskrives "Ugyldig alder"
    $alder= rand(-100, 200);
    if($alder < 0 || $alder > 130) {
        echo "Ugyldig alder";
    }
    // Hvis alder er under 18 udskrives "Du får ungdomsrabat"
    elseif($alder <18){
        echo "Du får ungdomsrabat";
    }
    // Hvis alder er mellem 18 og 65 udskives "Du får ingen rabat"
    elseif ($alder >18 && $alder <65){
        echo "Du får ingen rabat";
    }
    // Hvis ingen andre passer (65+) udskrives "Du får pensionistrabat"
    else {
        Echo "Du får pensionistrabat";
    }
    echo "<br>";
    echo "Generated Age: ", $alder;
        ?>
    
   <hr> 
   <?php 
   // Define Laver en værdi af Myndig som er 18
    define ("Myndig" , 18);
    $alder= 17;
    // Hvis alderen er mindre end 18 (!=Myndig) printes svaret "Alderen er ikke 18 år"
    if ($alder !=Myndig)  {
    echo "Alderen er ikke 18 år";
    }
    // Hvis andet passer (At alderen er 18 i vores $alder box) printes svaret "Alderen er 18år"
    else {
        echo "Alderen er 18 år";
    }

    ?> 
    <hr>

    <?php
    $alder = 18;
    if ($alder == 18) {
        echo "Alderen er 18 år";
    }
    else {
        echo "Alderen er ikke 18 år";
    }

    ?>
<hr>
</body>
</html>