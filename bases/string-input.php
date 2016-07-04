<?php
$prenom = readline("Comment tu t'appelles?\n");
$age = readline("Tu as quel âge ?\n");

while (intval($age) == 0){
	$age = readline("En chiffres, débile!\n");
}
echo "Bonjour $prenom, tu as $age ans\n";
?>