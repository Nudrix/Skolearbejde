<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side 2</title>
</head>
<body>
<?php
session_start();
$input = $_GET["input"];
$number = $_SESSION['number'];


if ($number != $input) {
    echo "Du har brugt ", $_SESSION['input'], "forsøg. Du har ", abs($_SESSION['input']-10), "forsøg tilbage.";
}
if ($number == $input) {
    echo "Korrekt gættet", "<br>";
    session_destroy();
    echo "Du har i alt brugt ", $_SESSION['input'], " forsøg. Dine forsøg nulstilles.";
}
elseif ($input <0 || $input > 100) {
    Echo "Uden for den angivne interval på 1-100", "<br>";
}
elseif (abs($input - $number) > 50) {
    Echo "Meget langt forbi", "<br>";
}
elseif (abs($input - $number) > 19 && abs($input - $number) < 49 ){
    Echo "Du er ikke helt ved siden af", "<br>";
}
else {
    Echo "Tampen brænder", "<br>";
}
    echo "<br>";
    Echo "Du gættede på nummer ", $input,". Det korrekte nummer var " , $number, ".";

?>


</body>
</html>