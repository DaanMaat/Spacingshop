<?php
session_start();
$username = $_SESSION['Username'];
$Ingelogd = $_SESSION['Ingelogd'];
$_SESSION['false-user-pass'] = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="Images/spacingcon.png">
</head>
<body class="controlpage">
     <div class="dropdown" datadropdown>
        <input type=image class="menu-btn" datadropdownbtn src="Images/Menu icon.png"></button>
        <div class="dropdown-menu">
            <a href="index.php">Home</a>
            <br>
            <br>
            <a href="shop.php">Shop</a>
            <br>
            <br>
            <?php if($username == 'Spacingunicorn'){
                 echo '<a href="#">Admin-panel</a>'; 
                } if($Ingelogd){"<a href='login.php?loguit'>Uitloggen</a>";}?> 
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>