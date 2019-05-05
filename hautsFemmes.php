
<!DOCTYPE html> 
<head> 
	<title>ECE Amazon</title> 
	<meta charset="utf-8" /> 
	<link rel="stylesheet" href="hautsFemmes1.css" type="text/css"/> 

</head> 
 
<body>

	<?php include ("navbar.php") ?>

	<h1 id="titre">Hauts Femmes</h1>
	
	<div id="cadre1">
	<?php 
	
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$sql = "SELECT nom,description,prix,taille, photos,couleur, id FROM articles WHERE categorie='Vetements' AND sous_cat='Hauts' AND sexe='F' GROUP BY nom";
	
	$result = mysqli_query($dbh,$sql);
	
	if (!$result) 
	{
	    echo "Impossible d'exécuter la requête ($sql) dans la base";
	    exit;
	}
	
	// dossier de destination
    $fichier_dossier = 'Images/Femmes/Hauts/';
	
	while ($row = mysqli_fetch_assoc($result)) 
	{	
		$nom=$row["nom"];
		$description=$row["description"];
		$prix=$row["prix"];
	    $taille=$row["taille"];
	    $couleur=$row["couleur"];
	    $img=$row["photos"];
	    $id=$row["id"];

	    
        // on renomme le fichier, chemin d'acces
        $img1 = $fichier_dossier.$img;
		
		echo '<div id="photo1"><img src="'.$img1.'" width="130" height="170"/></div>';
		echo '<div id="infos">
				<div id="gauche">
					<h2>'.$nom.'</h2>
					<h3 id="infos1">'.$description.'</h3>
				</div>
				<div id="droite">
					<h2 class="infos3">'.$prix.' €</h2>
					<a href="ajouterPanier.php?ident='.$id.'"><img src="Images/panier.png" width="70" height="70" class="infos3"/></a>
						

					<div id="infos5"><h2>Ajouter à mon panier</h2></div>
				</div>
			</div>';
		
	}
	
	mysqli_free_result($result);
	
	$dbh=null;?>
	</div>

	<?php include("footer.php"); ?>
	
</body> 

</html> 