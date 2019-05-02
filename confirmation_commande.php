<?php

//	$user_name = "root";
//	$password = "";
//	$database = "eceamazon";
//	$server = "localhost";

$nom="Ndaw";
$prenom="Inna";
$dateNais="26_09_1996";
$adresse="47 rue Navier";
$mail="inna.ndaw@wanadoo.fr";
$ville="Paris";
$CP="75017";
$pays="France";
$tel="0601460553";
$typeCarte="Visa";
$numCarte="0000000000000000000000";
$nomCarte="Ndaw Inna";
$dateExp="26-09-1996";
$cvv="000";


//$nom = $_SESSION["nom"];
            




//	$nom=isset($_POST["lastName"])?$_POST["lastName"]:"";
//	$prenom=isset($_POST["firstName"])?$_POST["firstName"]:"";
//	$dateNais=isset($_POST["date"])?$_POST["date"]:"";
//	$adresse=isset($_POST["address"])?$_POST["address"]:"";
//	$ville=isset($_POST["city"])?$_POST["city"]:"";
//	$CP=isset($_POST["postalCode"])?$_POST["postalCode"]:"";
//	$pays=isset($_POST["country"])?$_POST["country"]:"";
//	$tel=isset($_POST["phone"])?$_POST["phone"]:"";
//	$typeCarte=isset($_POST["cardType"])?$_POST["cardType"]:"";
//	$numCarte=isset($_POST["nbCard"])?$_POST["nbCard"]:"";
//	$nomCarte=isset($_POST["nameCard"])?$_POST["nameCard"]:"";
//    $dateExp=isset($_POST["expDate"])?$_POST["expDate"]:"";
//	$cvv=isset($_POST["vvc"])?$_POST["vvc"]:"";

	
	

	//$dbh=mysqli_connect($server, $user_name, $password,$database);
	
//	$sql = "UPDATE personnes SET prenom='$prenom' , nom='$nom' , date_naissance='$dateNais' , adresse='$adresse' , CP='$CP' , ville='$ville' , pays='$pays' , tel='$tel' , type_carte='$typeCarte' , numero_carte='$numCarte' , nom_carte='$nomCarte' , date_exp='$dateExp' , cvv='$cvv' WHERE connexion=1;";
//	
//	mysqli_query($dbh,$sql);
//	s
//	
//	$dbh = null;

?>

<!DOCTYPE html> 

<head> 
	<title>ECE Amazon</title> 
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">

	<meta charset="utf-8" /> 
	<link href="confirmation_commande.css" rel="stylesheet" type="text/css"/> 
</head> 
 
<body>
	<div id="header">
		<div id="logo">
			<a href="mainPage.php"><img src="Images/Menu/logo.png" id="Logo" width="140" height="60"/></a>  
		</div>
		
		<div id="logopanier">
			<img src="Images/Menu/panier.png" width="50" height="40"/>   
		</div>
		
		<div id="logoCompte">
			<a href="creerclient.php"><img src="Images/Menu/compteConn.png" width="50" height="40"/></a>   
		</div>
		
	</div>
    
<div id="recap_commande">
 
</div>
 
<div id="mess_confirmation">
    
  
     <h1 id="felicitations">Félicitations</h1>    

<p> Tu recevras ta commande d'ici</p>

<?php 
    session_start();

    $choix_livr= $_SESSION["choix_livr"];

    

    
    
         
 if ($choix_livr=="dom")
        echo'<center><div id="dom">3-5 jours ouvrés a ton domicile : '.$adresse.' '.$CP.' '.$ville.'</div></p><center>';
if ($choix_livr=="relais")
         echo'<p><div id="relais">2-3 jours ouvrés dans votre point relais</div><p>'; 
 if ($choix_livr=="prenium")
         echo'<p><div id="prenium">Sous 24h chez vous au</p> '.$adresse.'</div><p>';  
    
 echo '<p><div id="mail">Un mail vient de t’être envoyé à l’adresse: '.$mail.'</div></p>';  

?>
    
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p>Si les informations ci-dessus sont erronées, n’hésite pas à nous contacter <a href="mailto:inna.ndaw@wanadoo.fr?subject=Question sur ma commande&body=[Veuillez renseigner votre numéro de panier ici]"><br>S.A.V ECE Amazon</a></p>

</div>

    
<div id="footer">
		<div id="col1">
			<p>Pour mieux nous connaitre</p>
		 	<a href="apropos.html">A propos d'ECE Amazon</a><br/>
		 	<a href="ECE.html">ECE Amazon et notre planète</a><br/>
		 	<a href="Equipe.html">Notre équipe</a>
		</div>

		<div id="col2">
		 	<p>Catégories</p>
		 	<a href="catvetements.php">Vêtements</a><br/>
		 	<a href="catsport.php">Sport et loisirs</a><br/>
		 	<a href="catlivres.php">Livres</a><br/>
		 	<a href="catmusique.php">Musique</a>
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
