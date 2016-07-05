<?php

$a = 0;
modifierSteve();
echo "a vaut $a\n";

function modifierSteve(){
	global $a = 10;
	echo "dans la maison, a vaut $a\n";
}
?>