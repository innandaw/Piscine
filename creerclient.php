
<?php 
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
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
		$stat='V';
	}
	elseif($row["statut"]=='Ac')
	{
		$stat='Ac';
	}
	else
	{
		$stat='Ad';
	}
	
	mysqli_free_result($result);
	
	$dbh=null;
	
	if(!isset($prenom))
	{
		$prenom="";
	}
	
	if(!isset($nom))
	{
		$nom="";
	}
	
	if(!isset($dateNais))
	{
		$dateNais="";
	}
	
	if(!isset($mail))
	{
		$mail="";
	}
	
	if(!isset($mdp))
	{
		$mdp="";
	}
	
	if(!isset($statutAc))
	{
		$statutAc="";
	}
	
	if(!isset($statutV))
	{
		$statutV="";
	}
	
	if(!isset($adresse))
	{
		$adresse="";
	}
	
	if(!isset($ville))
	{
		$ville="";
	}
	
	if(!isset($CP))
	{
		$CP="";
	}
	
	if(!isset($pays))
	{
		$pays="";
	}
	
	if(!isset($tel))
	{
		$tel="";
	}
	
	if(!isset($typeCarte))
	{
		$typeCarte="";
	}
	
	if(!isset($nomCarte))
	{
		$nomCarte="";
	}
	
	if(!isset($numCarte))
	{
		$numCarte="";
	}
	
	if(!isset($dateExp))
	{
		$dateExp="";
	}
	
	if(!isset($cvv))
	{
		$cvv="";
	}
?>

<!DOCTYPE html> 
<head> 
	<title>ECE Amazon</title> 
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">

	<meta charset="utf-8" /> 
	<link href="creerclient.css" rel="stylesheet" type="text/css"/> 
</head> 
 
<body>

	<?php include ("navbar.php") ?>

	<div id="compte">
		<h1>Compte du client</h1>
		<p id="cpt">
			Vous avez déjà un compte?<br/>
		    <a href="connecte.php">Connectez-vous !</a>
		</p>

		<h2>Créer votre compte</h2>
		<p id="message">Les champs marqués d'une étoile (*) sont obligatoires</p>
		<form action="compte.php" method="post">
	        <table id="column1">
			
				<tr>
			      <td><input type="radio" value="Acheteur" name="statut" checked="<?php echo $statutAc?>"/>Acheteur</td>
			      <td><input type="radio" value="Vendeur" name="statut" checked="<?php echo $statutV?>"/>Vendeur</td>
			    </tr>
				
	        	<h3>Informations générales (*)</h3>
				
	        	<tr>
	                <td>Prénom: </td>
	                <td><input type="text" name="firstName" value="<?php echo $prenom?>" $></td>
	            </tr>
	            <tr>
	                <td>Nom: </td>
	                <td><input type="text" name="lastName" value="<?php echo $nom?>"></td>
	            </tr>
	            <tr>
	                <td>Date de Naissance: </td>
	                <td><input type="text" name="date" value="<?php echo $dateNais?>"></td>
	            </tr>
	            <tr>
	                <td>Email: </td>
	                <td><input type="text" name="email" value="<?php echo $mail?>"></td>
	            </tr>
	            <tr>
	                <td>Mot de Passe: </td>
	                <td><input type="password" name="password" value="<?php echo $mdp?>"></td>
	            </tr>
	        </table>
	        <br><br>

	        <table id="column2">    
	            <h3>Domicile</h3>
	            <tr>
	                <td>Adresse: </td>
	                <td><input type="text" name="address" value="<?php echo $adresse?>"></td>
	            </tr>
	            <tr>
	                <td>Ville: </td>
	                <td><input type="text" name="city" value="<?php echo $ville?>"></td>
	            </tr>
	            <tr>
	                <td>Code Postal: </td>
	                <td><input type="text" name="postalCode" value="<?php echo $CP?>"></td>
	            </tr>
	            <tr>
	                <td>Pays: </td>
	                <td><input type="text" name="country" value="<?php echo $pays?>"></td>
	            </tr>
	            <tr>
	                <td>Numéro de téléphone: </td>
	                <td><input type="text" name="phone" value="<?php echo $tel?>"></td>
	            </tr>
	        </table>
	        <br><br>

	        <table id="column3">
	        	<h3>Information de paiement</h3>
	        	<tr>
	                <td>Type de carte de paiement: </td>
	                <td><input type="text" name="cardType" value="<?php echo $typeCarte?>"></td>
	            </tr>
	            <tr>
	                <td>Numéro de la carte: </td>
	                <td><input type="text" name="nbCard" value="<?php echo $numCarte?>"></td>
	            </tr>
	            <tr>
	                <td>Nom du titulaire: </td>
	                <td><input type="text" name="nameCard" value="<?php echo $nomCarte?>"></td>
	            </tr>
	            <tr>
	                <td>Date d'expiration: </td>
	                <td><input type="text" name="expDate" value="<?php echo $dateExp?>"></td>
	            </tr>
	            <tr>
	                <td>Code de sécurité: </td>
	                <td><input type="text" name="vvc" value="<?php echo $cvv?>"></td>
	            </tr>
	            <tr>
	                <td colspan="2"><input type="submit" value="S'incrire"></td>
	            </tr>
	        </table>
	    </form>
	</div>

	<?php include ("footer.php") ?>	
</body> 

</html>