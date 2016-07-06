<?php
$dsn = 'mysql:host=localhost;dbname=MOS';
$username = 'root';
$password = 'root';

/* Connection */
$pdo = new PDO($dsn, $username, $password);

/* préparation de la requête */
$sql = $pdo->prepare("SELECT id, nom, prenom FROM utilisateur");

$sql->execute();
/* Récupération de toutes les lignes d'un jeu de résultats */

$result = $sql->fetchAll();

for ($i = 0; $i < count($result); $i++){
	print_r($result[$i]);
	//echo "l'Utilisateur ".$result[$i]['id']." est: ".$result[$i]['prenom']." ". $result[$i]['nom']."\n";
}
?>