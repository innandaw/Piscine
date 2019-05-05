<?php
    /*session_start();*/
	$user_name = "root";
	$password = "";
	$database = "eceamazon";
	$server = "localhost";
	
	
	$dbh=mysqli_connect($server, $user_name, $password,$database);
	
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



	$sql1 = "SELECT id_article FROM panier WHERE id_acheteur='$mail'";
	$result1 = mysqli_query($dbh,$sql1);


	while ($row1 = mysqli_fetch_assoc($result1)) 
    {
  
        $id=$row1["id_article"];

        $sql2 = "SELECT stock FROM articles where id=$id";
        $result2 = mysqli_query($dbh,$sql2);
        
        while ($row2 = mysqli_fetch_assoc($result2))
        {
        $stock=$row2["stock"];


        $stock=$stock-1;

        $sql3 = "UPDATE articles set stock =$stock where id=$id";
        $result3 = mysqli_query($dbh,$sql3);

        }
       
    }

    $sql4 = "DELETE FROM panier WHERE id_acheteur='$mail'";
	$result4 = mysqli_query($dbh,$sql4);

	$dbh = null;


	$total=$_SESSION["total"];

?>

<!DOCTYPE html> 

<head> 
	<title>ECE Amazon</title> 
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">

	<meta charset="utf-8" /> 
	<link href="confirmation_commande2.css" rel="stylesheet" type="text/css"/> 
</head> 
 
<body>
	<?php include ("navbar.php") ?>
    
	<h1 id="titre">Félicitations</h1>
	<div id="contain">

	<div id="recap_commande">
	 
	</div>
	 
	<div id="mess_confirmation">  
	        

		<h2> Tu recevras ta commande d'ici</h2>

		<?php   
		 	if ($choix_livr=="dom")
            {
                $total=$total+4;
                echo'<center><div id="dom">3-5 jours ouvrés à ton domicile : '.$adresse.' '.$cp.' '.$ville.'</div><center>';
            }
		        
			if ($choix_livr=="relai")
            {
                 $total=$total+2;
		        echo'<center><div id="dom">2-3 jours ouvrés dans votre point relais</div><center>'; 
            }
               
		 	if ($choix_livr=="prenium")
            {
                $total=$total+7;
                 echo'<p><div id="dom">Sous 24h chez vous au '.$adresse.'</div></p>';  
            }
		       
		    
		 	echo '<p><div id="mail">Total de la commande : '.$total.'</div></p>';  
		?>
		   
	</div>

	<div id="SAV">
		<p>Si les informations ci-dessus sont erronées, n’hésite pas à nous contacter <a href="mailto:inna.ndaw@wanadoo.fr?subject=Question sur ma commande&body=[Veuillez renseigner votre numéro de panier ici]"><br>S.A.V ECE Amazon</a></p>
	</div>

    </div>
<?php include ("footer.php") ?>	
</body> 
</html>
