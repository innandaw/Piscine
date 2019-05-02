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
	<link href="articles.css" rel="stylesheet" type="text/css"/> 
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
            <h1>Fiche Produit</h1>  
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
		<form action="ajouter.php" method="post" action="" enctype="multipart/form-data">
					
	        <table id="infos">

	        	<tr>
	        		<div id="img_article">
						<input type="file" name="fichier_upload" id="fichier_upload"><br>
					</div>
				</tr>
		        <tr>
			       <td>Nom de l'article: </td>
	               <td><input type="text" name="nom"></td>
			    </tr>
	        	<tr>
	                <td>Description de l'article: </td>
	                <td ><textarea name="description" id="description"></textarea></td>
	            </tr>
	            <tr>
	                <td>Catégorie: </td>
	                <td>
	                	<select name="categorie" type="text" >
					        <option value="Catégorie">
					        <option value="Vetements">Vêtements</option>
					        <option value="Sports">Sports et loisirs</option>
					        <option value="Livres">Livres</option>
					        <option value="Musique">Musique</option>
					    </select>
					</td>
	            </tr>
	            <tr>
	                <td>Sous-catégorie: </td>
	                <td>
	                	<select name="sous_cat" type="text" >
					        <option value="sous_cat">
					        <option value="hauts">Hauts</option>
					        <option value="bas">Bas</option>
					        <option value="chaussures">Chaussures</option>
					        <option value="vet_sportifs">Vêtements sportifs</option>
					        <option value="elec">Eletroniques</option>
					        <option value="access">Accessoires</option>
					    </select>
					</td>
	            </tr>
	            <tr>
	                <td>Sexe: </td>
	                <td><input type="radio" value="Femme" name="sexe"/>Femme</td>
			      	<td><input type="radio" value="Homme" name="sexe"/>Homme</td>
	            </tr>
	            <tr>
	                <td>Nombre de tailles disponibles: </td>
	                <td><input type="text" name="taille"></td>
	            </tr>
	            <tr>
	                <td colspan="2"><input type="submit" value="Valider l'article" id="article_ok"></td>
	            </tr>
	        </table>
	    </form>
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