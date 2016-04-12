<?php
require_once("../lib/password.php");

$password= new Password;

echo $password->generate();
?>