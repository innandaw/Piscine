
<?php
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);

	$sql = "UPDATE personnes SET connexion=0;";
	
	$result = mysqli_query($dbh,$sql);

	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$sql = "SELECT connexion,statut FROM personnes WHERE connexion=1";
	
	$result = mysqli_query($dbh,$sql);
	
	$row = mysqli_fetch_assoc($result);
	
	if($row["connexion"]==0)
	{
		$conn=0;
	}
	else
	{
		$conn=1;
	}
	
	
	if($row["statut"]=='V')
	{
		$statut='V';
	}
	elseif($row["statut"]=='Ac')
	{
		$statut='Ac';
	}
	else
	{
		$statut='Ad';
	}
	
	$dbh = null;
?>

<!DOCTYPE html> 
<head> 
	<title>ECE Amazon</title> 
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">

	<meta charset="utf-8" /> 
	<link href="compte.css" rel="stylesheet" type="text/css"/> 
</head> 
 
<body>

	<?php include ("navbar.php") ?>

	<div id="compte">
		<h1>Compte du client</h1>
		<p>
			Vous n'avez pas encore de compte?<br/>
		    <a href="creerclient.php">Créer votre compte</a>
		</p>

		<h2>Connectez-vous</h2>
		<form action="database.php" method="post">
	        <table id="cc">
	            <tr>
	                <td>Email: </td>
	                <td><input type="text" name="email"></td>
	            </tr>
	            <tr>
	                <td>Mot de Passe: </td>
	                <td><input type="password" name="mdp"></td>
	            </tr>
	            <tr>
	                <td colspan="2"><input type="submit" value="Se connecter"></td>
	            </tr>
	        </table>
	    </form>
	</div>
	
	<?php include ("footer.php") ?>
	
</body> 

</html>