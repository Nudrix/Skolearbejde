<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skolearbejde</title>
</head>
<body>
    <?php
    // Dag 1:

    // Dag 1: Opgave 1 ; Variabler
    $myVar = 17;
    echo $myVar, "<br>";
    $myVar = 2;
    echo $myVar;
    echo "<hr>";
    //Dag 1: Opgave 2 ; Variabler videre
    $myName = "Mathias";
    echo $myName, "<BR>";
    //Fuldt navn
   $myName = "Mathias Brøndvig";
    echo $myName, "<BR>";

    // Dag 1: Opgave 3 ; Operatorer
    $var1 = 17;
    $var2 = 9;
    $var3 = $var1 + $var2;
    echo $var3, "<br>";

    //Dag 1: Opgave 4 del 1 ; Strings
    $var1 = "husk";
    $var2 = "at";
    echo $var1. $var2, "<br>";
    echo "<hr>";
    
    //Dag 1: Opgave 5 ; Strings del2
    $minby = "Brenderup";
    echo strlen($minby), "<br>";
    echo "<hr>";
    
    // Dag 1: Opgave 6 ; Hvad udskriver følgende kode
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

    // Dag 1: Opgave 7 ; Hvad udskriver følgende kode
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

    // Dag 2:

    // DAG 2 Opgave 1 ; Forgreninger og operatorer
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
    //  Dag 2: Opgave 4; Variabel med random
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
   // Dag 2: Opgave 5; Hvad udskriver følgende
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
    // Dag 2: Opgave 7; Hvad udskrive følgende på skærmen
        // Laver en defination som hedder alder=18
    $alder = 18;
        // Alder == 18 (Om alderen er 18, hvis den er udskrives Alderen er 18)
    if ($alder == 18) {
        echo "Alderen er 18 år";
    }
    // Hvis ikke udskrives alderen er ikke 18år
    else {
        echo "Alderen er ikke 18 år";
    }
?>

   <hr>
    <?php
    // Dag 2: Opgave 8; Switch
    // Generere tilfældigt tal mellem 1 og 6
    $tal= rand(1,6);
    // Laver switch, hvor hver "Case" er Nummer 1 til 6 og printer det ud i romer tal
    switch ($tal)
    {
      case 1:
       echo "I";
        break;
      case 2:
        echo "II";
        break;
      case 3:
        echo "III";
        break;
      case 4:
        echo "IV";
      break;
      case 5:
        echo "V";
        break;
      case 6:
        echo "VI";
      break;
    break;
    }
    ?>
    <hr>

    <?php

    //Dag 3: Løkker og Operatorer

    // dag 3: Opgave 1; Løkke
    // Giver de forskellige ting værdier
    $maks= 10;
    $i= 10;
    $sum= 0;
    //Mens (i er mindre end max fortsæt da i til max)
    while ($i < $maks) {
        //Udskriv i (Indtil den når max værdi) og breakline
        echo $i, "<br>";
        // Sum (som er værdi 0) skal plusses med værdi i (som er 1 op til max )
        $sum += $i;
        //I++ = i + 1
        $i++;
    }

    // Udskriv total sum 
    echo $sum;
    ?>
    <hr>
    
    <?php
    // Dag 3: Opgave 2; Do while loop
    // Do loop
    $maks= 10;
    $i= 10;
    $sum= 0;

    do {
        echo $i, "<br>";
        $sum += $i;
        $i++;
    }
    while ($i < $maks);
    echo $sum;
    ?>
    <br><hr>


    <?php
    // Dag 3: Opgave 3; For løkke
    $sum= 0;
     // For loop
     // Mens i er mindre end 10, fortsæt i med at ligge 1 til ($i++) indtil 10 rammes
     for ($i = 1; $i < 10; $i++) {
         // Udksriv $i
         echo $i, "<br>";
         // Sum er lig med $i +1 hele vejen til max rammes
         $sum += $i;
     }
     echo $sum;
     echo "<hr>";
     ?>


     <?php
    // Dag 3: Opgave 4; Omskriv while loop til for loop
 
     for ($i = 0; $i < 10; $i++)
     {
         echo $i, "<br>";
        
     }
    ?>
    <hr>
    <?php
    // Dag 3: Opgave 5; Omskriv for loop til while
    $i = 10;
    while ($i>0) {
    $i--;
    
        echo $i, "<br>";
    }
    ?>
    <hr>

    
    <?php
    // Dag 3: Opsamling Array's og løkker
    // Dag 3: Eksempel 1
    $names[0] = "Søren";
    $names[1] = "Niels";
    $names[2] = "Anders";
    echo 'element nr. 0 er:' . $names[0] . '<br>';
    echo 'element nr. 1 er:' . $names[1] . '<br>';
    echo 'element nr. 2 er:' . $names[2] . '<br>';          
    ?>
    <hr>


    <?php
    // Dag 3: Eksempel 2
    $NavnListe = array('Peter','Niels','Mikkel','Flemming', 'Hans', 'Nikolaj');

    echo 'element nr. 0 er :'.$NavnListe[0].'<br>';
    echo 'element nr. 1 er :'.$NavnListe[1].'<br>';
    echo 'element nr. 2 er :'. $NavnListe[2].'<br>';
    echo 'element nr. 3 er :'. $NavnListe[3].'<br>';
    echo 'element nr. 4 er :'. $NavnListe[4].'<br>';
    echo  'element nr. 5 er :'. $NavnListe[5].'<br>';
    ?>
    <hr>


    <?php
    //Dag 3: Eksempel 3
    // $alder["søren"] = "30";     
    // $alder["niels"] = "31";
    // $alder["anders"] = "32";

    // echo "søren er" . $alder["søren"] . " år gammel";
    // echo "<br>";
    // echo " niels er" . $alder["niels"] . " år gammel";
    // echo "<br>";
    // echo "anders er" . $alder["anders"] . " år gammel";
    ?>             
    <hr>

    <?php 
    // Dag 3: Opgave 1 ; Omskriv Eksempel 2 til for loop
    $NavneListe = array('Peter','Niels','Mikkel','Flemming', 'Hans', 'Nikolaj');
    for ($i = 0; $i < 5; $i++) {
        echo "Element Nr. ", $i, " er " .$NavneListe[$i], "<br>";

    }
    echo "<hr>";
    ?>

    <?php
    $MånedLgd = Array('31', '29', '31', '30', '31', '30', '28', '29', '31', '31', '29', '30');
    $Måned = Array('Januar', 'Febuar', 'Marts', 'April', 'Maj', 'Juni', 'Juli', 'August', 'Septemper', 'October', 'November', 'December');
    for ($i = 0; $i < 12; $i++)
    {
        echo $Måned[$i], " har ", $MånedLgd[$i], " dage. ", "<br>";
    }
    ?>
</body>
</html>