<?php
session_start();
// $_SESSION['merchImg'] = 'Images/imageIcon.png';
$username = $_SESSION['Username'];
$Ingelogd = $_SESSION['Ingelogd'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spacingshop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="Images/spacingcon.png">
</head>
<body class="webshop">
<?php
        if(!$Ingelogd){ ?>
            <?php echo "<a href='login.php' class='Account'>Inloggen</a>"; ?>
            <img id='usericon' src='Images/User icon.png'>
            </div> 
   <?php } else {
            ?>
            <?php echo "<a href='https://www.youtube.com/' class='Account'>".$username."</a>
            <a class='Uitlog-btn' href='login.php?loguit'>Uitloggen</a>"; ?>
            <img id='usericon' src='Images/User icon.png'>
            </div>
            <?php } ?>
        <a href="https://www.twitch.tv/spacingunicorn"><img id="shoppingicon" src="Images/shoppingcart.png"></a>
        <p class="shoppingitems">0</p>
    </div>  
    <div class="dropdown" datadropdown>
        <input type=image class="menu-btn" datadropdownbtn src="Images/Menu icon.png"></button>
        <div class="dropdown-menu">
            <a href="index.php">Home</a>
            <br>
            <br>
            <a href="#">Shop</a>
            <br>
            <br>
            <?php if($_SESSION['Username'] == 'Spacingunicorn'){
                 echo '<a href="admin.php">Admin-panel</a>'; 
                } ?>
        </div>
    </div>
    <div class="shop-section">
        <?php try{
        $user = 'root';
        $pass = 'root';
        $dbh = new PDO('mysql:host=dockerphp-master_db_1;dbname=Spacingshop', $user, $pass);
        foreach($dbh->query('SELECT * FROM Merch') as $merchData){
            $merchID = $merchData['MerchID'];
            $prijs = $merchData['Price'];
            $merchnaam = $merchData['Merch'];
            $merchvoorraad = $merchData['Stock'];
            $merchImg = $merchData['MerchImage'];

            echo '<div class="merch-box">
                <div class="merch-pic"><img class="merchImg" src="Images/'.$merchImg.'.png">
                    <div class="merch-info">
                        <br>
                        <h1 class="merch-info">'.$merchnaam.'</h1>
                        <h1 class="merch-info">€'.$prijs.'</h1>';                    
                        if($merchvoorraad != 0){
                        echo "<button class='buy-btn'>Bestel nu</button>";
                        } else {echo "<button class='sold-out'>Uitverkocht</button>";}
                '</div>
                </div>
            </div>';
        }
        } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br>";
        die();
        }; ?> 
    </div>
<script src="script.js"></script>
</body>
</html>