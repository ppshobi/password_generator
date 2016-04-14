<?php
/**
* 
*/
class Password {
	
	private $lower_letters="abcdefghijklmnopqrstuvwxyz";
	private $upper_letters="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	private $numbers="0123456789";
	private $symbols="!@#$%^&*()_-+=~`.,";

	//charset
	private $charset='';
	private $generated_password='';

	function __construct()
	{
		
	}

	function define_charset($options){
		if ($options['lower']) {
			$charset .= $lower_letters;
		}if ($options['upper']) {
			$charset .= $upper_letters;
		}if ($options['numbers']) {
			$charset .= $numbers;
		}if ($options['symbols']) {
			$charset .= $symbols;
		}
	}

	function pickrandomno($start=0,$end){
		return mt_rand($start,$end);
	}

	function generate($length,$options){
		define_charset($options);
		
		$charset_length=strlen(charset);

		
		for($i=0;$i<$length;$i++){
			$position=pickrandomno(0,$charset_length-1);
			$this->$generated_password.=$this->charset[$position];
		}

		return $generated_password;
	}
}

?>