<?php
	$user_name = "root";
	$password = "root";
	$database = "eceamazon";
	$server = "localhost";
	
	$nom=isset($_POST["lastName"])?$_POST["lastName"]:"";
	$prenom=isset($_POST["firstName"])?$_POST["firstName"]:"";
	$dateNais=isset($_POST["date"])?$_POST["date"]:"";
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
	
	$sql = "UPDATE personnes SET prenom='$prenom' , nom='$nom' , date_naissance='$dateNais' , adresse='$adresse' , CP='$CP' , ville='$ville' , pays='$pays' , tel='$tel' , type_carte='$typeCarte' , numero_carte='$numCarte' , nom_carte='$nomCarte' , date_exp='$dateExp' , cvv='$cvv' WHERE connexion=1;";
	
	mysqli_query($dbh,$sql);
	
	
	$sql = "SELECT statut FROM personnes WHERE connexion=1;";

	$result=mysqli_query($dbh,$sql);
	
	$row = mysqli_fetch_assoc($result);
	
	if($row["statut"]=='V')
	{
		include 'monCompteVen.php';
	}
	elseif($row["statut"]=='Ac')
	{
		include 'monCompteAch.php';
	}
	else
	{
		include 'monCompteAdmin.php';
	}
	
	
	
	$dbh = null;
?>
