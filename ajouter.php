<?php

	session_start();

	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	$nom=isset($_POST["nom"])?$_POST["nom"]:"";
	$description=isset($_POST["description"])?$_POST["description"]:"";
	$cat=isset($_POST["categorie"])?$_POST["categorie"]:"";
	$sous_cat=isset($_POST["sous_cat"])?$_POST["sous_cat"]:"";
	$nb_tailles=isset($_POST["taille"])?$_POST["taille"]:"";

	$fichier_nom = $_FILES['fichier_upload']['name'];

	$j=1;

	$_SESSION["nb_tailles"] = $nb_tailles;
	$_SESSION["nom"] = $nom;
	$_SESSION["j"] = $j;


	$sexe = NULL;
	
	if ($_POST['sexe'] == 'Femme')
	{
		$sexe = "F";
		//echo "$sexe";
	}
	else 
	{
		$sexe = "H";
		//echo "$sexe";
	}


	$dbh=mysqli_connect($server, $user_name, $password, $database);

	
	for ($i = 1; $i <= $nb_tailles ; $i++)
	{
		$sql = "INSERT INTO articles VALUES(NULL, '$nom', '$fichier_nom', '$description', NULL, '$cat', NULL, NULL, '$sous_cat', NULL, '$sexe', NULL, '$j');";
		$result = mysqli_query($dbh,$sql);
		$j = $j+1;
	}

	include 'details_article.html';
	
	//$sql = "INSERT INTO articles ('nom', 'description', 'categorie', 'sous_cat') VALUES('$nom', '$description', '$cat', '$sous_cat');";
	

	/*if (!$result) 
	{
	   echo "Impossible d'ajouter l'article";
	   exit;
	}
	else
	{
		echo "Article ajouté";
	}*/
		

	$dbh = null;
?>