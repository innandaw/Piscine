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
	
	mysqli_free_result($result);


	$dbh = null;
?>

<!DOCTYPE html> 
<head> 
	<title>ECE Amazon</title> 
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">

	<meta charset="utf-8" /> 
	<link href="modifierAch1.css" rel="stylesheet" type="text/css"/> 

	
</head> 
 
<body>
	<?php include ("navbar.php") ?>

	<div id="contain">

	<h1 id="titre">Modifier vos informations</h1>

	<form action="modifCompteAch.php" method="post">
	        <table id="column1">
	        	<h3>Informations générales</h3>
	        	<tr>
	                <td>Prénom: </td>
	                <td><input type="text" name="firstName" value="<?php echo $prenom;?>"></td>
	            </tr>
	            <tr>
	                <td>Nom: </td>
	                <td><input type="text" name="lastName" value="<?php echo $nom;?>"></td>
	            </tr>
	            <tr>
	                <td>Date de Naissance: </td>
	                <td><input type="text" name="date" value="<?php echo $dateNais;?>"></td>
	            </tr>
	        </table>
	        <br><br>

	        <table id="column2">    
	            <h3>Domicile</h3>
	            <tr>
	                <td>Adresse: </td>
	                <td><input type="text" name="address" value="<?php echo $adresse;?>"></td>
	            </tr>
	            <tr>
	                <td>Ville: </td>
	                <td><input type="text" name="city" value="<?php echo $ville;?>"></td>
	            </tr>
	            <tr>
	                <td>Code Postal: </td>
	                <td><input type="text" name="postalCode" value="<?php echo $cp;?>"></td>
	            </tr>
	            <tr>
	                <td>Pays: </td>
	                <td><input type="text" name="country" value="<?php echo $pays;?>"></td>
	            </tr>
	            <tr>
	                <td>Numéro de téléphone: </td>
	                <td><input type="text" name="phone" value="<?php echo $tel;?>"></td>
	            </tr>
	        </table>
	        <br><br>

	        <table id="column3">
	        	<h3>Information de paiement</h3>
	        	<tr>
	                <td>Type de carte de paiement: </td>
	                <td><input type="text" name="cardType" value="<?php echo $typeCarte;?>"></td>
	            </tr>
	            <tr>
	                <td>Numéro de la carte: </td>
	                <td><input type="text" name="nbCard" value="<?php echo $numCarte;?>"></td>
	            </tr>
	            <tr>
	                <td>Nom du titulaire: </td>
	                <td><input type="text" name="nameCard" value="<?php echo $nomCarte;?>"></td>
	            </tr>
	            <tr>
	                <td>Date d'expiration: </td>
	                <td><input type="text" name="expDate" value="<?php echo $dateExp;?>"></td>
	            </tr>
	            <tr>
	                <td>Code de sécurité: </td>
	                <td><input type="text" name="vvc" value="<?php echo $cvv;?>"></td>
	            </tr>
	            <tr>
	                <td colspan="2"><input type="submit" value="Enregistrer"></td>
	            </tr>
	        </table>
	    </form>
	</div>

	<?php include ("footer.php") ?>
	
</body> 
</html>