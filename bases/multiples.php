<?php

//parcourir les nombres, et afficher si divisible par 3, 5, les 2  ou rien

	//parcours des chiffres
	for ($i = 1; $i < 31; $i++){
		//test par 3 ET 5
		if ($i % 3 == 0 && $i % 5 == 0){
			echo "$i est divisible par 3 et 5\n";
		}
		//sinon par 3
		else if ($i % 3 == 0){
			echo "$i est divisible par 3\n";
		}
		//sinon par 5
		else if ($i % 5 == 0){
			echo "$i est divisible par 5\n";
		}
		//sinon on affiche le nombre seul
		else {
			echo "$i\n";
		}
	}
?>