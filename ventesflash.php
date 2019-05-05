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