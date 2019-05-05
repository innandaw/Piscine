<?php
            
    session_start();
     
        
	$choix_livr = NULL;
            
     
	
	if ($_POST['typedelivery'] == 'dom')
	{
		$choix_livr = "dom";
       
	}
    if ($_POST['typedelivery'] == 'relai')
	{
		$choix_livr = "relai";
	 
	}
    if ($_POST['typedelivery'] == 'prenium')
	{
		$choix_livr = "prenium";
	 
	}

<<<<<<< HEAD

include 'confirmation_commande1.php'; 

=======
include 'confirmation_commande1.php'; 
>>>>>>> footer
?>

