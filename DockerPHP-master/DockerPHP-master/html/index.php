<?php
$user = 'root';
$pass = 'root';
$PDO = new PDO('mysql:host=dockerphp-master_db_1;dbname=Spacingshop', $user, $pass);
$accData = $PDO->query('SELECT * from Accounts');

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
            </div>
        </div>
        <h1 id="Webshop-name">SpacingShop</h1>
        <form action="https://www.twitch.tv/">
        <div class="accountbox">
            <?php
            echo "<h1 id='Account'>"."Mijn account"."</h1>";
            ?>
            <img id="usericon" src="Images/User icon.png">
            <input type="submit" value="                                                              " class="submit1 submits">
        </div>
        </form>
        <form action="https://www.youtube.com/">
        <div class="shoppingbox">
        <img id="shoppingicon" src="Images/shoppingcart.png">
        <p class="shoppingitems">0</p>
        <input type="submit" value="                    " class="submit2 submits">
        </div>
        </form>
        <h1 id="Headertext">Welkom bij de officiële Spacingunicorn webshop!</h1>
        <p id="Headerinfo">Welkom op mijn webshop! Ik ben Larissa en ik ben 20 jaar. <br> Hier kun je merch halen! <br>
             Druk op de 3 streepjes linksboven om naar de webshop te gaan. <br> Hieronder kun je mijn socials vinden.<br>
            V              V              V</p>
    </div>
    <div class="socialbox">
    <a href="https://www.twitch.tv/spacingunicorn" ><img src="Images/twitch.png" alt="Twitch" class="socials"></a>
    <a href="https://www.tiktok.com/@spacingunicorn"><img src="Images/tiktok.png" alt="TikTok" class="socials"></a>
    <a href="https://www.youtube.com/channel/UCSVfNo-cN0MzqiLxHtDiw0A"><img src="Images/youtube.png" alt="Youtube" class="socials"></a>
    <a href="https://www.instagram.com/spacingunicorn/"><img src="Images/Instagram.png" alt="Instagram" class="socials"></a>
    <a href="https://twitter.com/spacingunicorn"><img src="Images/twitter.png" alt="Twitter" class="socials"></a>
    </div>
    <script src="script.js"></script>
</body>
</html>