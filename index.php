<!DOCTYPE html>

<?php
	
	if(isset($_GET["section"]))
	{
		$section = $_GET["section"];
	}
	else
	{
		$section = "";
	}
	
?>

<html>
	<head>
	
		<title>M&uuml;mlingfischer</title>
		
		<meta charset="utf-8" />
		<!-- <meta charset="iso-8859-1" /> -->
		<!-- <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> -->
		
		<meta name="description" content="Mümlingfischer" />
		
		<link href="style.css" type="text/css" rel="stylesheet" />
		
		<!-- [if gte IE 9] -->
		<style type="text/css">
			.gradient {
				filter: none;
			}
		</style>
	</head>
	
	<body>
		<div id="wrapper">
			<div id="header">
				<a href="index.php?section?startseite" id="banner" class="shadow"></a>
				<img src="./images/logo.png" alt="Logo" width="160px" height="160px" id="logo">
			</div>
			
			<div id="menu-top" class="shadow-menu">
				<?php include("menu.php") ?>
			</div>
			
			<div id="home" class="shadow-menu">
				<ul>
					<li><a class="menu" href="index.php?section=startseite">Startseite</a></li>
				</ul>
			</div>
			
			<div id="content" class="shadow">
				<?php include("sites.php") ?>
			</div>
		</div>
		
		<div id="footer">
			<?php include("footer.php") ?>
		</div>
	</body>
</html>