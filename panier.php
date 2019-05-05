<?php 
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$sql = "SELECT connexion,statut FROM personnes WHERE connexion=1";
	
	$result = mysqli_query($dbh,$sql);
	
	$row = mysqli_fetch_assoc($result);
	
	if($row["connexion"]==0)
	{
		$conn=0;
	}
	else
	{
		$conn=1;
	}
	
	if($row["statut"]=='V')
	{
		$statut='V';
	}
	elseif($row["statut"]=='Ac')
	{
		$statut='Ac';
	}
	else
	{
		$statut='Ad';
	}
	
	mysqli_free_result($result);
	
	$dbh=null;
	
?>


<!DOCTYPE html> 
<head> 
	<title>ECE Amazon</title> 
	<meta charset="utf-8" /> 
	<link href="mainPage.css" rel="stylesheet" type="text/css"/> 
	<link href="hautsFemmes.css" rel="stylesheet" type="text/css"/>

	<meta charset="utf-8" />
	<link href="panier1.css" rel="stylesheet" type="text/css"/> 
	<link href="hautsFemmes1.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	

</head> 
 
<body>
	<div id="header">
		<div id="logo">
			<a href="mainPage.php"><img src="Images/Menu/logo.png" id="Logo" width="140" height="60"/></a>  
		</div>
		    
        <form id="barre">
            <input id="champ" type="text" value="Rechercher..."/>
            <input id="bouton" type="button"/>   
        </form> 
		
		<div id="logoPannier">
			<img src="Images/Menu/pannier.png" width="50" height="40"/>   
		</div>
		
		<div id="logoCompte">
			<a href="creerclient.php"><img src="Images/Menu/compte.png" width="50" height="40"/></a>   
		</div>
		
	</div>
	<div id="menu">
		<a href="categories.php"><img src="Images/Menu/categories.png" width="140" height="25" id="cat"/></a>
		<img src="Images/Menu/admin.png" width="140" height="25" id="admin"/>
		<img src="Images/Menu/ventesFlash.png" width="140" height="25" id="ventesFlash"/>
		<a href="ajouter_article.php"><img src="Images/Menu/vendre.png" width="140" height="25" id="vendre"/></a>
	</div>


	
	<h1 id=titre>Mon Panier</h1>

	<?php include('navbar.php')?>

	<div id="contain">
	
	<h1 id="titre">Mon Panier</h1>


		<!-- <div id=total>
			<p>Nombre d'articles:</p>
			<p >Total du panier</p><>
			<a href="connect.php"><img src="Images/valider_panier.png"/></a>
			<a href="valider_panier.php?ident='.$id.'"><img src="Images/valider_panier.png" width="70" height="70" class="infos3"/></a>
		</div> -->

	<?php 
	

	/*session_start();*/
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);

	$sql = "SELECT mail,statut FROM personnes WHERE connexion=1";
	
	$result = mysqli_query($dbh,$sql);

	$row = mysqli_fetch_assoc($result);

	$idAch=$row["mail"];

	$sql = "SELECT id_article FROM panier WHERE id_acheteur='$idAch'";

	$result1 = mysqli_query($dbh,$sql);

	
	$nb=0;
	$total=0;
		
	while($row1 = mysqli_fetch_assoc($result1))
	{
		$id=$row1["id_article"];
		
		$sql = "SELECT nom,description,prix,taille, photos,couleur FROM articles WHERE id=$id";

		$result = mysqli_query($dbh,$sql);

		
		$sql = "SELECT nom,description,prix,taille, photos,couleur,categorie FROM articles WHERE id=$id";

		$result = mysqli_query($dbh,$sql);

		if (!$result) 
		{
			echo "Impossible d'exécuter la requête ($sql) dans la base";
			exit;
		}

		// dossier de destination
		$fichier_dossier = 'Images/Femmes/Hauts/';
		
		$row = mysqli_fetch_assoc($result);
		$nom=$row["nom"];
		$description=$row["description"];
		$prix=$row["prix"];
		$photos=$row["photos"];
		$couleur=$row["couleur"];
		$img=$row["photos"];
		$nb=$nb+1;
		$taille=$row["taille"];
		$couleur=$row["couleur"];
		$cat=$row["categorie"];
		
		$total=$total+$prix;

			// on renomme le fichier, chemin d'acces
			$img1 = $fichier_dossier.$img;
			
			echo '<div>';
				echo '<div id="photo1"><img src="'.$img1.'" width="130" height="170"/></div>';
				
				echo '<a href ="supprArticlePan.php?idArticle='.$id.'"><div id="suppr"><img src="Images/supprime.png" width="70" height="70"/></div></a>';
				
				echo '<br><br><br><br><br><div id="gauche">
						<div id="'.$id.'">
							<h2>'.$nom.'</h2>
							<h3 id="infos1">'.$description.'</h3>';
							
							$sql2 = "SELECT taille FROM articles WHERE nom='$nom' GROUP BY taille";
						
							$result2 = mysqli_query($dbh,$sql2);
							
							echo'<div id="siz"><p>Tailles : <p></div>';
				
							
							echo '<div id="sizes"><h3 class="infos2"> '.$taille.'</h3></div>';				
						
							echo '<div id="color"><h3 class="infos2">'.$couleur.'</h3></div>';	
							
						echo'</div>
					</div>';
					
				echo '<div id="droite">
							<h2 class="infos3">'.$prix.' €</h2>
						</div>';
			echo '</div><br><br><br>';
		
	}

	echo '<br><br><br><br><br><br><br><br><br><br><br><br><div id="total">
			echo '<div id="cadre1">
				<img src="'.$img1.'" width="130" height="170" id="photo1"/>';
				

				echo '<a href ="supprArticlePan.php?idArticle='.$id.'&chemin=2"><div id="suppr"><img src="Images/supprime.png" width="70" height="70"/></div></a>';
				
				
				echo '<div id="gauche">
					<div id="'.$id.'">
						<h2>'.$nom.'</h2>
						<h3 id="infos1">'.$description.'</h3>';
							
						if($cat=="Vetements")
						{								
							echo'<div id="siz"><p>Tailles : <p></div>';
							echo '<div id="sizes"><h3 class="infos2"> '.$taille.'</h3></div>';				
							
							if(isset($_GET["tail"]))
							{
								$taille=$_GET["tail"];
							}
							else
							{
								$taille=0;
							}
						}
						
							
						if($cat!="Livres" || $cat!="Musique")
						{				
							echo'<div id="col"><p>Couleur : <p></div>';
							echo '<div id="color"><h3 class="infos2">'.$couleur.'</h3></div>';				
								
							if(isset($_GET["coul"]))
							{
								$couleur=$_GET["coul"];
							}
							else
							{
								$couleur=0;
							}
						}			
					echo'</div>
				</div>
			</div>';
		
	}
	$_SESSION["total"]=$total;
	echo '<div id="total">
				<h2>Nombre d\'articles: '.$nb.'</h2>
				<h2>Prix total: '.$total.'</h2>
				<a href="valider_panier.php?ident='.$id.'"><img src="Images/valider_panier.png"class="infos3"/></a>
			</div>';
	
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
		 	<a href="catvetements.html">Vêtements</a><br/>
		 	<a href="catsport.html">Sport et loisirs</a><br/>
		 	<a href="catbook.html">Livres</a><br/>
		 	<a href="catmusic.html">Musique</a>
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
	
</div>

	<?php include('footer.php')?>

</body> 
<?php 
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$sql = "SELECT connexion,statut FROM personnes WHERE connexion=1";
	
	$result = mysqli_query($dbh,$sql);
	
	$row = mysqli_fetch_assoc($result);
	
	if($row["connexion"]==0)
	{
		$conn=0;
	}
	else
	{
		$conn=1;
	}
	
	if($row["statut"]=='V')
	{
		$statut='V';
	}
	elseif($row["statut"]=='Ac')
	{
		$statut='Ac';
	}
	else
	{
		$statut='Ad';
	}
	
	mysqli_free_result($result);
	
	$dbh=null;
	
?>


<!DOCTYPE html> 
<head> 
	<title>ECE Amazon</title> 
	<meta charset="utf-8" />
	<link href="panier1.css" rel="stylesheet" type="text/css"/> 
	<link href="hautsFemmes1.css" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	

</head> 
 
<body>
	<?php include('navbar.php')?>

	<div id="contain">
	
	<h1 id="titre">Mon Panier</h1>


		<!-- <div id=total>
			<p>Nombre d'articles:</p>
			<p >Total du panier</p><>
			<a href="connect.php"><img src="Images/valider_panier.png"/></a>
			<a href="valider_panier.php?ident='.$id.'"><img src="Images/valider_panier.png" width="70" height="70" class="infos3"/></a>
		</div> -->

	<?php 
	/*session_start();*/
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);

	$sql = "SELECT mail,statut FROM personnes WHERE connexion=1";
	
	$result = mysqli_query($dbh,$sql);

	$row = mysqli_fetch_assoc($result);

	$idAch=$row["mail"];

	$sql = "SELECT id_article FROM panier WHERE id_acheteur='$idAch'";

	$result1 = mysqli_query($dbh,$sql);

	
	$nb=0;
	$total=0;
		
	while($row1 = mysqli_fetch_assoc($result1))
	{
		$id=$row1["id_article"];
		
		$sql = "SELECT nom,description,prix,taille, photos,couleur,categorie FROM articles WHERE id=$id";

		$result = mysqli_query($dbh,$sql);

		if (!$result) 
		{
			echo "Impossible d'exécuter la requête ($sql) dans la base";
			exit;
		}

		// dossier de destination
		$fichier_dossier = 'Images/Femmes/Hauts/';
		
		$row = mysqli_fetch_assoc($result);
		$nom=$row["nom"];
		$description=$row["description"];
		$prix=$row["prix"];
		$photos=$row["photos"];
		$couleur=$row["couleur"];
		$img=$row["photos"];
		$nb=$nb+1;
		$taille=$row["taille"];
		$couleur=$row["couleur"];
		$cat=$row["categorie"];
		
		$total=$total+$prix;

			// on renomme le fichier, chemin d'acces
			$img1 = $fichier_dossier.$img;
			
			echo '<div id="cadre1">
				<img src="'.$img1.'" width="130" height="170" id="photo1"/>';
				

				echo '<a href ="supprArticlePan.php?idArticle='.$id.'&chemin=2"><div id="suppr"><img src="Images/supprime.png" width="70" height="70"/></div></a>';
				
				
				echo '<div id="gauche">
					<div id="'.$id.'">
						<h2>'.$nom.'</h2>
						<h3 id="infos1">'.$description.'</h3>';
							
						if($cat=="Vetements")
						{								
							echo'<div id="siz"><p>Tailles : <p></div>';
							echo '<div id="sizes"><h3 class="infos2"> '.$taille.'</h3></div>';				
							
							if(isset($_GET["tail"]))
							{
								$taille=$_GET["tail"];
							}
							else
							{
								$taille=0;
							}
						}
						
							
						if($cat!="Livres" || $cat!="Musique")
						{				
							echo'<div id="col"><p>Couleur : <p></div>';
							echo '<div id="color"><h3 class="infos2">'.$couleur.'</h3></div>';				
								
							if(isset($_GET["coul"]))
							{
								$couleur=$_GET["coul"];
							}
							else
							{
								$couleur=0;
							}
						}			
					echo'</div>
				</div>
			</div>';
		
	}
	$_SESSION["total"]=$total;
	echo '<div id="total">
				<h2>Nombre d\'articles: '.$nb.'</h2>
				<h2>Prix total: '.$total.'</h2>
				<a href="valider_panier.php?ident='.$id.'"><img src="Images/valider_panier.png"class="infos3"/></a>
			</div>';
	
	mysqli_free_result($result);
	
	$dbh=null;?>
</div>

	<?php include('footer.php')?>

</body> 
</html> 