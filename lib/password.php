<?php
/**
* 
*/
class Password {
	
	// $lower_letters="abcdefghijklmnopqrstuvwxyz";
	// $upper_letters="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	// $numbers="0123456789";
	// $symbols="!@#$%^&*()_-+=~`.,";

	// charset
	// $charset='';
	// $generated_password='';

	function __construct()
	{
		
	}

	function define_charset($options){
		// if ($options['lower']) {
			this->$charset .= this->$lower_letters;
		// }if ($options['upper']) {
			this->$charset .= this->$upper_letters;
		// }if ($options['numbers']) {
			this->$charset .= this->$numbers;
		// }if ($options['symbols']) {
			this->$charset .= this->$symbols;
		// }
	// }

	function pickrandomno($start=0,$end){
		return mt_rand($start,$end);
	}

	function generate($length,$options){
		define_charset($options);
		
		$charset_length=strlen(this->charset);

		
		for(i=0;i<$length;i++){
			$position=pickrandomno(0,$charset_length-1);
			this->$generated_password.=this->charset[$position];
		}

		return $generated_password;
	}
}

?>