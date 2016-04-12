<?php
require_once("password.php");

$password= new Password;

echo $password->generate();
?>