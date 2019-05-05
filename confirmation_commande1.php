

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

