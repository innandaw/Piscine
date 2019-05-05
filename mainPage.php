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
	<link rel="stylesheet" href="navbar.css" type="text/css"/>
	<link rel="stylesheet" href="mainPage1.css" type="text/css"/>  
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
				
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

	<?php include ("navbar.php") ?>

	<div id="contain">
	<h1 id="titre">Ventes Flash</h1>
	<div id="carrousel">
		<ul>
			<li><img src="Images/Ventes1.jpg" width="1500" height="400"></li>
			<li><img src="Images/Vente2.jpg" width="1500" height="400"></li>
		</ul>
		<a value="Précédent" class="prev">&#10094;</a>
		<a value="Suivant" class="next">&#10095;</a>
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
</div>



	<?php include("footer.php"); ?>
	
</body> 


</html> 