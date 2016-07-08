<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$dsn = 'mysql:host=127.0.0.1;dbname=MOS';
$username = 'root';
$password = 'root';
$pdo = new PDO($dsn, $username, $password);

$login = $_GET['login'];
$sql = $pdo->prepare("SELECT password FROM utilisateur WHERE login = '$login'");
$sql->execute();
$result = $sql->fetch();

if (!$result || $result['password'] != $_GET['password']){
	echo "login ou mdp incorrect";
}
else {
	echo "Bienvenue";
}
?>