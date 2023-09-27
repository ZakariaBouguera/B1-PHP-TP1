<?php
	echo "saisir la vitesse en km/h : ";
	$vitesseN = fgets( STDIN);
	
	$vitesseN = $vitesseN / 1.852;
	
	echo "resultat de la conversion : ", $vitesseN, "noeuds \n" ;


?>
