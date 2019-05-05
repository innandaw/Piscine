<?php
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	$id_article=$_GET['ident'];			

	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
<<<<<<< HEAD

	$sql = "SELECT COUNT(*),mail,statut FROM personnes WHERE Connexion=1";

=======
	$sql = "SELECT COUNT(*),mail,statut FROM personnes WHERE Connexion=1";
>>>>>>> footer
	
	$result = mysqli_query($dbh,$sql); 
	
	$row = mysqli_fetch_assoc($result);
	
<<<<<<< HEAD

	if($row["COUNT(*)"]==0 && $row["statut"]=='Ac')

=======
	if($row["COUNT(*)"]==0 && $row["statut"]=='Ac')
>>>>>>> footer
	{
		$sql = "INSERT INTO panier VALUES  (NULL,'nc',$id_article)";
	
		$result = mysqli_query($dbh,$sql); 
	}
<<<<<<< HEAD

	elseif($row["COUNT(*)"]!=0 && $row["statut"]=='Ac')

=======
	elseif($row["COUNT(*)"]!=0 && $row["statut"]=='Ac')
>>>>>>> footer
	{
		$id_acheteur=$row["mail"];
		
		$sql = "INSERT INTO panier VALUES  (NULL,'$id_acheteur',$id_article)";
	
		$result = mysqli_query($dbh,$sql); 
	}
<<<<<<< HEAD

=======
>>>>>>> footer
	else
	{
		echo "Vous n'avez pas le statut d'acheteur donc pas possible";
	}
<<<<<<< HEAD

=======
>>>>>>> footer
	
	$sql = "SELECT sous_cat,sexe FROM articles WHERE id=$id_article";
	
	$result = mysqli_query($dbh,$sql); 
	
	$row = mysqli_fetch_assoc($result);
	
	if($row["sous_cat"]=="hauts")
	{
		if($row["sexe"]=='F')
		{
			include 'hautsFemmes.php';
		}
		else
		{
			include 'hautsHommes.php';
		}
	}
	elseif($row["sous_cat"]=="bas")
	{
		if($row["sexe"]=='F')
		{
<<<<<<< HEAD

			include 'basFemmes.php';			

=======
			include 'basFemmes.php';			
>>>>>>> footer
		}
		else
		{
			include 'basHommes.php';
		}
	}
<<<<<<< HEAD

=======
>>>>>>> footer
	elseif($row["sous_cat"]=="Chaussures")
	{
		if($row["sexe"]=='F')
		{
			echo 1;
<<<<<<< HEAD

=======
>>>>>>> footer
			include 'chaussuresFemmes.php';
		}
		else
		{
			include 'chaussuresHommes.php';
		}
	}
	elseif($row["sous_cat"]=="vet_sportifs")
	{
		include 'sport_vet.php';
	}
	elseif($row["sous_cat"]=="elec")
	{
		include 'elec_vet.php';
	}
	elseif($row["sous_cat"]=="access")
	{
		include 'sport_access.php';
	}
	elseif($row["sous_cat"]=="livres_enfant")
	{
		include 'livres_enfant.php';
	}
	elseif($row["sous_cat"]=="livres_bd")
		{
		include 'livres_bd.php';
	}
	elseif($row["sous_cat"]=="livres_roman")
	{
		include 'livres_roman.php';
	}
	elseif($row["sous_cat"]=="musique_class")
	{
		include 'musique_class.php';
	}
	elseif($row["sous_cat"]=="musique_com")
	{
		include 'musique_com.php';
	}
	elseif($row["sous_cat"]=="musique_rock")
	{
		include 'musique_rock.php';
	}
	
	
?>