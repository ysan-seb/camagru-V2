<?php
session_start();
include('../config/database.php');
function		authentification($db, $login, $password)
{
	$password = hash('Whirlpool', $password);
	foreach ($db as $data)
	{
		if ($login === $data['username'] && $password === $data['password'])
			return (TRUE);
	}
	return (FALSE);
}
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

function getEmail($db, $username) {
	foreach ($db as $data) {
		if ($data['username'] === $username) {
			return ($data['email']);
		}
	}
}

if (!empty($_POST['username']) && !empty($_POST['password']))
{
	if (authentification($db, $_POST['username'], $_POST['password']))
	{
		$_SESSION['authenticated'] = 'YES';
		$_SESSION['username'] = htmlspecialchars($_POST['username']);
		$_SESSION['email'] = getEmail($db, $_SESSION['username']);
		header('location: ../gallery.php');
	}
	else
		echo "Unknow user\n";
}
else
	echo "Please complete all fields\n";
