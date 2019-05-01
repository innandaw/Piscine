<?php
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	/*$nom=isset($_POST["lastName"])?$_POST["lastName"]:"";
	$prenom=isset($_POST["firstName"])?$_POST["firstName"]:"";
	$dateNais=isset($_POST["date"])?$_POST["date"]:"";
	$mail=isset($_POST["email"])?$_POST["email"]:"";
	$mdp=isset($_POST["password"])?$_POST["password"]:"";
	$adresse=isset($_POST["address"])?$_POST["address"]:"";
	$ville=isset($_POST["city"])?$_POST["city"]:"";
	$CP=isset($_POST["postalCode"])?$_POST["postalCode"]:"";
	$pays=isset($_POST["country"])?$_POST["country"]:"";
	$tel=isset($_POST["phone"])?$_POST["phone"]:"";
	$typeCarte=isset($_POST["cardType"])?$_POST["cardType"]:"";
	$numCarte=isset($_POST["nbCard"])?$_POST["nbCard"]:"";
	$nomCarte=isset($_POST["nameCard"])?$_POST["nameCard"]:"";
	$dateExp=isset($_POST["expDate"])?$_POST["expDate"]:"";
	$cvv=isset($_POST["vvc"])?$_POST["vvc"]:"";*/
	
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
	$sql = "SELECT * FROM personnes WHERE connexion=1";

	$result = mysqli_query($dbh,$sql);

	while ($row = mysqli_fetch_assoc($result)) 
	{		
	   //echo "Prenom: " . $row["prenom"] . "<br>";
	   $prenom=$row["prenom"];
	   //echo "Nom: " . $row["nom"] . "<br>";
	   $nom=$row["nom"];
	   //echo "DateNaissnce: " . $row["date_naissance"] . "<br>";
	   $dateNais=$row["date_naissance"];
	   //echo "Mail: " . $row["mail"] . "<br>";
	   $mail=$row["mail"];
	   //echo "adresse: " . $row["adresse"] . "<br>";
	   $adresse=$row["adresse"];
	   //echo "ville: " . $row["ville"] . "<br>";
	   $ville=$row["ville"];
	   //echo "CP: " . $row["CP"] . "<br>";
	   $cp=$row["CP"];
	   //echo "Pays: " . $row["pays"] . "<br>";
	   $pays=$row["pays"];
	   //echo "tel: " . $row["tel"] . "<br>";
	   $tel=$row["tel"];
	   //echo "typeCarte: " . $row["type_carte"] . "<br>";
	   $typeCarte=$row["type_carte"];
	   //echo "Num carte: " . $row["numero_carte"] . "<br>";
	   $numCarte=$row["numero_carte"];
	   //echo "Nom carte: " . $row["nom_carte"] . "<br>";
	   $nomCarte=$row["nom_carte"];
	   //echo "Date exp: " . $row["date_exp"] . "<br>";
	   $dateExp=$row["date_exp"];
	   //echo $row["cvv"] . $row["cvv"];
	   $cvv=$row["cvv"];
	   //echo "<br>";
	}
	
	mysqli_free_result($result);


	$dbh = null;
?>

<!DOCTYPE html> 
<head> 
	<title>ECE Amazon</title> 
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">

	<meta charset="utf-8" /> 
	<link href="modifierAch.css" rel="stylesheet" type="text/css"/> 
</head> 
 
<body>
	<div id="header">
		<div id="logo">
			<a href="mainPage.php"><img src="Images/Menu/logo.png" id="Logo" width="140" height="60"/></a>  
		</div>
		    
        <form id="barre">
            <input id="champ" type="text" value="Rechercher..."/>
            <input id="bouton" type="button"/>   
        </form> 
		
		<div id="logoPannier">
			<img src="Images/Menu/pannier.png" width="50" height="40"/>   
		</div>
		
		<div id="logoCompte">
			<a href="creerclient.html"><img src="Images/Menu/compteConn.png" width="50" height="40"/></a>   
		</div>
		
	</div>
	<div id="menu">
		<a href="categories.php"><img src="Images/Menu/categories.png" width="140" height="25" id="cat"/></a>
		<img src="Images/Menu/admin.png" width="140" height="25" id="admin"/>
		<img src="Images/Menu/ventesFlash.png" width="140" height="25" id="ventesFlash"/>
		<img src="Images/Menu/vendre.png" width="140" height="25" id="vendre"/>
	</div>

	<form action="modifCompteAch.php" method="post">
	        <table id="column1">
	        	<h3>Informations générales</h3>
	        	<tr>
	                <td>Prénom: </td>
	                <td><input type="text" name="firstName" value="<?php echo $prenom;?>"></td>
	            </tr>
	            <tr>
	                <td>Nom: </td>
	                <td><input type="text" name="lastName" value="<?php echo $nom;?>"></td>
	            </tr>
	            <tr>
	                <td>Date de Naissance: </td>
	                <td><input type="text" name="date" value="<?php echo $dateNais;?>"></td>
	            </tr>
	        </table>
	        <br><br>

	        <table id="column2">    
	            <h3>Domicile</h3>
	            <tr>
	                <td>Adresse: </td>
	                <td><input type="text" name="address" value="<?php echo $adresse;?>"></td>
	            </tr>
	            <tr>
	                <td>Ville: </td>
	                <td><input type="text" name="city" value="<?php echo $ville;?>"></td>
	            </tr>
	            <tr>
	                <td>Code Postal: </td>
	                <td><input type="text" name="postalCode" value="<?php echo $cp;?>"></td>
	            </tr>
	            <tr>
	                <td>Pays: </td>
	                <td><input type="text" name="country" value="<?php echo $pays;?>"></td>
	            </tr>
	            <tr>
	                <td>Numéro de téléphone: </td>
	                <td><input type="text" name="phone" value="<?php echo $tel;?>"></td>
	            </tr>
	        </table>
	        <br><br>

	        <table id="column3">
	        	<h3>Information de paiement</h3>
	        	<tr>
	                <td>Type de carte de paiement: </td>
	                <td><input type="text" name="cardType" value="<?php echo $typeCarte;?>"></td>
	            </tr>
	            <tr>
	                <td>Numéro de la carte: </td>
	                <td><input type="text" name="nbCard" value="<?php echo $numCarte;?>"></td>
	            </tr>
	            <tr>
	                <td>Nom du titulaire: </td>
	                <td><input type="text" name="nameCard" value="<?php echo $nomCarte;?>"></td>
	            </tr>
	            <tr>
	                <td>Date d'expiration: </td>
	                <td><input type="text" name="expDate" value="<?php echo $dateExp;?>"></td>
	            </tr>
	            <tr>
	                <td>Code de sécurité: </td>
	                <td><input type="text" name="vvc" value="<?php echo $cvv;?>"></td>
	            </tr>
	            <tr>
	                <td colspan="2"><input type="submit" value="Enregistrer"></td>
	            </tr>
	        </table>
	    </form>
	
	<div id="footer">
		<div id="col1">
			<p>Pour mieux nous connaitre</p>
		 	<a href="apropos.html">A propos d'ECE Amazon</a><br/>
		 	<a href="ECE.html">ECE Amazon et notre planète</a><br/>
		 	<a href="Equipe.html">Notre équipe</a>
		</div>

		<div id="col2">
		 	<p>Catégories</p>
		 	<a href="catvetements.html">Vêtements</a><br/>
		 	<a href="catsport.html">Sport et loisirs</a><br/>
		 	<a href="catlivres.html">Livres</a><br/>
		 	<a href="catmusique.html">Musique</a>
	 	</div>

	 	<div id="col3">
		 	<p>Besoins d'aide?</p>
		 	<a href="commandes.html">Voir ou suivre vos commandes</a><br/>
		 	<a href="livraison.html">Tarif et option de livraison</a><br/>
		 	<a href="prime.html">Amazon Prime</a><br/>
		 	<a href="retours.html">Retours</a>
	 	</div>

		<div id="col4">
	 		<p>FAQ</p>
	 	</div>

	 	<div id="ligne">
	 		<a href="contact.html">Contact</a>
	 		<a href="mention.html">Mentions légales</a>
	 	</div>
	</div>	
</body> 
</html>