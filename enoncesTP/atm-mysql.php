<?php

$code = 0;
$solde = 0;
$plafond = 0;
$nb_essai = 0;
$ticket = false;
$saisie_montant = -1;

//connection BDD
$dsn = 'mysql:host=localhost;dbname=MOS';
$username = 'root';
$password = 'root';

/* Connection */
$pdo = new PDO($dsn, $username, $password);

/* préparation de la requête */
$sql = $pdo->prepare("SELECT code, solde, plafond FROM utilisateur WHERE id = 1");

$sql->execute();
/* Récupération de toutes les lignes d'un jeu de résultats */

$result = $sql->fetch();
$code = $result['code'];
$plafond = $result['plafond'];
$solde = $result['solde'];
echo "Bonjour\n Merci d'insérer votre carte\n";

//Tant que l'utilisateur n'a pas fait 3 essais
while ($nb_essai < 3){
	//on demande de saisir le code
	$saisie_code = readline("Entrez votre code\n");
	//Si verifier_code renvoi true, le code est bon
	if(verifier_code($saisie_code, $code)){
		//on sort du while
		break;
	}
	//sinon, on incrémente le nb d'essai effectués
	else {
		$nb_essai++;
	}
}

// si on est sorti à cause de 3 essais ratés, on affiche
//un message et le programme se termine
if ($nb_essai == 3){
	echo "Carte avalée.\n";
}

//sinon on continue le programme
else {
	//tant que le montant demandé est incorrect
	//i.e verifier_montant renvoie false
	while (!verifier_montant($saisie_montant, $solde, $plafond)){
		// on demande de choisir le montant
		$saisie_montant = readline("Entrez votre montant\n");
	}

	//on demande si veut un ticket
	if (readline("Voulez-vous-un ticket (oui/non)\n") == "oui"){
		//si veut, on passe $ticket à true
		$ticket = true;
	}

	//on affiche les montants distribués, de 1à en 10
	for ($i = 10; $i <= $saisie_montant; $i += 10){
		echo "Montant distribué: $i €\n";
	}
	//si veut un ticket, on le donne
	if ($ticket){
		echo "Prenez votre ticket\n";
	}
	//fin du programme
	echo "N'oubliez pas votre carte\nAu revoir, à bientôt, merci pour les agios\n";
}

/**
** function verifier_code
** @description Verifier si le code saisi est correct
** @param saisie_code Code saisie par l'utilisateur
** @param code code correct de la carte
** @return boolean true si code entrée est correct
*/

function verifier_code($saisie_code, $code) {
	if ($saisie_code == $code){
		return true;
	}
	return false;
}

/**
** function verifier_montant
** @description Verifier si le montant est correct
** -> multiple de 10, < solde, <plafond
** @param saisie_montant Montant demandé par l'utilisateur
** @param solde solde du compte
** @param plafond plafond de la carte
** @return boolean true si montant est accepté
*/

function verifier_montant($saisie_montant, $solde, $plafond) {
	if ($saisie_montant % 10 == 0 && $saisie_montant <= $solde && $saisie_montant <= $plafond){
		return true;
	}
	echo "Montant incorrect\n";
	return false;
}
?>