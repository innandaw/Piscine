<?php
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$sql = "SELECT connexion FROM personnes WHERE connexion=1";
	
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
	<link href="monCompteAch1.css" rel="stylesheet" type="text/css"/> 
</head> 
 
<body>
	<?php include ("navbar.php") ?>

	<div id="contain">
		<div id="titre">Mon Compte</div>
		<div id="photo">
			<img src="Images/Menu/compteConn.png" width="130" height="110"/>
		</div>
		
		<div id="infosBase">
			<h2>Bonjour  <?php echo $prenom . " " . $nom;?></h2>
			<h2>Votre mail  <?php echo $mail;?></h2>
			<h2>Votre adresse de livraison  <?php echo $adresse . " " . $ville . " " . $pays;?></h2>
		</div>
		
		<div id="pay1">
			<h2>Vos informations de paiement</h2>
			<img src="Images/CompteAcheteur/carte1.png" width="60" height="35" id="c1"/>
			<img src="Images/CompteAcheteur/carte2.png" width="60" height="35" id="c2"/>
			<img src="Images/CompteAcheteur/carte3.png" width="60" height="35" id="c3"/>
		</div>
		
		<div id="pay2">
			<h2>Type de carte  <?php echo $typeCarte;?></h2>
			<h2>Numéro de carte  <?php echo $numCarte;?></h2>
			<h2>Nom du propriétaire de la carte  <?php echo $nomCarte;?></h2>
			<h2>Date d'expiration  <?php echo $dateExp;?></h2>
		</div>
		
		<a href ="connecte.php"><div id="decon"><input type="button" value="Déconnexion" id="deconnecte"></div></a>
		
		<a href="modifierAch.php"><div id="modif">
			<h2 id="contenu">Modifier mes informations</h2>
			<img src="Images/CompteAcheteur/modif.png" width="45" height="45" id="cray"/>
		</div></a>

	</div>

	
	<?php include ("footer.php") ?>
	
</body> 
</html>