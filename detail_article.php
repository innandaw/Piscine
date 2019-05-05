
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
		<form action="details_article.php" method="post" action="" enctype="multipart/form-data">
					
			<div id="infos_details1">
	        <table>
	        	<h1>Produit 1</h1>
		        <tr>
			       <td>Couleur: </td>
	               <td><input type="text" name="couleur"></td>
			    </tr>
	            <tr>
	                <td>Taille: </td>
	                <td>
	                	<select name="taille" type="number">
					        <option value="Taille">
							<option value="TU">TU</option>
					        <option value="34">34</option>
					        <option value="36">36</option>
					        <option value="38">38</option>
					        <option value="39">39</option>
					        <option value="40">40</option>
					        <option value="41">41</option>
					        <option value="42">42</option>
					        <option value="43">43</option>
					        <option value="44">44</option>
					        <option value="45">45</option>
					        <option value="S">S</option>
					        <option value="M">M</option>
					        <option value="L">L</option>
					        <option value="XL">XL</option>
					        <option value="XXL">XXL</option>
					    </select>
					</td>
	            </tr>

	            <tr>
	                <td>Prix (€): </td>
	                <td ><input name="prix" id="prix"></td>
	            </tr>
	            <tr>
	                <td>Stock: </td>
	                <td ><input name="stock" id="stock"></td>
	            </tr>
	          	<tr>
	                <td colspan="2"><input type="submit" value="Valider l'article" id="article_ok"></td>
	            </tr>
	        </table>
	    </div>

	    	<div id="infos_details2">
	        <table>
	        	<h1>Produit 2</h1>
		        <tr>
			       <td>Couleur: </td>
	               <td><input type="text" name="couleur2"></td>
			    </tr>
	            <tr>
	                <td>Taille: </td>
	                <td>
	                	<select name="taille2" type="number">
					        <option value="Taille">
							<option value="TU">TU</option>
					        <option value="34">34</option>
					        <option value="36">36</option>
					        <option value="38">38</option>
					        <option value="39">39</option>
					        <option value="40">40</option>
					        <option value="41">41</option>
					        <option value="42">42</option>
					        <option value="43">43</option>
					        <option value="44">44</option>
					        <option value="45">45</option>
					        <option value="S">S</option>
					        <option value="M">M</option>
					        <option value="L">L</option>
					        <option value="XL">XL</option>
					        <option value="XXL">XXL</option>
					    </select>
					</td>
	            </tr>

	            <tr>
	                <td>Prix (€): </td>
	                <td ><input name="prix2" id="prix"></td>
	            </tr>
	            <tr>
	                <td>Stock: </td>
	                <td ><input name="stock2" id="stock"></td>
	            </tr>
	          	<tr>
	                <td colspan="2"><input type="submit" value="Valider l'article" id="article_ok"></td>
	            </tr>
	        </table>
	    </div>

	    	<div id="infos_details3">
	        <table>
	        	<h1>Produit 3</h1>
		        <tr>
			       <td>Couleur: </td>
	               <td><input type="text" name="couleur3"></td>
			    </tr>
	            <tr>
	                <td>Taille: </td>
	                <td>
	                	<select name="taille3" type="number">
					        <option value="Taille">
							<option value="TU">TU</option>
					        <option value="34">34</option>
					        <option value="36">36</option>
					        <option value="38">38</option>
					        <option value="39">39</option>
					        <option value="40">40</option>
					        <option value="41">41</option>
					        <option value="42">42</option>
					        <option value="43">43</option>
					        <option value="44">44</option>
					        <option value="45">45</option>
					        <option value="S">S</option>
					        <option value="M">M</option>
					        <option value="L">L</option>
					        <option value="XL">XL</option>
					        <option value="XXL">XXL</option>
					    </select>
					</td>
	            </tr>

	            <tr>
	                <td>Prix (€): </td>
	                <td ><input name="prix3" id="prix"></td>
	            </tr>
	            <tr>
	                <td>Stock: </td>
	                <td ><input name="stock3" id="stock"></td>
	            </tr>
	          	<tr>
	                <td colspan="2"><input type="submit" value="Valider l'article" id="article_ok"></td>
	            </tr>
	        </table>
	    </div>

	    <div id="infos_details4">
	        <table id="infos_details4">
	        	<h1>Produit 4</h1>
		        <tr>
			       <td>Couleur: </td>
	               <td><input type="text" name="couleur4"></td>
			    </tr>
	            <tr>
	                <td>Taille: </td>
	                <td>
	                	<select name="taille4" type="number">
					        <option value="Taille">
					        <option value="TU">TU</option>
					        <option value="34">34</option>
					        <option value="36">36</option>
					        <option value="38">38</option>
					        <option value="39">39</option>
					        <option value="40">40</option>
					        <option value="41">41</option>
					        <option value="42">42</option>
					        <option value="43">43</option>
					        <option value="44">44</option>
					        <option value="45">45</option>
					        <option value="S">S</option>
					        <option value="M">M</option>
					        <option value="L">L</option>
					        <option value="XL">XL</option>
					        <option value="XXL">XXL</option>
					    </select>
					</td>
	            </tr>

	            <tr>
	                <td>Prix (€): </td>
	                <td ><input name="prix4" id="prix"></td>
	            </tr>
	            <tr>
	                <td>Stock: </td>
	                <td ><input name="stock4" id="stock"></td>
	            </tr>
	          	<tr>
	                <td colspan="2"><input type="submit" value="Valider l'article" id="article_ok"></td>
	            </tr>
	        </table>
	    </div>
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