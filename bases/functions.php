<?php
// $str = coucou("toto", "Bonjour");

// print($str);
// function coucou($nom, $greeting = "Salut"){
// 	return $greeting . " ".$nom;
// }

//function.php 10 12
$chiffre = $argv[1];
$multi = $argv[2];
// print(multiplier($chiffre, $multi));
$result = multiplier($chiffre, $multi);
print($result);

function multiplier($nb1, $nb2){
	$result = $nb1 * $nb2;
	return "La mulitplication de $nb1 par $nb2 vaut $result";
}
?>

