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
    echo "<a href='shoppingcart.php'>
    <img id='shoppingicon' src='Images/shoppingcart.png'></a>
    <p class='shoppingitems'>0</p>
    </div>";
}

function getMerchBox($merchimg, $merchnaam, $prijs, $merchvoorraad, $limited, $mNumber){
        echo'   <div class="merch-box merch-box'.$mNumber.'">
                <div class="merch-pic"><img class="merchImg" src="Images/'.$merchimg.'">';
                if($limited == "on"){
                    echo '<img class="limited-sign" src="Images/op-op.png">';
                } else {echo '<img class="limited-sign" src="Images/empty.png">';}
                echo   '<div class="merch-info">
                        <br>
                        <h1 class="merch-info">'.$merchnaam.'</h1>
                        <h1 class="merch-info">€'.$prijs.'</h1>';                
                        if($merchvoorraad != 0){
                        echo "<button class='buy-btn'>+ Toevoegen</button>";
                        } else {echo "<button class='sold-out'>Uitverkocht</button>";}
                        '</div>
                        </div>';
}