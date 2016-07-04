<?php
// $prenom = "Sylvain";
$prenom = $argv[1];
$age = $argv[2];
//echo("Bonjour ".$prenom." comment ca va?\n");

//interpolation
echo("Bonjour $prenom comment ca va?\n Tu as $argv[2] ans\n");
?>