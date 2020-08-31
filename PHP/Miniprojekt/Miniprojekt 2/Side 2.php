<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side 2</title>
</head>
<body>

<?php
// Session start + hent variabler fra side 1 og omdøb dem til input og number
session_start();
$input = $_GET['input'];
$number = $_SESSION['number'];

//Hvis number er ikke = input (antal forsøg) udskriver forsøg brugt og tilbage. ( Så hvis man gætter forkert)
if ($number != $input) {
    echo "Du har brugt ", $_SESSION['input'], " forsøg. <br> Du har ", abs($_SESSION['input']-10), " forsøg tilbage.", "<br>";
}
// Hvis session ikke er finised og nummer er = input udskrives antal forsøg brugt og session bliver finished
if ($_SESSION['finished'] == false) {
if ($number == $input) {
    echo "Korrekt gættet", "<br>";
    echo "Du har i alt brugt ", $_SESSION['input'], " forsøg. Dine forsøg nulstilles.", "<br>";
    $_SESSION['finished'] = true;
}
// Ellers hvis input er under 0 eller input er over 100 udskriv fejl i interval
elseif ($input <0 || $input > 100) {
    Echo "Uden for den angivne interval på 1-100", "<br>";
}
// Ellers minus number og input er det over 50 udskriv meget langt forbi
elseif (abs($number - $input) > 50) {
    Echo "Meget langt forbi", "<br>";
}
// Ellers minus number og input, større end 19 og mindre end 49 udskriv ikke helt ved siden af
elseif (abs($input - $number) > 19 && abs($input - $number) < 49 ){
    Echo "Du er ikke helt ved siden af", "<br>";
}
else {
    // ellers udskriv
    Echo "Tampen brænder", "<br>";
    }
}

    //Echo "Du gættede på nummer ", $input,". Det korrekte nummer var " , $number, ".";
    if ($_SESSION['finished'] == true) {
    "<br>";
    echo "Spillet er slut", "<br>";
    echo "Du gættede på nummer $input", "<br>";
    echo "Det rigtige tal var $number";
        session_destroy();
            }
    echo "<br>";

?>

</body>
</html>