<?php
session_start();
include('../config/database.php');
try{
	$pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$request = "SELECT * FROM `users`;";
	$req = $pdo->prepare($request);
	$req->execute();
	$db = $req->fetchAll();
	$req->closeCursor();
}
catch(PDOException $Exception){
	echo "Error during the taking table :\n" . $Exception->getMessage() . "\n";
}

function    getUserIdByUsername($db, $username, $password){
    foreach ($db as $data) {
        if ($data['username'] == $username && $data['password'] == $password) {   
            return ($data['id']);
        }
    }
    return (0);
}

$username = $_SESSION['username'];        
$password = hash('Whirlpool', $_POST['password']);
$userId = getUserId($db, $username, $password);
if ($userId > 0) {
// A secure !!! 
// A secure !!! 
// A secure !!! 
// A secure !!! 
    if (isset($_POST['newEmail']) && isset($_POST['password'])) {
        $username = $_SESSION['username'];        
        $password = hash('Whirlpool', $_POST['password']);
        $email = $_POST['newEmail'];        
        $userId = getUserIdByUsername($db, $username, $password);

        try{
        $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $request = "UPDATE `users` SET `email` = '$email' WHERE `id` = 1;";
        $req = $pdo->prepare($request);
        $req->execute();
        $req->closeCursor();    
        header('location: ../account.php');
        exit(); 
        } catch(PDOException $Exception){
            echo $Exception->getMessage() . "\n";
        }
    } else {
        echo('Error : Email');
    }
} else {
    echo "Wrong password";
}
?>