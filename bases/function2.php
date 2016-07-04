<?php
while(true){
	$nb = readline("Entrer un nombre\n");
	// if (isEven($nb) == true){
	if (isEven($nb)){
		echo "$nb est un nombre pair\n";
	}
	else {
		echo "$nb est un nombre impair\n";
	}
}


function isEven($number){
	if ($number % 2 == 0){
		return true;
	}
	return false;
}
?>