<?php

function telCheck($value) {

	$telen = strlen($value); // getting length of tel number

	if($telen == 10) {
	// true
		return $value;
	} else {
	// fall back
		if ($telen == 13) {
			// +254718837808
			// remove the 1st 4 characters and replace with 0
			return "0" . substr($value, 4); // "0718837808"
		} elseif ($telen == 12) {
			// 254718837808
			// remove the 1st 3 characters and replace with 0
			return "0" . substr($value, 3); // "0718837808"
		} else {
			// in case tel number length is not btn 10 & 13, thus number can not be verified.
			return FALSE;
		}
		
	}
}

?>