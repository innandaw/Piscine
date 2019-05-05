<?php
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	$idVendeur=$_GET['idVendeur'];			

	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$sql = "DELETE FROM personnes WHERE mail = '$idVendeur'";
	
	$result = mysqli_query($dbh,$sql); 
	
	$sql = "DELETE FROM articles WHERE id_vendeur = '$idVendeur'";
	
	$result = mysqli_query($dbh,$sql); 	
	
	include 'gererVendeur.php';
?>