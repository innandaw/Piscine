<!DOCTYPE html> 
<head> 
	<title>ECE Amazon</title> 
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">

	<meta charset="utf-8" /> 
	<link href="catmusique1.css" rel="stylesheet" type="text/css"/> 
</head> 
 
<body>
	<?php include ("navbar.php") ?>

	<div id="contain">
		<h1 id="titre">Musique</h1>
		
		<div>
			<a href="musique_class.php"><img src="Images/musique/classic.jpg" type="bouton" id="cat1"/></a>
			<a href="musique_com.php"><img src="Images/musique/commercial.jpg" type="bouton" id="cat2"/></a>
			<a href="musique_rock.php"><img src="Images/musique/rock.jpg" type="bouton" id="cat3"/></a>
		</div>	
		
		<div>
			<h1 id="t1">Classique</h1>
			<h1 id="t2">Commerciale</h1>
			<h1 id="t3">Rock</h1>
		</div>
	</div>

	<?php include ("footer.php") ?>
	
	
</body> 
</html> 