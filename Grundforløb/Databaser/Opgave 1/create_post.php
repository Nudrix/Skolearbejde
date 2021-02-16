<?php
session_start();
echo $_SESSION['success'];
if ($_SESSION['success'] == 0) {
    header("location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0", method="POST">
    <title>Lav Opslag</title>
</head>
<body>
    <h1>Lav ny post</h1>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"><br>
    <input type="text" name="title" placeholder="Title"><br><br>
    <textarea rows="25" cols="50" placeholder="Post description"></textarea> <br><br>
    <input type="submit">
</form>
</body>
</html>