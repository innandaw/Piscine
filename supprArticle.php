<?php
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	$id_article=$_GET['idArticle'];			
	$chemin=$_GET['chemin'];			

	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$sql = "SELECT sous_cat,sexe,nom FROM articles WHERE id=$id_article";
	
	$result = mysqli_query($dbh,$sql); 
	
	$row = mysqli_fetch_assoc($result);
	
	$sous_cat=$row["sous_cat"];
	
	$sexe=$row["sexe"];
	
	$nom=$row["nom"];
	
	$sql = "DELETE FROM articles WHERE nom = '$nom'";
	
	$result = mysqli_query($dbh,$sql); 	
	
	
	if($chemin==1)
	{
		include 'gererArticle.php';
	}
	
	if($sous_cat=="hauts")
	{
		if($sexe=='F')
		{
			include 'hautsFemmes.php';
		}
		else
		{
			include 'hautsHommes.php';
		}
	}
	elseif($sous_cat=="bas")
	{
		if($sexe=='F')
		{
			include 'basFemmes.php';
		}
		else
		{
			include 'basHommes.php';
		}
	}
	elseif($sous_cat=="chaussures")
	{
		if($sexe=='F')
		{
			include 'chaussuresFemmes.php';
		}
		else
		{
			include 'chaussuresHommes.php';
		}
	}
	elseif($sous_cat=="vet_sportifs")
	{
		include 'sport_vet.php';
	}
	elseif($sous_cat=="elec")
	{
		include 'sport_elec.php';
	}
	elseif($sous_cat=="access")
	{
		include 'sport_access.php';
	}
	elseif($sous_cat=="livres_enfant")
	{
		include 'livres_enfant.php';
	}
	elseif($sous_cat=="livres_bd")
		{
		include 'livres_bd.php';
	}
	elseif($sous_cat=="livres_roman")
	{
		include 'livres_roman.php';
	}
	elseif($sous_cat=="musique_class")
	{
		include 'musique_class.php';
	}
	elseif($sous_cat=="musique_com")
	{
		include 'musique_com.php';
	}
	elseif($sous_cat=="musique_rock")
	{
		include 'musique_rock.php';
	}
	
	
<?php
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	$id_article=$_GET['idArticle'];			
	$chemin=$_GET['chemin'];			

	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$sql = "SELECT sous_cat,sexe,nom FROM articles WHERE id=$id_article";
	
	$result = mysqli_query($dbh,$sql); 
	
	$row = mysqli_fetch_assoc($result);
	
	$sous_cat=$row["sous_cat"];
	
	$sexe=$row["sexe"];
	
	$nom=$row["nom"];
	
	$sql = "DELETE FROM articles WHERE nom = '$nom'";
	
	$result = mysqli_query($dbh,$sql); 	
	
	
	if($chemin==1)
	{
		include 'gererArticle.php';
	}
	
	if($sous_cat=="hauts")
	{
		if($sexe=='F')
		{
			include 'hautsFemmes.php';
		}
		else
		{
			include 'hautsHommes.php';
		}
	}
	elseif($sous_cat=="bas")
	{
		if($sexe=='F')
		{
			include 'basFemmes.php';
		}
		else
		{
			include 'basHommes.php';
		}
	}
	elseif($sous_cat=="chaussures")
	{
		if($sexe=='F')
		{
			include 'chaussuresFemmes.php';
		}
		else
		{
			include 'chaussuresHommes.php';
		}
	}
	elseif($sous_cat=="vet_sportifs")
	{
		include 'sport_vet.php';
	}
	elseif($sous_cat=="elec")
	{
		include 'sport_elec.php';
	}
	elseif($sous_cat=="access")
	{
		include 'sport_access.php';
	}
	elseif($sous_cat=="livres_enfant")
	{
		include 'livres_enfant.php';
	}
	elseif($sous_cat=="livres_bd")
		{
		include 'livres_bd.php';
	}
	elseif($sous_cat=="livres_roman")
	{
		include 'livres_roman.php';
	}
	elseif($sous_cat=="musique_class")
	{
		include 'musique_class.php';
	}
	elseif($sous_cat=="musique_com")
	{
		include 'musique_com.php';
	}
	elseif($sous_cat=="musique_rock")
	{
		include 'musique_rock.php';
	}
	
	
?>