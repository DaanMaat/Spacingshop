<?php
session_start();
    $InsertedUsername = $_POST['username'];
    $InsertedPassword = $_POST['password'];
try{
    $user = 'root';
    $pass = 'root';
    $dbh = new PDO('mysql:host=dockerphp-master_db_1;dbname=Spacingshop', $user, $pass);
    foreach($dbh->query('SELECT * FROM Accounts') as $accData){
        $username = $accData['Username'];
        $password = $accData['Password'];
    if($username == $InsertedUsername && $password == $InsertedPassword){
    $_SESSION['Username'] = $username;
    $_SESSION['A_ID'] = $accData['AccountID'];
    $_SESSION['Ingelogd'] = true;
    header("location: index.php");
    } else {
    header("location: login.php");
    $_SESSION['Ingelogd'] = false;
    }
    }        
} catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br>";
        die();
}
?>