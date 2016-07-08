<?php
$dsn = 'mysql:host=127.0.0.1;dbname=MOS';
$username = 'root';
$password = 'root';
$pdo = new PDO($dsn, $username, $password);
$IMG_PATH = 'img/';
session_start();
function get_profiles_infos(){
	global $pdo;
	$sql = $pdo->prepare('SELECT * FROM utilisateur WHERE public = true');
	$sql->execute();
	return $sql->fetchAll();
}

function get_my_profile($id){
	global $pdo;

	var_dump($id);
	$sql = $pdo->prepare("SELECT * FROM utilisateur WHERE id = $id");
	$sql->execute();
	return $sql->fetch();
}

?>