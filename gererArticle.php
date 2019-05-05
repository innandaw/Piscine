
<?php 
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$sql = "SELECT connexion,statut,mail FROM personnes WHERE connexion=1";
	
	$result = mysqli_query($dbh,$sql);
	
	$row = mysqli_fetch_assoc($result);
	
	$id=$row["mail"];
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
	<link href="gererArticle.css" rel="stylesheet" type="text/css"/> 
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
				if('<?php echo $statut; ?>'=='Ac')
				{
					var $currentImgConn = $imgConn.eq(1); //image courante
					$imgConn.css('display', 'none');
					$currentImgConn.css('display', 'block');
				}
				else if('<?php echo $statut; ?>'=='V')
				{
					var $currentImgConn = $imgConn.eq(2); //image courante
					$imgConn.css('display', 'none');
					$currentImgConn.css('display', 'block');
				}
				else
				{
					var $currentImgConn = $imgConn.eq(3); //image courante
					$imgConn.css('display', 'none');
					$currentImgConn.css('display', 'block');
				}
			}
			
			
		});
	</script>
</head> 
 
<body>
	<div id="header">
		<div id="logo">
			<a href="mainPage.php"><img src="Images/Menu/logo.png" id="Logo" width="140" height="60"/></a>  
		</div>
		    
        <div id="barre">
            <h1>Articles en vente</h1>  
        </div> 
		
		<div id="logopanier">
			<img src="Images/Menu/panier.png" width="50" height="40"/>   
		</div>

		<div id="logoCompte">
			<ul>
				<li><a href="creerclient.php"><img src="Images/Menu/compte.png" width="50" height="40"/></a></li>   
				<li><a href="monCompteAch.php"><img src="Images/Menu/compteConn.png" width="50" height="40"/></a></li>
				<li><a href="monCompteVen.php"><img src="Images/Menu/compteConn.png" width="50" height="40"/></a></li>
				<li><a href="monCompteAdmin.php"><img src="Images/Menu/compteConnAdmin.png" width="50" height="40"/></a></li>
			</ul>
		</div>
		
		<h1 id="pann">Mon panier</h1>
		<a href="creerclient.php"><h1 id="conn">Connexion</h1></a>		
	</div>
	
	<div id="cadre">
		<?php 
	
		$user_name = "root";
		$password = "";
		$database = "eceamazon";
		$server = "localhost";
		
		$total=0;
		
		$dbh=mysqli_connect($server, $user_name, $password,$database);
		
		$sql = "SELECT id,nom,description,prix,taille,photos,couleur FROM articles WHERE stock!=0 GROUP BY nom";

		$result = mysqli_query($dbh,$sql);
		
		if (!$result) 
		{
			echo "Impossible d'exécuter la requête ($sql) dans la base";
			exit;
		}
		
		// dossier de destination
		$fichier_dossier = 'Images/Hommes/Bas/';
		
		while ($row = mysqli_fetch_assoc($result)) 
		{	
			$nom=$row["nom"];
			$description=$row["description"];
			$prix=$row["prix"];
			$taille=$row["taille"];
			$couleur=$row["couleur"];
			$img=$row["photos"];
			$id=$row["id"];
			$total=$total+$prix;

			
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
					</div>
				</div>';
	
			echo '<a href ="supprArticle.php?idArticle='.$id.'&chemin=1"><div id="decon"><input type="button" id="deconnecte" width="42px" height="45px"></div></a>';
		
		}
		
	mysqli_free_result($result);
	
	$dbh=null;?>
		
		<div id="tot">
			Total des produits à la vente : <?php echo $total?>
		</div>
	</div>

	

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
	
</body> 

</html> 