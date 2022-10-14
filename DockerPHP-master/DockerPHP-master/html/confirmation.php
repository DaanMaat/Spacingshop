<?php
session_start();
    $InsertedUsername = $_POST['username'];
    $InsertedPassword = $_POST['password'];
try{
    $user = 'root';
    $pass = 'root';
    $db = new PDO('mysql:host=dockerphp-master_db_1;dbname=Spacingshop', $user, $pass);
    foreach($db->query('SELECT * FROM Accounts') as $accData){
        $username = $accData['Username'];
        $password = $accData['Password'];
    if($username == $InsertedUsername && $password == $InsertedPassword){
    $_SESSION['Username'] = $username;
    $_SESSION['A_ID'] = $accData['AccountID'];
    $_SESSION['Ingelogd'] = true;
    $_SESSION['false-user-pass'] = "";
    header("location: index.php");
    } else {
    $_SESSION['Ingelogd'] = false;
    $_SESSION['false-user-pass'] = "<p class='red'>Onjuiste gebruikersnaam of wachtwoord!<p>";
    header("location: login.php");
    }
    }        
} catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br>";
        die();
}
?>