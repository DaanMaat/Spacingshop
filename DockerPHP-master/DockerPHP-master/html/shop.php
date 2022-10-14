<?php
session_start();
$username = $_SESSION['Username'];
$ingelogd = $_SESSION['Ingelogd'];
$_SESSION['foutmelding'] = "";

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
    $mColumn1 = 1;
    $mColumn2 = 2;
    $mRow1 = 0;
    $mRow2 = 1;
    $mNumber = 0;
    $user = 'root';
    $pass = 'root';
    $db = new PDO('mysql:host=dockerphp-master_db_1;dbname=Spacingshop', $user, $pass);
    foreach($db->query('SELECT * FROM Merch') as $merchData){
        $merchID = $merchData['MerchID'];
        $prijs = $merchData['Price'];
        $merchnaam = $merchData['Merch'];
        $merchvoorraad = $merchData['Stock'];
        $merchimg = $merchData['MerchImage'];
        $limited = $merchData['Limited'];
        $mNumber++;
            echo getMerchBox($merchimg, $merchnaam, $prijs, $merchvoorraad, $limited, $mNumber);
        if($mNumber % 3 == 0){
            $mRow1++;
            $mRow2++;
            $mColumn1 = 1;
            $mColumn2 = 2;
            echo 
            '<style>
                    .merch-box'.$mNumber.'{
                        grid-column: '.$mColumn1.' / '.$mColumn2 .';
                        grid-row: '.$mRow1.' / '.$mRow2.';
                    }
             </style>
             </div>
             </div>
             </div>';
                $mColumn1++;
                $mColumn2++;
            
        } else {
            echo 
            '<style>
                    .mbox'.$mNumber.'{
                        grid-column: '.$mColumn1.' / '.$mColumn2 .';
                        grid-row: '.$mRow1.' / '.$mRow2.';
                    }
             </style>
             </div>
             </div>
             </div>';
                $mColumn1++;
                $mColumn2++;
        }
        }
        } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br>";
        die();
        }; ?> 
    </div>
<script src="script.js"></script>
</body>
</html>