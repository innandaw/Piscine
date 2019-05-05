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
	
	$sql = "SELECT * FROM personnes WHERE connexion=1";

	$result = mysqli_query($dbh,$sql);

	while ($row = mysqli_fetch_assoc($result)) 
	{		
	   //echo "Prenom: " . $row["prenom"] . "<br>";
	   $prenom=$row["prenom"];
	   //echo "Nom: " . $row["nom"] . "<br>";
	   $nom=$row["nom"];
	   //echo "DateNaissnce: " . $row["date_naissance"] . "<br>";
	   $dateNais=$row["date_naissance"];
	   //echo "Mail: " . $row["mail"] . "<br>";
	   $mail=$row["mail"];
	   //echo "adresse: " . $row["adresse"] . "<br>";
	   $adresse=$row["adresse"];
	   //echo "ville: " . $row["ville"] . "<br>";
	   $ville=$row["ville"];
	   //echo "CP: " . $row["CP"] . "<br>";
	   $cp=$row["CP"];
	   //echo "Pays: " . $row["pays"] . "<br>";
	   $pays=$row["pays"];
	   //echo "tel: " . $row["tel"] . "<br>";
	   $tel=$row["tel"];
	   //echo "typeCarte: " . $row["type_carte"] . "<br>";
	   $typeCarte=$row["type_carte"];
	   //echo "Num carte: " . $row["numero_carte"] . "<br>";
	   $numCarte=$row["numero_carte"];
	   //echo "Nom carte: " . $row["nom_carte"] . "<br>";
	   $nomCarte=$row["nom_carte"];
	   //echo "Date exp: " . $row["date_exp"] . "<br>";
	   $dateExp=$row["date_exp"];
	   //echo $row["cvv"] . $row["cvv"];
	   $cvv=$row["cvv"];
	   //echo "<br>";
	}
	
	
	
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
	
	$sql = "SELECT * FROM personnes WHERE connexion=1";

	$result = mysqli_query($dbh,$sql);

	while ($row = mysqli_fetch_assoc($result)) 
	{		
	   //echo "Prenom: " . $row["prenom"] . "<br>";
	   $prenom=$row["prenom"];
	   //echo "Nom: " . $row["nom"] . "<br>";
	   $nom=$row["nom"];
	   //echo "DateNaissnce: " . $row["date_naissance"] . "<br>";
	   $dateNais=$row["date_naissance"];
	   //echo "Mail: " . $row["mail"] . "<br>";
	   $mail=$row["mail"];
	   //echo "adresse: " . $row["adresse"] . "<br>";
	   $adresse=$row["adresse"];
	   //echo "ville: " . $row["ville"] . "<br>";
	   $ville=$row["ville"];
	   //echo "CP: " . $row["CP"] . "<br>";
	   $cp=$row["CP"];
	   //echo "Pays: " . $row["pays"] . "<br>";
	   $pays=$row["pays"];
	   //echo "tel: " . $row["tel"] . "<br>";
	   $tel=$row["tel"];
	   //echo "typeCarte: " . $row["type_carte"] . "<br>";
	   $typeCarte=$row["type_carte"];
	   //echo "Num carte: " . $row["numero_carte"] . "<br>";
	   $numCarte=$row["numero_carte"];
	   //echo "Nom carte: " . $row["nom_carte"] . "<br>";
	   $nomCarte=$row["nom_carte"];
	   //echo "Date exp: " . $row["date_exp"] . "<br>";
	   $dateExp=$row["date_exp"];
	   //echo $row["cvv"] . $row["cvv"];
	   $cvv=$row["cvv"];
	   //echo "<br>";
	}

?>

<!DOCTYPE html> 

<head> 
	<title>ECE Amazon</title> 
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">

	<meta charset="utf-8" /> 
	<link href="livraison1.css" rel="stylesheet" type="text/css"/> 
</head> 
 
<body>

    <?php include ("navbar.php") ?>


    <h1 id="titre">Livraison</h1>

	<div id="contain">
    


	        <table>
	            <div id="moy_livr">
		            <h3>Livraison</h3>
		         
		                <legend>Choisissez comment vous souhaitez vous faire livrer</legend>
		            <br>
		                    <input type="radio" id="dom" name="typedelivery" value="dom" checked>

		            <br>
		   
		                    <input type="radio" id="relai" name="typedelivery" value="relai">
		                    <label for="relai">Livraison en point relais sous 2-3 jours ouvrés</label>
		            <br>
		          
		                    <input type="radio" id="prenium" name="typedelivery" value="prenium">
		                    <label for="prenium">Livraison express sous 24h - prenium </label>
		                    <label for="dom">Livraison à domicile sous 3-5 jours ouvrés - 4 euros </label>
		            <br>
		   
		                    <input type="radio" id="relai" name="typedelivery" value="relai">
		                    <label for="relai">Livraison en point relais sous 2-3 jours ouvrés - 2 euros </label>
		            <br>
		          
		                    <input type="radio" id="prenium" name="typedelivery" value="prenium">
		                    <label for="prenium">Livraison express sous 24h - prenium - 7 euros</label>

		            <tr>
	   			</div>
	       

	            <h3>Informations de livraison</h3>
	            <tr>
	               <td>Nom</td>
	               <td><input type="text" name="nom" value="<?php echo $nom;?>"></td>
	           </tr>
	            <tr>
	               <td>Prénom</td>
	               <td><input type="text" name="prenom" value="<?php echo $prenom;?>"></td>
	           </tr>
	           <tr>
	               <td>Adresse</td>
	               <td><input type="text" name="Adresse" value="<?php echo $adresse;?>"></td>
	           </tr>
	           <tr>
	               <td>Code Postal</td>
	               <td><input type="text" name="CP" value="<?php echo $cp;?>"></td>
	           </tr>
	            <tr>
	               <td>Ville</td>
	               <td><input type="text" name="Ville" value="<?php echo $ville;?>"></td>
	           </tr>
	            <tr>
	             <td>Pays</td>
	               <td><input type="text" name="pays" value="<?php echo $pays;?>"></td>
	           </tr>
	            <tr>
	            <td>Tel</td>
	               <td><input type="text" name="tel" value="<?php echo $tel;?>"></td>
	           </tr>
	           <tr>
	               <td colspan="2">
	
	                <input type="submit" value="Confirmer mes données de livraison">

	               </td>
	           </tr>
	            
	        </table>
        </form>       

    </div>
          
<div id="recap_commande">
  
</div>

	<?php include("footer.php"); ?>
	
</body> 
</html>
