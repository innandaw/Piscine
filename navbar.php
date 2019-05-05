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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="navbar.css" type="text/css"/> 

	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

	<link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


	
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
	<script type="text/javascript" src="main.js"></script>
</head> 
 
<body>

	<nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="mainPage.php"><img src="Images/Menu/logo.png" width="140" height="60"/></a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>





        <div class="collapse navbar-collapse" id="main-navigation">
        	<div id="logopanier">
	            <ul class="navbar-nav">
        			<li class="nav-item"><a class="nav-link" href="panier.php"><img src="Images/Menu/panier.png" width="50" height="40"/></a></li>
        		</ul>
        		<a id="panier">Mon panier</a>
        	</div>
        	<div id="logoCompte">
	            <ul class="navbar-nav">
	                <li class="nav-item"><a class="nav-link" href="creerclient.php"><img src="Images/Menu/compte.png" width="50" height="40"/></a></li>
	                <li class="nav-item"><a class="nav-link" href="monCompteAch.php"><img src="Images/Menu/compteConn.png" width="50" height="40"/></a></li>
	                <li class="nav-item"><a class="nav-link" href="monCompteVen.php"><img src="Images/Menu/compteConn.png" width="50" height="40"/></a></li>
	                <li class="nav-item"><a class="nav-link" href="monCompteAdmin.php"><img src="Images/Menu/compteConnAdmin.png" width="50" height="40"/></a></li>
	            </ul>
	            <a id="connexion">Connexion</a>
        	</div>

			
        </div>
    </nav>


    <nav class="main-navbar">
		<div class="container">
			<!-- menu -->
			<ul class="main-menu">
				<li><a href="categories.php">Catégories</a>
					<ul class="sub-menu">
						<li><a href="catvetements.php">Vêtements</a></li>
						<li><a href="catsport.php">Sports & Loisirs</a></li>
						<li><a href="catlivres.php">Livres</a></li>
						<li><a href="catmusique.php">Musiques</a></li>
					</ul>
				</li>
				<li><a href="vendeurs.php">Admin</a></li>
				<li><a href="#">Ventes Flash</a></li>
				<li><a href="ajouter_article.php">Vendre</a></li>
			</ul>
		</div>
	</nav>
	
	
</body> 

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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="navbar.css" type="text/css"/> 

	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

	<link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


	
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
	<script type="text/javascript" src="main.js"></script>
</head> 
 
<body>

	<nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="mainPage.php"><img src="Images/Menu/logo.png" width="140" height="60"/></a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>





        <div class="collapse navbar-collapse" id="main-navigation">
        	<div id="logopanier">
	            <ul class="navbar-nav">
        			<li class="nav-item"><a class="nav-link" href="panier.php"><img src="Images/Menu/panier.png" width="50" height="40"/></a></li>
        		</ul>
        		<a id="panier">Mon panier</a>
        	</div>
        	<div id="logoCompte">
	            <ul class="navbar-nav">
	                <li class="nav-item"><a class="nav-link" href="creerclient.php"><img src="Images/Menu/compte.png" width="50" height="40"/></a></li>
	                <li class="nav-item"><a class="nav-link" href="monCompteAch.php"><img src="Images/Menu/compteConn.png" width="50" height="40"/></a></li>
	                <li class="nav-item"><a class="nav-link" href="monCompteVen.php"><img src="Images/Menu/compteConn.png" width="50" height="40"/></a></li>
	                <li class="nav-item"><a class="nav-link" href="monCompteAdmin.php"><img src="Images/Menu/compteConnAdmin.png" width="50" height="40"/></a></li>
	            </ul>
	            <a id="connexion">Connexion</a>
        	</div>

			
        </div>
    </nav>


    <nav class="main-navbar">
		<div class="container">
			<!-- menu -->
			<ul class="main-menu">
				<li><a href="categories.php">Catégories</a>
					<ul class="sub-menu">
						<li><a href="catvetements.php">Vêtements</a></li>
						<li><a href="catsport.php">Sports & Loisirs</a></li>
						<li><a href="catlivres.php">Livres</a></li>
						<li><a href="catmusique.php">Musiques</a></li>
					</ul>
				</li>
				<li><a href="vendeurs.php">Admin</a></li>
				<li><a href="#">Ventes Flash</a></li>
				<li><a href="ajouter_article.php">Vendre</a></li>
			</ul>
		</div>
	</nav>
	
	
</body> 
</html> 