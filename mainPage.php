<?php 
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
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
	
	$dbh=null;
	
?>

<!DOCTYPE html> 
<head> 
	<title>ECE Amazon</title> 
	<meta charset="utf-8" /> 
	<link href="mainPage.css" rel="stylesheet" type="text/css"/> 
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		
		var $logoCompte = $('#logoCompte');
		var $imgConn = $('#logoCompte img');
		
		var $logoPanier = $('#logopanier');
		var $imgPanier = $('#logopanier img');

		if('<?php echo $conn; ?>'==0)
		{		
			var $currentImgConn = $imgConn.eq(0); //image courante
			$imgConn.css('display', 'none');
			$currentImgConn.css('display', 'block');
			
			var $currentImgVend = $imgVend.eq(1); //image courante
			$imgVend.css('display', 'none');
			$currentImgVend.css('display', 'block');
		}
		else
		{
			
			if('<?php echo $statut; ?>'=='Ac')
			{
				var $currentImgConn = $imgConn.eq(1); //image courante
				$imgConn.css('display', 'none');
				$currentImgConn.css('display', 'block');
				
				var $currentImgVend = $imgVend.eq(1); //image courante
				$imgVend.css('display', 'none');
				$currentImgVend.css('display', 'block');
			}
			else if('<?php echo $statut; ?>'=='V')
			{
				var $currentImgConn = $imgConn.eq(2); //image courante
				$imgConn.css('display', 'none');
				$currentImgConn.css('display', 'block');
				
				var $currentImgVend = $imgVend.eq(0); //image courante
				$imgVend.css('display', 'none');
				$currentImgVend.css('display', 'block');
			}
			else
			{
				var $currentImgConn = $imgConn.eq(3); //image courante
				$imgConn.css('display', 'none');
				$currentImgConn.css('display', 'block');
				
				var $currentImgVend = $imgVend.eq(0); //image courante
				$imgVend.css('display', 'none');
				$currentImgVend.css('display', 'block');
			}
		}
		
		var $carrousel = $('#carrousel');
		var $img = $('#carrousel img');
		var $indexImg = $img.length - 1;
		var i = 0; //compteur
		var $currentImg = $img.eq(i); //image courante
		$img.css('display', 'none');
		$currentImg.css('display', 'block');
		
		//quand on clique sur le bouton "suivant"
		$('.next').click(function()
		{
			i++;
			if (i <= $indexImg){
				$img.css('display', 'none');
				$currentImg = $img.eq(i);
				$currentImg.css('display', 'block');
			} 
			else 
			{
				i = $indexImg;
			}
		});


		//quand on clique sur le bouton "précédent"
		$('.prev').click(function(){
			i--;
			if (i >= 0)
			{
				$img.css('display', 'none');
				$currentImg = $img.eq(i);
				$currentImg.css('display', 'block');
			} 
			else 
			{
				i = 0;
			}
		});


		//defilement automatique
		function slideImg()
		{
			
			setTimeout(function() 
			{
				if (i < $indexImg) 
				{
					i++;
				} 
				else 
				{
					i = 0;
				}
			$img.css('display', 'none');
			$currentImg = $img.eq(i);
			$currentImg.css('display', 'block');
			slideImg();
			}, 4000);
			}
			slideImg();
		});
	</script>
	<script type="text/javascript" src="main.js"></script>
</head> 
 
<body>
	<div id="header">
		<div id="logo">
			<a href="mainPage.php"><img src="Images/Menu/logo.png" width="140" height="60"/></a>  
		</div>
		    
        <form id="barre">
            <input id="champ" type="text" value="Rechercher..."/>
            <input id="bouton" type="button"/>   
        </form> 
		
		<div id="logopanier">
			<a href="panier.php"><img src="Images/Menu/panier.png" width="50" height="40"/></a> 
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
	<div id="menu">
		<a href="categories.php"><img src="Images/Menu/categories.png" width="140" height="25" id="cat"/></a>
		<img src="Images/Menu/admin.png" width="140" height="25" id="admin"/>
		<a href="ventesFlash.php"><img src="Images/Menu/ventesFlash.png" width="140" height="25" id="ventesFlash"/></a>

		<a href="ajouter_article.php"><img src="Images/Menu/vendre.png" width="140" height="25" id="vendre"/></a>
	
	</div>

	<h1 id="titre">Ventes Flash</h1>
	<div id="carrousel">
		<ul>
			<li><img src="Images/Ventes1.jpg" width="1260" height="350"></li>
			<li><img src="Images/Vente2.jpg" width="1260" height="350"></li>
		</ul>
		<input type="button" value="Précédent" class="prev">
		<input type="button" value="Suivant" class="next">
	</div>
	
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
		<a href="catmusique.php"><img src="Images/musiccat.jpg" type="bouton" id="cat4"/></a>
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