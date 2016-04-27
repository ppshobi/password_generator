<?php
require_once("../lib/password.php");
if (isset($_POST['submit'])) {
	$password= new Password;
	$length=$_POST['length'];
	$options=array(
		'lower'=>true,
		'upper'=>true,
		'numbers'=>true,
		'symbols'=>true
	);
	echo $password->generate($length,$options);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Password Generator</title>
</head>
<body>
<header>Password Generator</header>
<div class="options">
	<form name="configuration" method="post" action="">
		<input type="number" name="length" />
		<input type="submit" name="submit" value="Generate Password" />
	</form>
	
</div>
</body>
</html>