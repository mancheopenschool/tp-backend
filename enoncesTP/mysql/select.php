<?php
$dsn = 'mysql:host=localhost;dbname=MYTABLENAME';
$username = 'username';
$password = 'password';

/* Connection */
$pdo = new PDO($dsn, $username, $password);

/* préparation de la requête */
$sql = $pdo->prepare("SELECT nom, prenom FROM utilisateur ORDER BY nom");
$sql->execute();

/* Récupération de toutes les lignes d'un jeu de résultats */
$result = $sql->fetchAll();
print_r($result);
?>