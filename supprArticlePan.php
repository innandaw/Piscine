<?php
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	$id_article=$_GET['idArticle'];			

	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$sql = "DELETE FROM panier WHERE id_article = '$id_article'";
	
	$result = mysqli_query($dbh,$sql); 	
	
	$sql = "SELECT stock FROM articles WHERE id=$id_article";
	
	$result = mysqli_query($dbh,$sql); 	
	
	$row=mysqli_fetch_assoc($result);
	
	$stock=$row["stock"];
	
	$stock=$stock-1;
	
	$sql = "UPDATE articles SET stock=$stock;";
	
	$result = mysqli_query($dbh,$sql); 	
	
	include 'panier.php';
?>