<?php
/**
* 
*/
class Password {
	
	$lower_letters="abcdefghijklmnopqrstuvwxyz";
	$upper_letters="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$numbers="0123456789";
	$symbols="!@#$%^&*()_-+=~`.,";

	//charset
	$charset="";


	function __construct()
	{
		
	}

	function define_charset($options){
		if ($options['lower']) {
			this->$charset .= $lower_letters;
		}if ($options['upper']) {
			this->$charset .= $upper_letters;
		}if ($options['numbers']) {
			this->$charset .= $numbers;
		}if ($options['symbols']) {
			this->$charset .= $symbols;
		}
	}

	function generate($length,$options){
		define_charset($options);

		return "Foo";
	}
}

?>