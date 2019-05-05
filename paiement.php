<?php
	$user_name = "root";
	$password = "";
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
	
	
	$dbh = null;
?>

<!DOCTYPE html> 

<head> 
	<title>ECE Amazon</title> 
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">

	<meta charset="utf-8" /> 
	<link href="paiement1.css" rel="stylesheet" type="text/css"/> 
</head> 
 
<body>
    
    <?php include ("navbar.php") ?>

	<div id="contain">
	    <div id="titre">2. Paiement</div>
	    <div id="form_paiement">
	        <FORM>
		        <table>
		           <h2>Moyens de Paiement</h2>
		            <tr>  
		                <legend>Choisissez votre type de carte</legend>
		                <td>
		                    <input type="radio" id="Visa" name="typecard" value="visa" checked>
		                    <label for="visa"><img src="Images/CompteAcheteur/carte1.png" height="45px" width="60px"></label>
		                </td>
		                <td>
		                    <input type="radio" id="CB" name="typecard" value="CB">
		                    <label for="CB"><img src="Images/CompteAcheteur/carte2.png" height="45px" width="60px"></label>
		                </td>
		                <td>
		                    <input type="radio" id="MC" name="typecard" value="MC">
		                    <label for="MC"><img src="Images/CompteAcheteur/carte3.png" height="45px" width="60px"></label>
		                </td>
		            </tr>

		            <tr>
			            <td>Numéro de la carte </td>
			            <td><input type="text" name="nbCard" value="<?php echo $numCarte;?>"></td>
		            </tr>
		            <tr>
		               <td>Nom du titulaire </td>
		               <td><input type="text" name="nameCard" value="<?php echo $nomCarte;?>"></td>
		           	</tr>
		           	<tr>
		               <td>Date d'expiration </td>
		               <td><input type="text" name="expDate" value="<?php echo $dateExp;?>"></td>
		           	</tr>
		           	<tr>
		               <td>Code de sécurité: </td>
		               <td><input type="text" name="vvc" value="<?php echo $cvv;?>"></td>
		           	</tr>
		           	<tr>
		               <td colspan="2">
		                      <br><br>
		                   <center><a href="livraison.php"> <img src="Images/payer.png"></a></center>
		               </td>
		           	</tr>
		        </table>
	        </FORM>
	    </div>
	          
		<div id="recap_commande">
	  
		</div>

	</div>
	
	<?php include ("footer.php") ?>
</body> 
</html>
