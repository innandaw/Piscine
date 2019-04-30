<?php
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	$nom=isset($_POST["nom"])?$_POST["nom"]:"";
	$description=isset($_POST["description"])?$_POST["description"]:"";
	$cat=isset($_POST["categorie"])?$_POST["categorie"]:"";
	$sous_cat=isset($_POST["sous_cat"])?$_POST["sous_cat"]:"";
	$sexe=isset($_POST[""])?$_POST[""]:"";
	$nb_tailles=isset($_POST["taille"])?$_POST["taille"]:"";
	
	
	$dbh=mysqli_connect($server, $user_name, $password, $database);
	if($dbh) {echo "Connection to the Server opened";}

	
	$sql = "INSERT INTO articles VALUES(NULL, '$nom', NULL, '$description', NULL, '$cat', NULL, NULL, '$sous_cat', NULL, NULL, NULL);";
	//$sql = "INSERT INTO articles ('nom', 'description', 'categorie', 'sous_cat') VALUES('$nom', '$description', '$cat', '$sous_cat');";

	$result = mysqli_query($dbh,$sql);

	if (!$result) 
	{
	   echo "Impossible d'ajouter l'article";
	   exit;
	}
	else
	{
		echo "Article ajouté";
	}
		

	$dbh = null;
?>