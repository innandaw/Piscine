<!DOCTYPE html> 
<head> 
	<title>ECE Amazon</title> 
	<meta charset="utf-8" /> 
	<link href="hautsFemmes1.css" rel="stylesheet" type="text/css"/> 
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<script type="text/javascript" src="main.js"></script>
</head> 
 
<body>
	<?php include ("navbar.php") ?>
	<div id="titre">Bas Femmes</div>
	<div id="cadre1">
	
	<?php 
	
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	$dbh=mysqli_connect($server, $user_name, $password, $database);
	
	$sql = "SELECT nom,description,prix,taille, photos, couleur, id FROM articles WHERE categorie='Vetements' AND sous_cat='Bas' AND sexe='F' AND stock!=0 GROUP BY nom";
	
	$result = mysqli_query($dbh,$sql);
	
	if (!$result) 
	{
	    echo "Impossible d'exécuter la requête ($sql) dans la base";
	    exit;
	}
	
	// dossier de destination
    $fichier_dossier = 'Images/Femmes/Bas/';
	
	while ($row = mysqli_fetch_assoc($result)) 
	{	
		$nom=$row["nom"];
		$description=$row["description"];
		$prix=$row["prix"];
	    $photos=$row["photos"];
	    $couleur=$row["couleur"];
	    $img=$row["photos"];
	    $id=$row["id"];

        // on renomme le fichier, chemin d'acces
        $img1 = $fichier_dossier.$img;
		
		echo '<div id="cadre1">
			<img src="'.$img1.'" width="130" height="170" id="photo1"/>';
			
			if($statut=='Ad')
			{
				echo '<a href ="supprArticle.php?idArticle='.$id.'&chemin=0"><div id="suppr"><img src="Images/supprime.png" width="70" height="70"/></div></a>';
			}
			
			echo '<div id="gauche">
				<div id="'.$id.'">
					<h2>'.$nom.'</h2>
					<h3 id="infos1">'.$description.'</h3>';
						
					$sql1 = "SELECT taille FROM articles WHERE nom='$nom' AND stock!=0 GROUP BY taille";
				
					$result1 = mysqli_query($dbh,$sql1);
						
					echo'<div id="siz"><p>Tailles : <p></div>';
					while ($row1 = mysqli_fetch_assoc($result1)) 
					{
						$taille=$row1["taille"];
						echo '<div id="sizes"><a href ="basFemmes.php?tail='.$taille.'&coul=0#'.$id.'"><h3 class="infos2"> '.$taille.'</h3></a></div>';				
					}
					
					if(isset($_GET["tail"]))
					{
						$taille=$_GET["tail"];
					}
					else
					{
						$taille=0;
					}
					
					$sql1 = "SELECT couleur FROM articles WHERE nom='$nom' AND stock!=0 GROUP BY couleur";
		
					$result1 = mysqli_query($dbh,$sql1);
						
					echo'<div id="col"><p>Couleurs : <p></div>';
					while ($row1 = mysqli_fetch_assoc($result1)) 
					{
						$couleur=$row1["couleur"];
						echo '<div id="color"><a href ="basFemmes.php?tail='.$taille.'&coul='.$couleur.'#'.$id.'"><h3 class="infos2">'.$couleur.'</h3></a></div>';				
					}
						
					if(isset($_GET["coul"]))
					{
						$couleur=$_GET["coul"];
					}
					else
					{
						$couleur=0;
					}
						
					$sql1 = "SELECT id FROM articles WHERE taille='$taille' AND couleur='$couleur'";
		
					$result1 = mysqli_query($dbh,$sql1);
						
					$row1 = mysqli_fetch_assoc($result1);
						
					$id=$row1["id"];
			
				echo'</div>
			</div>
				
			<a href="ajouterPanier.php?ident='.$id.'"><div id="droite">
				<h2 class="infos3">'.$prix.' €</h2>
				<img src="Images/panier.png" width="70" height="70" class="infos3"/>

				<h2 id="infos5">Ajouter à mon panier</h2>
			</div></a>
		</div>';
	}
	
	mysqli_free_result($result);
	
	$dbh=null;?>

	</div>
	<?php include ("footer.php") ?>	
	
</body> 
</html> 