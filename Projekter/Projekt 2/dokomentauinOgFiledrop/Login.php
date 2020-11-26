<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login screen</title>
    <style>
        
.container {
  position: relative;
}

.Topmid {
  position: absolute;
  top: 3px;
  right: 960px;
  font-size: 22px;
} 

     body {
   background-image:url('https://elvium.s3.amazonaws.com/editor/853/jobopslag.png');
   background-size:100%;
   background-repeat:no-repeat;
   height: 100%;
   width: 100%;
}
</style>

</head>
<body>

<?php
session_start();
$_SESSION['success'] = 0;
//echo $_SESSION['success'];
?>
    <form name="form1" method="POST" action="Opgave 1/checklogin.php">
        <table width="150px" border="0" cellpadding="3" cellspacing="1" div class="Topmid">
            <tr>
                <td colspan="3"><strong>Medlems Login </stong></td>
             </tr>
             <tr>
                 <td width="78">Brugernavn</td>
                 <td width="6">:</td>
                 <td width="294"><input name="username" type="text"></td>
             </tr>
             <tr>
                 <td>Password</td>
                 <td>:</td>
                 <td><input name="password" type="password"></td>
             </tr>
             <tr> 
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="Logind" value="Login"</td>
             </tr>
            </table>
        </form>
</body>
</html>