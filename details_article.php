<?php

	session_start();

	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	$couleur1=isset($_POST["couleur"])?$_POST["couleur"]:"";
	$taille1=isset($_POST["taille"])?$_POST["taille"]:"";
	$prix1=isset($_POST["prix"])?$_POST["prix"]:"";
	$stock1=isset($_POST["stock"])?$_POST["stock"]:"";
	
	$couleur2=isset($_POST["couleur2"])?$_POST["couleur2"]:"";
	$taille2=isset($_POST["taille2"])?$_POST["taille2"]:"";
	$prix2=isset($_POST["prix2"])?$_POST["prix2"]:"";
	$stock2=isset($_POST["stock2"])?$_POST["stock2"]:"";

	$couleur3=isset($_POST["couleur3"])?$_POST["couleur3"]:"";
	$taille3=isset($_POST["taille3"])?$_POST["taille3"]:"";
	$prix3=isset($_POST["prix3"])?$_POST["prix3"]:"";
	$stock3=isset($_POST["stock3"])?$_POST["stock3"]:"";

	$couleur4=isset($_POST["couleur4"])?$_POST["couleur4"]:"";
	$taille4=isset($_POST["taille4"])?$_POST["taille4"]:"";
	$prix4=isset($_POST["prix4"])?$_POST["prix4"]:"";
	$stock4=isset($_POST["stock4"])?$_POST["stock4"]:"";

	$dbh=mysqli_connect($server, $user_name, $password, $database);

	$nom = $_SESSION["nom"];
/*
	$nom = $_SESSION["j"];
	echo $j;*/



	$sql = "UPDATE articles SET prix='$prix1', taille='$taille1', couleur='$couleur1', stock='$stock1' WHERE nom LIKE '$nom' AND nb_tailles=1 ;";
	$result = mysqli_query($dbh,$sql);

	$sql = "UPDATE articles SET prix='$prix2', taille='$taille2', couleur='$couleur2', stock='$stock2' WHERE nom LIKE '$nom' AND nb_tailles=2;";
	$result = mysqli_query($dbh,$sql);

	$sql = "UPDATE articles SET prix='$prix3', taille='$taille3', couleur='$couleur3', stock='$stock3' WHERE nom LIKE '$nom' AND nb_tailles=3;";
	$result = mysqli_query($dbh,$sql);

	$sql = "UPDATE articles SET prix='$prix4', taille='$taille4', couleur='$couleur4', stock='$stock4' WHERE nom LIKE '$nom' AND nb_tailles=4;";
	$result = mysqli_query($dbh,$sql);
	

	include 'mainPage.php';

		

	$dbh = null;
?>