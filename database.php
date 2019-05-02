<?php
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";

	$mail=isset($_POST["email"])?$_POST["email"]:"";
	$mdp=isset($_POST["mdp"])?$_POST["mdp"]:"";
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$sql = "SELECT COUNT(*) FROM personnes WHERE mail='$mail' AND mdp='$mdp';";
	//$sql = "INSERT INTO personnes (nom,prenom,mail,mdp,adresse,ville,CP,pays,tel,type_carte,numero_carte,nom_carte,cvv) VALUES('$nom', '$prenom', '$mail','$mdp','$adresse','$ville','$CP', '$pays','$tel','$typeCarte','$numCarte','$nomCarte','$cvv');";
	
	$result = mysqli_query($dbh,$sql);

	
	$row = mysqli_fetch_array($result);
	
	if ($row["COUNT(*)"]==0) 
	{
		include 'connecte.php';
		
	    exit;
	}
	else
	{
		$sql = "UPDATE personnes SET connexion=1 WHERE mail='$mail';";
	
		$result = mysqli_query($dbh,$sql);
	
		include 'connexionReussie.php';
	}

	$dbh = null;
?>