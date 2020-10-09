<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dag 3</title>
</head>
<body>
   <?php


    echo "Dag 3: Opgave 1 - Løkke:", "<br>";
    // Giver de forskellige ting værdier
    $maks= 10;
    $i= 1;
    $sum= 0;
    //Mens (i er mindre end max fortsæt da i til max)
    while ($i < $maks) {   
     //Sum (som er værdi 0) skal plusses med værdi i (som er 1 op til max )
    $sum += $i;
     //Udskriv sum (Indtil den når max værdi) og breakline
    echo $sum, "<br>";
    //$i++ = i + 1
    $i++;
    }

    ?>
    <hr>
    
    <?php
     echo "Dag 3: Opgave 2 - Do while loop:", "<br>";
     //Do loop
    $maks= 10;
    $i= 1;
    $sum= 0;

    do {
       /// echo $i, "<br>";
        $sum += $i;
        $i++;
        echo $sum. "<br>";
    }
    while ($i < $maks);
   
    ?>
    <br><hr>


    <?php
    echo "Dag 3: Opgave 3 - For løkke:", "<br>";
    $sum= 0;
     // For loop
     // Mens i er mindre end 10, fortsæt i med at ligge 1 til ($i++) indtil 10 rammes
     for ($i = 1   ; $i < 10; $i++) {
         // Udksriv $i
         echo $sum, "<br>";
         // Sum er lig med $i +1 hele vejen til max rammes
         $sum += $i;
     }
     echo $sum;
     echo "<hr>";
     ?>


     <?php
    echo "Dag 3: Opgave 4 - Omskriv while loop til for loop:", "<br>";
 
     for ($i = 0; $i < 10; $i++)
     {
         echo $i, "<br>";
        
     }
    ?>
    <hr>
    <?php
    echo "Dag 3: Opgave 5 - Omskriv for loop til while:", "<br>";
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
    // $names[0] = "Søren";
    // $names[1] = "Niels";
    // $names[2] = "Anders";
    // echo 'element nr. 0 er:' . $names[0] . '<br>';
    // echo 'element nr. 1 er:' . $names[1] . '<br>';
    // echo 'element nr. 2 er:' . $names[2] . '<br>';          
    ?>
 


    <?php
    // Dag 3: Eksempel 2
    // $NavnListe = array('Peter','Niels','Mikkel','Flemming', 'Hans', 'Nikolaj');

    // echo 'element nr. 0 er :'.$NavnListe[0].'<br>';
    // echo 'element nr. 1 er :'.$NavnListe[1].'<br>';
    // echo 'element nr. 2 er :'. $NavnListe[2].'<br>';
    // echo 'element nr. 3 er :'. $NavnListe[3].'<br>';
    // echo 'element nr. 4 er :'. $NavnListe[4].'<br>';
    // echo  'element nr. 5 er :'. $NavnListe[5].'<br>';
    ?>
 


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
 

    <?php 
    echo "Dag 3: Opgave 6.1 - Omskriv Eksempel 2 til for loop:", "<br>";
    $NavneListe = array('Peter','Niels','Mikkel','Flemming', 'Hans', 'Nikolaj');
    for ($i = 0; $i < 5; $i++) {
        echo "Element Nr. ", $i, " er " .$NavneListe[$i], "<br>";

    }
    echo "<hr>";
    ?>

    <?php

    echo "Dag 3: Opgave 6.1 - Array måned:", "<br>";
    $MånedLgd = Array('31', '29', '31', '30', '31', '30', '28', '29', '31', '31', '29', '30');
    $Måned = Array('Januar', 'Febuar', 'Marts', 'April', 'Maj', 'Juni', 'Juli', 'August', 'Septemper', 'October', 'November', 'December');
    for ($i = 0; $i < 12; $i++)
    {
        echo $Måned[$i], " har ", $MånedLgd[$i], " dage. ", "<br>";
    }
    ?>
    
</body>
</html>
