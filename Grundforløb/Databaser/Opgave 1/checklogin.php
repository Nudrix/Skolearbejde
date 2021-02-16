<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0", method="POST";>
    <title>Login screen</title>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['login'])){
    $_SESSION['login'] ++; }
else {$_SESSION['login'] = 1;
}
if ($_SESSION['login'] == 5) {
    //unset($_SESSION["login"]);
    header("Location: http://www.google.com");
} 
    echo $_SESSION['login']." <br> ";
    

    $host="localhost"; // Navn på host
    $username="root"; // Mysgl username (Standard admin i linux er root)
    $password="";    // mysgl password (Som standard ikke sat noget password)
    $db_name="login"; // Database's navn
    $tbl_name="login"; // Tabel's navn
    
    // Her opretter du forbindelse til MySQL med oplysninger i variabler
    // musqli_connect er en php funktion der skaber forbindelse med SQL server og database
    $conn =mysqli_connect($host, $username, $password, $db_name);

    if (!$conn) {
        die("Connection Failed " . mysqli_connect_error());
    }

     // Brugernavn og password fra formular
     $my_username=$_POST['username'];
     $my_password=$_POST['password'];


     //Nu opbygger vi SQL streng og smider den i variablen "$sql"
     // Derefter bruger vi php funtionen "mysql_query()" til at køre SQL strengen og derfor bliver den sat
     // ind imellem de 2 paratenser og det hele bliver smidt i variablen "Resulatat"
     $sql = "SELECT * FROM $tbl_name WHERE username='$my_username' and password='$my_password'";
     $resultat = mysqli_query($conn, $sql);

     // Nu bruger vi en ny php funktion, der hedder "mysql_num_rows()", den hjælper os med at tælle antal
     // resultater vi for ud af vore SQL "Select ... "
     // Dette gøre som i vores forrige funktion, ved at sætte variablen "$resultat" ind i paratensen og smide dette
     // resultat ind i variablen "$count"
     $count =mysqli_num_rows($resultat);


     // Hvis denne php funktion kommer tilbage med 1 række (row), vil det sige at der eksisterer en bruger
     // med det indtastede brugernavn og password og nu kan vi bruge en simpel "if .." sætning for hvad der
     // så skal ske

     if ($count == 1){
     

        //Hvis en bruger eksistere, bruger vi "head(location: ...)" metoden for at sende brugeren
        // til den side der kræver login.
        $_SESSION['success'] = 1;
        $_SESSION['login'] = 1;
        header("location: Mainpage.php");

         //$SESSION["username"] = $username;
           // header("Location: forum.php");
     }
     else
     {
         //Hvis "$count" ikke er lig med 1, så skriver vi bedsked til brugeren.
        
        echo "Forkert Brugernavn eller password"; }
        $_SESSION['finished'] = false;
?>

</body>
</html>