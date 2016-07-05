<?php
$words = [
'bonjour',
'saussice',
'developpement',
'automobile',
'gateau',
'camion'
];
$guess = [];
$tried = [];
$try = 0;
$max_try = 10;
$replay = 'oui';

while ($replay == 'oui'){
	$word_to_guess = $words[rand(0, count($words) - 1)];
	$guess = make_guess($word_to_guess);
	while ($try < $max_try){
		display_word();
		$prop = readline("Quelle est votre proposition ?\n");
		$checked = check_letter(strtolower($word_to_guess), strtolower($prop));
		if ($checked === true){
			$replay = readline("Bravo! Vous avez trouver en $try essais\nVoulez-vous rejouer ? (oui/non)\n");
			break;
		}
		else {
			$left = $max_try - ++$try;
			echo "Non, il vous reste $left essais\n";
		}
	}
	echo "PERDU\n";
	$replay = readline("Voulez-vous rejouer ? (oui/non)\n");
}

function check_word($word, $prop){
	if ($prop == $word){
		return true;
	}
	return false;
}

function check_letter($word, $prop){
	global $guess;
	if (strlen($prop) > 1){
		return check_word($word, $prop);
	}
	else {
		$index = 0;
		while(true){
			$index = strpos($word, $prop, $index + 1);
			if($index != false){
				$guess[$index] = $prop;
			}
			else {
				break;
			}
		}
		if (!in_array("_", $guess)){
			return check_word($word, $prop);
		}
		else {
			return "ok";
		}
	}
}
function make_guess($word){
	$str = [];
	$str[0] = substr($word[0], 0, 1);
	for ($i = 1; $i < strlen($word); $i++){
		$str[] = "_";
	}
	return $str;
}

function display_word(){
	global $guess;
	foreach ($guess as $k => $v) {
		echo strtoupper($v)." ";
	}
	echo "\n";
}
?>