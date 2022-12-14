<?php
session_start();
$username = $_SESSION['Username'];
$ingelogd = $_SESSION['Ingelogd'];
if($username != "Spacingunicorn"){header("location:index.php");}
require_once('functions.php');
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
<?php echo getDropdown($username); ?>
    </div>
    </div>
<?php echo getUserdata($ingelogd, $username); ?>

<form action="addition.php" method="POST">
    <div class="admin-grid">
        <label class="Label Label1">Merch Naam</label>
        <input class="m-toevoeg m-toevoeg1" type="text" name="merchNaam" placeholder="bijv: spacingsokken" required> <br> <br> <br>
        <label class="Label Label2">Merch Foto</label>
        <input class="m-toevoeg m-toevoeg2" type="file" name="merchImage" accept="image/png, image.jpg, image.jpeg" required> <br> <br> <br>
        <label class="Label Label3">Merch Prijs</label>
        <input class="m-toevoeg m-toevoeg3" type="number" name="merchPrijs" placeholder="0" required> <br> <br> <br>
        <label class="Label Label4">Merch Voorraad</label>
        <input class="m-toevoeg m-toevoeg4" type="number" name="merchVoorraad" placeholder="0" required> <br> <br> <br>
        <label class="Label Label5">Op=Op</label>
        <input class="limited-btn" type="checkbox" name="limited"> <br>
    </div>
    <input type="submit" value="Voeg toe" id="Toevoeg-btn">

</form>
    <?php echo $_SESSION['foutmelding'] ?>
    <script src="script.js"></script>
</body>
</html>