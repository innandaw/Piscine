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
	<link href="ventesflash.css" rel="stylesheet" type="text/css"/> 
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		
		var $logoCompte = $('#logoCompte');
		var $imgConn = $('#logoCompte img');
		
		var $vend = $('#vend');
		var $imgVend = $('#vend img');

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
		

	</script>
	<link href="ventesflash1.css" rel="stylesheet" type="text/css"/> 
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
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
	<div id="menu">
		<a href="categories.php"><img src="Images/Menu/categories.png" width="140" height="25" id="cat"/></a>
		<img src="Images/Menu/admin.png" width="140" height="25" id="admin"/>
		<img src="Images/Menu/ventesFlash.png" width="140" height="25" id="ventesFlash"/>

		<a href="ajouter_article.php"><img src="Images/Menu/vendre.png" width="140" height="25" id="vendre"/></a>
	
	</div>
    
    <div id="ventesflash">
        <br><br><br>
       <center> <h1>Ventes Flash</h1> </center>
        <center> <p>Voici nos produits les plus vendus ! Profitez de ces belles occasions avant qu'elles ne disparaissent !!</p> </center>
        
<div id="lesproduits">
            <?php             
                $user_name = "root";
                $password = "";
                $database = "eceamazon";
                $server = "localhost";
                
                $nb=0;
                $sortie=0;
	
                $dbh=mysqli_connect($server, $user_name, $password,$database);
                $sql = "SELECT MAX(popularite) FROM articles";   
                $result = mysqli_query($dbh,$sql);
                $row = mysqli_fetch_assoc($result);
                //on recupere la popularité maximum de tous les articles
                $popmax=$row["MAX(popularite)"];
                //On recupere tous les articles qui ont cette popularité
                $sql1 = "SELECT nom,description,prix,taille, photos,couleur, id FROM articles WHERE popularite=$popmax";
                $result1 = mysqli_query($dbh,$sql1);

                //Tant que des articles ont la popularité max
                while ($row1 = mysqli_fetch_assoc($result1))
                    {
                        if($nb<4)
                            {
                                  $nom=$row1["nom"];
		                          $description=$row1["description"];
		                          $prix=$row1["prix"];
                                  $taille=$row1["taille"];
	                              $couleur=$row1["couleur"];
	                              $img=$row1["photos"];
                                  $id=$row1["id"];
                                  $img1=$row1["photos"];
                                //On incrémente le compteur pour savoir combien d'articles sont sur la page vente flash
	                               $nb= $nb+1;
                                //On affiche l'article
                                echo '<div id="articleflash">
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
                                echo '<div id="photo1"><img src="'.$img1.'" width="130" height="170"/></div>';
                            }
                    }


            while ($nb<4)
                {
                    $popmax=$popmax-1;
                    $sql2 = "SELECT nom,description,prix,taille, photos,couleur, id FROM articles WHERE popularite='$popmax'";
                    $result2 = mysqli_query($dbh,$sql2);
                
                    while ($row2 = mysqli_fetch_assoc($result2))
                        {
                            if($nb<=4)
                                {
                                    $id=$row2["id"];
                                    $nom=$row2["nom"];
		                            $description=$row2["description"];
		                            $prix=$row2["prix"];
                                    $taille=$row2["taille"];
                                    $couleur=$row2["couleur"];
                                    $img=$row2["photos"];
                                    $id=$row2["id"];
                                    $nb= $nb+1;
                                    $img=$row2["photos"];
                                    echo '<div id="articleflash">
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
        
                                    echo '<div id="photo1"><img src="'.$img1.'" width="130" height="170"/></div>';
                                    
                                }
        
                             
                        }
                

                }
                
                ?>
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
	
	<?php include ("navbar.php") ?>

	<div id="contain">

	    <div id="ventesflash">
	        <br><br><br>
	    	<h1 id="titre">Ventes Flash</h1>
	        <center> <p>Voici nos produits les plus vendus ! Profitez de ces belles occasions avant qu'elles ne disparaissent !!</p> </center>
	    
        
			<div id="lesproduits">
	            <?php             
	                $user_name = "root";
	                $password = "";
	                $database = "eceamazon";
	                $server = "localhost";
	                
	                $nb=0;
	                $sortie=0;
		
	                $dbh=mysqli_connect($server, $user_name, $password,$database);
	                $sql = "SELECT MAX(popularite) FROM articles";   
	                $result = mysqli_query($dbh,$sql);
	                $row = mysqli_fetch_assoc($result);
	                //on recupere la popularité maximum de tous les articles
	                $popmax=$row["MAX(popularite)"];
	                //On recupere tous les articles qui ont cette popularité
	                $sql1 = "SELECT nom,description,prix,taille, photos,couleur, id FROM articles WHERE popularite=$popmax";
	                $result1 = mysqli_query($dbh,$sql1);

	                //Tant que des articles ont la popularité max
	                while ($row1 = mysqli_fetch_assoc($result1))
	                    {
	                        if($nb<4)
	                            {
	                                  $nom=$row1["nom"];
			                          $description=$row1["description"];
			                          $prix=$row1["prix"];
	                                  $taille=$row1["taille"];
		                              $couleur=$row1["couleur"];
		                              $img=$row1["photos"];
	                                  $id=$row1["id"];
	                                  $img1=$row1["photos"];
	                                //On incrémente le compteur pour savoir combien d'articles sont sur la page vente flash
		                               $nb= $nb+1;
	                                //On affiche l'article
	                                echo '<div id="articleflash">
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
	                                echo '<div id="photo1"><img src="'.$img1.'" width="130" height="170"/></div>';
	                            }
	                    }


	            while ($nb<4)
	                {
	                    $popmax=$popmax-1;
	                    $sql2 = "SELECT nom,description,prix,taille, photos,couleur, id FROM articles WHERE popularite='$popmax'";
	                    $result2 = mysqli_query($dbh,$sql2);
	                
	                    while ($row2 = mysqli_fetch_assoc($result2))
	                        {
	                            if($nb<=4)
	                                {
	                                    $id=$row2["id"];
	                                    $nom=$row2["nom"];
			                            $description=$row2["description"];
			                            $prix=$row2["prix"];
	                                    $taille=$row2["taille"];
	                                    $couleur=$row2["couleur"];
	                                    $img=$row2["photos"];
	                                    $id=$row2["id"];
	                                    $nb= $nb+1;
	                                    $img=$row2["photos"];
	                                    echo '<div id="articleflash">
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
	        
	                                    echo '<div id="photo1"><img src="'.$img1.'" width="130" height="170"/></div>';  
	                                }
	                        }

	                }
	                
	                ?>
	        </div>
    
    	</div>
	</div>
	<?php include("footer.php"); ?>
	
</body> 
<!DOCTYPE html> 
<head> 
	<title>ECE Amazon</title> 
	<meta charset="utf-8" /> 
	<link href="ventesflash1.css" rel="stylesheet" type="text/css"/> 
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<script type="text/javascript" src="main.js"></script>
</head> 
 
<body>
	
	<?php include ("navbar.php") ?>

	<div id="contain">

	    <div id="ventesflash">
	        <br><br><br>
	    	<h1 id="titre">Ventes Flash</h1>
	        <center> <p>Voici nos produits les plus vendus ! Profitez de ces belles occasions avant qu'elles ne disparaissent !!</p> </center>
	    
        
			<div id="lesproduits">
	            <?php             
	                $user_name = "root";
	                $password = "";
	                $database = "eceamazon";
	                $server = "localhost";
	                
	                $nb=0;
	                $sortie=0;
		
	                $dbh=mysqli_connect($server, $user_name, $password,$database);
	                $sql = "SELECT MAX(popularite) FROM articles";   
	                $result = mysqli_query($dbh,$sql);
	                $row = mysqli_fetch_assoc($result);
	                //on recupere la popularité maximum de tous les articles
	                $popmax=$row["MAX(popularite)"];
	                //On recupere tous les articles qui ont cette popularité
	                $sql1 = "SELECT nom,description,prix,taille, photos,couleur, id FROM articles WHERE popularite=$popmax";
	                $result1 = mysqli_query($dbh,$sql1);

	                //Tant que des articles ont la popularité max
	                while ($row1 = mysqli_fetch_assoc($result1))
	                    {
	                        if($nb<4)
	                            {
	                                  $nom=$row1["nom"];
			                          $description=$row1["description"];
			                          $prix=$row1["prix"];
	                                  $taille=$row1["taille"];
		                              $couleur=$row1["couleur"];
		                              $img=$row1["photos"];
	                                  $id=$row1["id"];
	                                  $img1=$row1["photos"];
	                                //On incrémente le compteur pour savoir combien d'articles sont sur la page vente flash
		                               $nb= $nb+1;
	                                //On affiche l'article
	                                echo '<div id="articleflash">
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
	                                echo '<div id="photo1"><img src="'.$img1.'" width="130" height="170"/></div>';
	                            }
	                    }


	            while ($nb<4)
	                {
	                    $popmax=$popmax-1;
	                    $sql2 = "SELECT nom,description,prix,taille, photos,couleur, id FROM articles WHERE popularite='$popmax'";
	                    $result2 = mysqli_query($dbh,$sql2);
	                
	                    while ($row2 = mysqli_fetch_assoc($result2))
	                        {
	                            if($nb<=4)
	                                {
	                                    $id=$row2["id"];
	                                    $nom=$row2["nom"];
			                            $description=$row2["description"];
			                            $prix=$row2["prix"];
	                                    $taille=$row2["taille"];
	                                    $couleur=$row2["couleur"];
	                                    $img=$row2["photos"];
	                                    $id=$row2["id"];
	                                    $nb= $nb+1;
	                                    $img=$row2["photos"];
	                                    echo '<div id="articleflash">
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
	        
	                                    echo '<div id="photo1"><img src="'.$img1.'" width="130" height="170"/></div>';  
	                                }
	                        }

	                }
	                
	                ?>
	        </div>
    
    	</div>
	</div>
	<?php include("footer.php"); ?>
	
</body> 
</html> 