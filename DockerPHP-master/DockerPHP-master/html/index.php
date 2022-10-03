<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spacingunicorn</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="Images/spacingcon.png">
</head>
<body class="homepage">
    <div class="header">
        <div class="dropdown" datadropdown>
            <input type=image class="menu-btn" datadropdownbtn src="Images/Menu icon.png"></button>
            <div class="dropdown-menu">
                <a href="#">Home</a>
                <br>
                <br>
                <a href="shop.html">Shop</a>
                <br>
                <br>
                <?php if($_SESSION['Username'] == 'Spacingunicorn'){
                 echo '<a href="Admin.html">Admin-panel</a>'; 
                } ?>
            </div>
        </div>
        <h1 id="Headertext">Welkom bij de officiële Spacingunicorn webshop!</h1>
        <br>
        <p id="Headerinfo">Welkom op mijn webshop! Ik ben Larissa en ik ben 20 jaar. <br> Hier kun je merch halen! <br>
             Druk op de 3 streepjes linksboven om naar de webshop te gaan. <br> Hieronder kun je mijn socials vinden.<br>
            V              V              V</p>
        <?php
        if($_SESSION['Ingelogd']){
        ?>
        <?php echo "<a href='https://www.youtube.com/' class='Account'>".$_SESSION['Username']."</a>
        <a class='Uitlog-btn' href='login.php?loguit'>Uitloggen</a>"; ?>
        <img id='usericon' src='Images/User icon.png'>
        </div>
       <?php } else { ?>
        <?php echo "<a href='login.php' class='Account'>Inloggen</a>"; ?>
                <img id='usericon' src='Images/User icon.png'>
                </div>
        <?php } ?>
        <a href="https://www.twitch.tv/spacingunicorn"><img id="shoppingicon" src="Images/shoppingcart.png"></a>
        <p class="shoppingitems">0</p>
    </div>  
    <br> <br> <br> <br>
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

