<?php

// le jeu tourne en continu
while (true){
	//choix du chiffre aleatoire
	$nombreWin = rand(1, 100);
	// Tant que le chiffre n'est pas bon....
	while(true){
		//Demande un chiffre l'utilisateur, et met dans $nombresSecret
		$nbSecret = readline("Entrez un chiffre entre 1 et 100\n");
		//Verifie si chiffre est bien un CHIFFRE dans la plage demandée
		if (!is_numeric($nbSecret) || ($nbSecret > 100 || $nbSecret < 0)) {
			//Si le chiffre n'est pas dans la plage demandée, msg d'erreur
			echo "CHiFFRE entre 1 et 100 !\n";
		}
		// si chiffre dans la bonne plage
		else {
			//verifie si le chiffre trouvé est le bon
			if (verify($nombreWin, $nbSecret) == true){
				//Arret de CETTE partie, retour ligne 6
				break;
			}
		}
	}
}

/**
** function verify
** @description: Vérifie les 2 chiffres
** @param $nombreWin: nombre random
** @param $nbSecret: choix du joueur
** @return true si nombres sont égaux
*/

function verify($nombreWin, $nbSecret){
	//si les nombres sont égaux
	if ($nombreWin == $nbSecret){
		echo "Bravo\n";
		//message + return true à ligne 19
		return true;
	}
	//si nombres différents, message
	if ($nombreWin > $nbSecret){
		echo "C'est trop petit\n";
	}
	if ($nombreWin < $nbSecret){
		echo "C'est trop grand\n";
	}
}
?>