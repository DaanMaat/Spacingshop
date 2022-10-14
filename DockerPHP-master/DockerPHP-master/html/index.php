<?php
session_start();
require_once('functions.php');

$username = $_SESSION['Username'];
$ingelogd = $_SESSION['Ingelogd'];
$_SESSION['false-user-pass'] = "";
$_SESSION['foutmelding'] = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepagina</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="Images/spacingcon.png">
</head>
<body class="homepage">
    <div class="grid--container">
        <div class="header">
            <?php echo getDropdown($ingelogd); ?>
            </div>
            </div>
            <?php echo getUserdata($ingelogd, $username); ?>
    </div>
    <div class="Infodata">
            <h1 id="Bodytext">Welkom bij de officiële Spacingunicorn webshop!</h1>
            <br>
            <p>Welkom op mijn webshop! Ik ben Larissa en ik ben 20 jaar. <br> Hier kun je merch halen! 
            <br>
            Druk op de 3 streepjes linksboven om naar de webshop te gaan. <br> Hieronder kun je mijn socials vinden.
            <br>
            V              V              V</p>
        </div>
    <div class="socialbox">
            <a href="https://www.twitch.tv/spacingunicorn" ><img src="Images/twitch.png" alt="Twitch" class="socials"></a>
            <a href="https://www.tiktok.com/@spacingunicorn"><img src="Images/tiktok.png" alt="TikTok" class="socials"></a>
            <a href="https://www.youtube.com/channel/UCSVfNo-cN0MzqiLxHtDiw0A"><img src="Images/youtube.png" alt="Youtube" class="socials"></a>
            <a href="https://www.instagram.com/spacingunicorn/"><img src="Images/Instagram.png" alt="Instagram" class="socials"></a>
            <a href="https://twitter.com/spacingunicorn"><img src="Images/twitter.png" alt="Twitter" class="socials"></a>
            <a href="https://discord.gg/D7tf5wy"><img src="Images/discord.png" alt="Discord" class="socials"></a>
        </div>
    <script src="script.js"></script>
</body>
</html>