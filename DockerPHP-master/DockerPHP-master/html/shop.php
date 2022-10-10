<?php
session_start();
// $_SESSION['merchImg'] = 'Images/imageIcon.png';
$username = $_SESSION['Username'];
$ingelogd = $_SESSION['Ingelogd'];

require_once('functions.php');
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
        <?php echo getDropdown($username); ?>
        </div>
        </div>
        <?php echo getUserdata($ingelogd, $username); ?>
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