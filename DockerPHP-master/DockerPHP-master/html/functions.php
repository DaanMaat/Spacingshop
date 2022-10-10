<?php
session_start();
function getDropdown($username){
    echo '
    <div class="dropdown" datadropdown>
            <input type=image class="menu-btn" datadropdownbtn src="Images/Menu icon.png">
            <div class="dropdown-menu">
                <a href="index.php">Home</a>
                <br>
                <br>
                <a href="shop.php">Shop</a>
                <br>
                <br> ';
                if($username == "Spacingunicorn"){
                 echo "<a href='admin.php'>Admin-panel</a>"; 
                }' 
            </div>
    </div>
    ';
}

function getUserdata($ingelogd, $username){
    if(!$ingelogd){ 
        echo "
        <div class='userdata'>
        <a href='login.php' class='Account'>Inloggen</a>
        <img id='usericon' src='Images/User icon.png'>";
    } else {
   echo "<div class='userdata'>
    <a href='https://www.youtube.com/' class='Account'>".$username."</a>
    <a class='Uitlog-btn' href='login.php?loguit'>Uitloggen</a>
    <img id='usericon' src='Images/User icon.png'>";

    }
    echo "<a href='https://www.twitch.tv/spacingunicorn'>
    <img id='shoppingicon' src='Images/shoppingcart.png'></a>
    <p class='shoppingitems'>0</p>
    </div>";
}