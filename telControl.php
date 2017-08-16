<?php

include 'inc/functions.php';

//$tel = "+254718837808"; // 254718837808 // 0718837808 // 718837808

if(isset($_POST['tel'])) {

	$tel = preg_replace("/[^0-9]/", '', $_POST['phone']); // clean the posted tel number to be an integer i.e btn 0-9

	if(telCheck($tel) == FALSE) {
	// true
		echo "<strong>" . $tel . "</strong> is an invalid telephone number, please check its length and try again";
	} else {
		echo "<strong>" . telCheck($tel) . "</strong> is a valid telephone number";
	}
} else {
	echo "<!DOCTYPE html>
<html>
<head>
	<title>TEL Number</title>
</head>
<body>
<form method=\"POST\">
	<input type=\"text\" name=\"phone\" id=\"phone\"/>
	<input type=\"submit\" name=\"tel\" value=\"Submit\"/>
</form>
</body>
</html>";
}

?>