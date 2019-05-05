
<!DOCTYPE html> 
<head> 
	<title>ECE Amazon</title> 
	<meta charset="utf-8" /> 

	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		
			var $indexImgConn = 0;
			var $logoCompte = $('#logoCompte');
			var $imgConn = $('#logoCompte img');
			
			if('<?php echo $conn; ?>'==0)
			{		
				var $currentImgConn = $imgConn.eq(0); //image courante
				$imgConn.css('display', 'none');
				$currentImgConn.css('display', 'block');
			}
			else
			{
				var $currentImgConn = $imgConn.eq(1); //image courante
				$imgConn.css('display', 'none');
				$currentImgConn.css('display', 'block');
			}
		});
	</script>

	<script type="text/javascript" src="main.js"></script>


</head> 
 
<body>


	<?php include ("navbar.php") ?>

	<h1 id="titre">Bandes dessinées</h1>
	
	<div id="cadre1">
	

	<?php 
	
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);
	

	$sql = "SELECT nom,description,prix,taille,photos,couleur, id FROM articles WHERE categorie='Livres' AND sous_cat='bd' GROUP BY nom";

	
	$result = mysqli_query($dbh,$sql);
	
	if (!$result) 
	{
	    echo "Impossible d'exécuter la requête ($sql) dans la base";
	    exit;
	}

	// dossier de destination
    $fichier_dossier = 'Images/livres/';
	
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
		
		echo '<div id="photo1"><img src="'.$img1.'" width="130" height="170"/></div>';
        if($statut=='Ad')
		{
			echo '<a href ="supprArticle.php?idArticle='.$id.'&chemin=0"><div id="suppr"><img src="Images/supprime.png" width="70" height="70"/></div></a>';
		}
		echo '<div id="infos">
				<div id="gauche">
					<h2>'.$nom.'</h2>
					<h3 id="infos1">'.$description.'</h3>
				</div>
				<div id="droite">
					<h2 class="infos3">'.$prix.' €</h2>
					<a href="ajouterPanier.php?ident='.$id.'"><img src="Images/panier.png" width="70" height="70" class="infos3"/></a>
						

					<h2 id="infos5">Ajouter à mon panier</h2>
				</div>
			</div>';
		
	}
	

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


	<div id="footer">
		<div id="col1">
			<p>Pour mieux nous connaitre</p>
		 	<a href="apropos.html">A propos d'ECE Amazon</a><br/>
		 	<a href="ECE.html">ECE Amazon et notre planète</a><br/>
		 	<a href="Equipe.html">Notre équipe</a>
		</div>

		<div id="col2">
		 	<p>Catégories</p>
		 	<a href="catvetements.php">Vêtements</a><br/>
		 	<a href="catsport.php">Sport et loisirs</a><br/>
		 	<a href="catlivres.php">Livres</a><br/>
		 	<a href="catmusique.php">Musique</a>
	 	</div>

	 	<div id="col3">
		 	<p>Besoins d'aide?</p>
		 	<a href="commandes.html">Voir ou suivre vos commandes</a><br/>
		 	<a href="livraison.html">Tarif et option de livraison</a><br/>
		 	<a href="prime.html">Amazon Prime</a><br/>
		 	<a href="retours.html">Retours</a>
	 	</div>

		<div id="col4">
	 		<p>FAQ</p>
	 	</div>

	 	<div id="ligne">
	 		<a href="contact.html">Contact</a>
	 		<a href="mention.html">Mentions légales</a>
	 	</div>
	</div>	

	
</body> 
</html> 

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

	<h1 id="titre">Bandes dessinées</h1>
	
	<div id="cadre1">
	
	<?php 
	
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$sql = "SELECT nom,description,prix,taille,photos,couleur, id FROM articles WHERE categorie='Livres' AND sous_cat='bd' GROUP BY nom";
	
	$result = mysqli_query($dbh,$sql);
	
	if (!$result) 
	{
	    echo "Impossible d'exécuter la requête ($sql) dans la base";
	    exit;
	}

	// dossier de destination
    $fichier_dossier = 'Images/livres/';
	
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

	<?php include("footer.php"); ?>
	
</body> 
</html> 

