

<!DOCTYPE html> 
<head> 
	<title>ECE Amazon</title> 
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">

	<meta charset="utf-8" /> 
	<link href="categories1.css" rel="stylesheet" type="text/css"/> 
	
	
</head> 
 
<body>
	
	<?php include ("navbar.php") ?>

	<div id="contain">
		<h1 id="titre">Catégories</h1>
		
		<div>
			<h1 id="t1">Vêtements</h1>
			<h1 id="t2">Sports et Loisirs</h1>
			<h1 id="t3">Livres</h1>
			<h1 id="t4">Musique</h1>
		</div>
		
		<div>
			<a href="catvetements.php"><img src="Images/catvetements.jpg" type="bouton" id="cat1"/></a>
			<a href="catsport.php"><img src="Images/sportcat.png" type="bouton" id="cat2"/></a>
			<a href="catlivres.php"><img src="Images/bookcat.jpg" type="bouton" id="cat3"/></a>
			<a href="catmusique.php"><img src="Images/musiccat.jpg" type="bouton" id="cat4"/></a><br>
		</div>	
	</div>
	
	<?php include("footer.php"); ?>
</body> 

</html> 