
<!DOCTYPE html> 
<head> 
	<title>ECE Amazon</title> 
	<meta charset="utf-8" /> 
	<link href="articles1.css" rel="stylesheet" type="text/css"/> 
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
</head> 
 
<body>
	<?php include("navbar.php"); ?>

	<div id="contain1">
	<div id="titre">Ajouter un article</div>
	<div id="cadre">
		<form action="ajouter.php" method="post" action="" enctype="multipart/form-data">
					
	        <table class="infos">
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
	                <td>Nombre de variations d'article (4 max): </td>
	                <td><input type="text" name="taille"></td>
	            </tr>
	            
	        </table>
			<br>
			<table class="infos">
				 <tr>
	                <td>Sexe: </td>
	                <td><input type="radio" value="Femme" name="sexe"/>Femme</td>
			      	<td><input type="radio" value="Homme" name="sexe"/>Homme</td>
			      	<td><input type="radio" value="Unisexe" name="sexe"/>Unisexe</td>
	            </tr>
	            <tr>
	                <td colspan="2"><input type="submit" value="Valider l'article" id="article_ok"></td>
	            </tr>
			</table>
	    </form>		
	</div>
</div>



<?php include("footer.php"); ?>
	
</body> 

</html> 