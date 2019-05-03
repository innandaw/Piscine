<?php
//	$user_name = "root";
//	$password = "root";
//	$database = "eceamazon";
//	$server = "localhost";

$nom="Ndaw";
$prenom="Inna";
$dateNais="26_09_1996";
$adresse="47 rue Navier";
$ville="Paris";
$CP="75017";
$pays="France";
$tel="0601460553";
$typeCarte="Visa";
$numCarte="0000000000000000000000";
$nomCarte="Ndaw Inna";
$dateExp="26-09-1996";
$cvv="000";

//
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
//	$dateExp=isset($_POST["expDate"])?$_POST["expDate"]:"";
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
	<link href="livraison.css" rel="stylesheet" type="text/css"/> 
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
    
    <h1 id="titre_paiement">2. Paiement</h1><br><br><br><br><br><br><br>


   <div id="form_paiement">
        <FORM>
    
        <table>
           <h3>Moyens de Paiement</h3>
            <tr>  
                <legend>Choisissez votre type de carte</legend>
                <td>
                    <input type="radio" id="Visa" name="typecard" value="visa" checked>
                    <label for="visa"><img src="Images/CompteAcheteur/carte1.png"></label>
                </td>
                <td>
                    <input type="radio" id="CB" name="typecard" value="CB">
                    <label for="CB"><img src="Images/CompteAcheteur/carte2.png"></label>
                </td>
                <td>
                    <input type="radio" id="MC" name="typecard" value="MC">
                    <label for="MC"><img src="Images/CompteAcheteur/carte3.png"></label>
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




        <br><br>
    
    
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
