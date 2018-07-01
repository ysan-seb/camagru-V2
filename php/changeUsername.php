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
$userId = getUserIdByUsername($db, $username, $password);
if ($userId > 0) {
// A secure !!! 
// A secure !!! 
// A secure !!! 
// A secure !!! 
    if (isset($_POST['newUsername']) && isset($_POST['password'])) {
        $username = $_SESSION['username'];
        $newUsername = htmlspecialchars($_POST['newUsername']);        
        $password = hash('Whirlpool', $_POST['password']);     
        $userId = getUserIdByUsername($db, $username, $password);

        try{
        $pdo = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $request = "UPDATE `users` SET `username` = '$newUsername' WHERE `id` = $userId;";
        $req = $pdo->prepare($request);
        $req->execute();
        $req->closeCursor();
        $_SESSION['username'] = $newUsername;
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