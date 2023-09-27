<?php
		define ( "tarif" , 17);
			echo " saisir le nombre d'adulte présent : ";
			$prix = fgets ( STDIN) ;
			
			$prix = tarif * $prix ;
			echo " Le montant totale de la traversée : ", $prix, "€ \n"

?>
