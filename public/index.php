<?php
require_once("../lib/password.php");

$password= new Password;
$length=8;
$options=array(
	'lower'=>true,
	'upper'=>true,
	'numbers'=>true,
	'symbols'=>true
);
echo $password->generate($length,$options);
?>