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
//	$_SESSION["nb_tailles"] = $nb_tailles;
//	$_SESSION["nom"] = $nom;
//	$_SESSION["j"] = $j;



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
    
    <h1 id="titre_livr">2. Livraison</h1><br><br><br><br><br><br><br>


   <div id="form_livr">
        <form action="livraison_form.php" method="post">
    
            
        <table>
            <div id="moy_livr">
           <h3>Livraison</h3>
         
                <legend>Choisissez comment vous souhaitez vous faire livrer</legend>
            <br>
                    <input type="radio" id="dom" name="typedelivery" value="dom" checked>
                    <label for="dom">Livraison à domicile sous 3-5 jours ouvrés</label>
            <br>
   
                    <input type="radio" id="relai" name="typedelivery" value="relai">
                    <label for="relai">Livraison en point relais sous 2-3 jours ouvrés</label>
            <br>
          
                    <input type="radio" id="prenium" name="typedelivery" value="prenium">
                    <label for="prenium">Livraison express sous 24h - prenium </label>
            <tr>
   
            
         
            
            
<!--
            
            $_SESSION["nb_tailles"] = $nb_tailles;
	$_SESSION["nom"] = $nom;
	$_SESSION["j"] = $j;


	$sexe = NULL;
	
	if ($_POST['sexe'] == 'Femme')
	{
		$sexe = "F";
		//echo "$sexe";
	}
	else 
	{
		$sexe = "H";
		//echo "$sexe";
	}
-->
   </div>
       

            <h3>Informations de livraison</h3>
            <tr>
               <td>Nom</td>
               <td><input type="text" name="nom" value="<?php echo $nom;?>"></td>
           </tr>
            <tr>
               <td>Prénom</td>
               <td><input type="text" name="prenom" value="<?php echo $prenom;?>"></td>
           </tr>
           <tr>
               <td>Adresse</td>
               <td><input type="text" name="Adresse" value="<?php echo $adresse;?>"></td>
           </tr>
           <tr>
               <td>Code Postal</td>
               <td><input type="text" name="CP" value="<?php echo $CP;?>"></td>
           </tr>
            <tr>
               <td>Ville</td>
               <td><input type="text" name="Ville" value="<?php echo $ville;?>"></td>
           </tr>
            <tr>
             <td>Pays</td>
               <td><input type="text" name="pays" value="<?php echo $pays;?>"></td>
           </tr>
            <tr>
            <td>Tel</td>
               <td><input type="text" name="tel" value="<?php echo $tel;?>"></td>
           </tr>
           <tr>
               <td colspan="2">
                      <br><br>
                <input type="submit" value="confirmer mes données de livraison">
               </td>
           </tr>
            
             </table>
       </form>


       
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
