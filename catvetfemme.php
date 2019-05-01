<?php 
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$sql = "SELECT connexion FROM personnes WHERE connexion=1";
	
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
	
	mysqli_free_result($result);
	
	$dbh=null;
	
?>

<!DOCTYPE html> 
<head> 
	<title>ECE Amazon</title> 
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">

	<meta charset="utf-8" /> 
	<link href="catvetfemme.css" rel="stylesheet" type="text/css"/> 
	
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
		
		<div id="logopanier">
			<img src="Images/Menu/panier.png" width="50" height="40"/>   
		</div>
		
		<div id="logoCompte">
			<ul>
				<li><a href="creerclient.php"><img src="Images/Menu/compte.png" width="50" height="40"/></a></li>   
				<li><a href="monCompteAch.php"><img src="Images/Menu/compteConn.png" width="50" height="40"/></a></li>
			</ul>
		</div>
		
		<h1 id="pann">Mon panier</h1>
		<a href="creerclient.php"><h1 id="conn">Connexion</h1></a>
	</div>
	
	<div id="menu">
		<a href="categories.php"><img src="Images/Menu/categories.png" width="140" height="25" id="cat"/></a>
		<img src="Images/Menu/admin.png" width="140" height="25" id="admin"/>
		<img src="Images/Menu/ventesFlash.png" width="140" height="25" id="ventesFlash"/>
		<a href="ajouter_article.php"><img src="Images/Menu/vendre.png" width="140" height="25" id="vendre"/></a>
	</div>
	
	<h1 id="titre">Femmes</h1>
	
	<a href="hautsFemmes.php"><div id="hauts">
	
		<h1>Hauts</h1>
		
		<div id="column1">
			<img src="Images/Femmes/Hauts/haut1.jpeg" width="100" height="120" id="ht1"/>
			<img src="Images/Femmes/Hauts/haut2.png" width="120" height="150"/>
		</div>
		<div id="column2">
			<img src="Images/Femmes/Hauts/haut3.png" width="180" height="240"/>
		</div>
		
	</div></a>
	
	<a href="basFemmes.php"><div id="bas">
	
		<h1>Bas</h1>
		
		<div id="column3">
			<img src="Images/Femmes/Bas/bas1.png" width="180" height="240"/>
		</div>
		<div id="column4">
			<img src="Images/Femmes/Bas/bas2.png" width="120" height="160"/>
		</div>
		
	</div></a>
	
	<a href="chaussuresFemmes.php"><div id="chaussures">
	
		<h1>Chaussures</h1>
		
		<div id="column5">
			<img src="Images/Femmes/Chaussures/chaussures1.png" width="110" height="90" id="ht2"/>
			<img src="Images/Femmes/Chaussures/chaussures2.jpg" width="120" height="130"/>
		</div>
		<div id="column6">
			<img src="Images/Femmes/Chaussures/chaussures3.png" width="180" height="240"/>
		</div>
		
	</div></a>
	
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