<!DOCTYPE html>

<?php
	
	switch($section)
	{
		case "galerie":
			include("galerie.php");
			break;
		
		case "kontakt":
			include("kontakt.php");
			break;
		
		case "impressum":
			include("impressum.php");
			break;
		
		default:
			include("startseite.php");
			break;
	}
	
?>