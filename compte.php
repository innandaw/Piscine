<?php
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	$nom=isset($_POST["lastName"])?$_POST["lastName"]:"";
	$prenom=isset($_POST["firstName"])?$_POST["firstName"]:"";
	$dateNais=isset($_POST["date"])?$_POST["date"]:"";
	$mail=isset($_POST["email"])?$_POST["email"]:"";
	$mdp=isset($_POST["password"])?$_POST["password"]:"";
	$adresse=isset($_POST["address"])?$_POST["address"]:"";
	$ville=isset($_POST["city"])?$_POST["city"]:"";
	$CP=isset($_POST["postalCode"])?$_POST["postalCode"]:"";
	$pays=isset($_POST["country"])?$_POST["country"]:"";
	$tel=isset($_POST["phone"])?$_POST["phone"]:"";
	$typeCarte=isset($_POST["cardType"])?$_POST["cardType"]:"";
	$numCarte=isset($_POST["nbCard"])?$_POST["nbCard"]:"";
	$nomCarte=isset($_POST["nameCard"])?$_POST["nameCard"]:"";
	$dateExp=isset($_POST["expDate"])?$_POST["expDate"]:"";
	$cvv=isset($_POST["vvc"])?$_POST["vvc"]:"";
	
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);
	if($dbh) {echo "Connection to the Server opened";}
	
	$sql = "INSERT INTO personnes VALUES('$nom','$prenom','$dateNais','$mail','$mdp','$adresse','$ville','$CP', '$pays','$tel','$typeCarte','$numCarte','$nomCarte','$dateExp','$cvv',true);";
	//$sql = "INSERT INTO personnes (nom,prenom,mail,mdp,adresse,ville,CP,pays,tel,type_carte,numero_carte,nom_carte,cvv) VALUES('$nom', '$prenom', '$mail','$mdp','$adresse','$ville','$CP', '$pays','$tel','$typeCarte','$numCarte','$nomCarte','$cvv');";

	$result = mysqli_query($dbh,$sql);

	if (!$result) 
	{
		
	    exit;
	}
	else
	{
		include 'connexionReussie.html';
		
		echo "Creation reussie";
	}
	
	mysqli_free_result($result);


	$dbh = null;
?>