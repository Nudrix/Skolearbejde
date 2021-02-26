<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opgave: Dag 2</title>
</head>
<body>
<?php

echo "Dag 2: Opgave 1 til 3 - Forgreninger og operatorer:", "<br>";
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
echo  "Dag 2: Opgave 4 - Variabel med random:", "<br>";
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
echo "Dag 2: Opgave 5 + 6 - Hvad udskriver følgende?", "<br>";
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
echo "Dag 2: Opgave 7; Hvad udskrive følgende på skærmen?", "<br>";
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
echo "Dag 2: Opgave 8 - Switch:", "<br>";
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
}
?> 
<hr>

</body>
</html>