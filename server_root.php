<?php
$GLOBALS["local"] = TRUE;
$GLOBALS["debug"] = FALSE;

//SET SERVER ROOT LOCATIONS
function urlRoot($local = FALSE){     //returns root url
	if ($local) {
		$url = "http://localhost/choughs-nest-hotel/"; //TEST SERVER
	}
	else {
		$url = "https://choughsnesthotel.co.uk/";
	}
	return $url;
	}

// function serverRoot(){   //returns root dir of host
	//$root = "http://localhost/choughs-nest-hotel/"; //TEST SERVER
	// $root = "";
	// return $root;
	// }

function cssVersion($local = FALSE){
	if ($local) {
		$css = "styles.css"; //TEST VERSION
	}
	else {
		$css = "styles.min.css";
	}
	return $css;
	}

?>