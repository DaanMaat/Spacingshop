<?php
session_start();
$username = $_SESSION['Username'];
$ingelogd = $_SESSION['Ingelogd'];

try{
    $user = 'root';
    $pass = 'root';
    $db = new PDO('mysql:host=dockerphp-master_db_1;dbname=Spacingshop', $user, $pass);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br>";
die();
};

$Merch = $_POST['merchNaam']; 
$MerchImage = $_FILES['merchImage']['name'];
$Price = $_POST['merchPrijs'];
$Stock = $_POST['merchVoorraad'];
$Limited = $_POST['limited'];


$_SESSION['foutmelding'] = '';
$MerchImage_tmp = $_FILES['merchImage']['tmp_name'];
$bestandMap = "Images/";
$bestandLocatie = $bestandMap.$MerchImage;
$bestandType = pathinfo($bestandLocatie,PATHINFO_EXTENSION);

if(isset($_POST["submit"])){
    $toegestaneTypes = array('jpg','png','jpeg','gif');
    if(in_array($bestandType, $toegestaneTypes)){
        if(move_uploaded_file($MerchImage_tmp, $bestandLocatie)){
            $insert = $db->query("INSERT INTO `Merch` (Merch, MarchImage, Price, Stock, Limited) VALUES ('$Merch', '$MerchImage', '$Price', '$Stock', '$Limited')");
            if($insert){
                $_SESSION['foutmelding'] = "<p class='green melding'>Dit item is toegevoegd aan de webshop!</p>";
            }else{
                $_SESSION['foutmelding'] = "<p class='red melding'>Er is iets misgegaan, probeer het nog eens.</p>";
            }
        }else{
            $_SESSION['foutmelding'] = "<p class='red melding'>Sorry er was een probleem tijdens het uploaden van je afbeelding!</p>";
        }
    }else{
        $_SESSION['foutmelding'] = "<p class='red melding'>Alleen afbeeldingen in het format PNG, JPG, JPEG & GIF zijn toegestaan!</p>";
    }
}else{$_SESSION['foutmelding'] = "<p class='red melding'>Sorry, er is iets misgegaan probeer het opnieuw!</p>";}
header('Location: admin.php');
?>