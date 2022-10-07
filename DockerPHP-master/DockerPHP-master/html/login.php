<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="Images/spacingcon.png">
<body class="inlogpage">
<a href="index.php"><h2 class="h2-inlog">< Homepage</h2></a>
<h1 class="h1-inlog"><em>Inloggen</em></h1>
<form action="confirmation.php" method="POST">
    <input class="inlog-box1 inlog-box" type="text" name="username" placeholder="username" required>
    <input class="inlog-box2 inlog-box" type="password" name="password" placeholder="password" required>
    <input class="submit-btn btn1" type="submit" name="Button" value="Log in"> <br>
</form>
<?php
echo $_SESSION['false-user-pass'];
?>
</body>
</html>