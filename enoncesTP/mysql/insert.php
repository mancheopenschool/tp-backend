<?php
$dsn = 'mysql:host=localhost;dbname=MYTABLENAME';
$username = 'username';
$password = 'password';

$pdo = new PDO($dsn, $username, $password);

//Requete simple
$res = $pdo->exec("INSERT INTO utilisateur VALUES ('', 'prenom', 'nom')");
//Vérification
print("$count ligne inserée.\n");

//Requete préparée

/* En passant un tableau de valeurs */
$prenom = "Jean-Louis";
$nom = "Marcel";

$sth = $dbh->prepare("INSERT INTO utilisateur VALUES ('', ?, ?)");
$sth->execute(array($nom, $prenom));
?>