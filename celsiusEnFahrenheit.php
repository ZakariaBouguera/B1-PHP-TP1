<?php
		echo " saisir la temperature en °C : ";
		$F = fgets ( STDIN) ;
		
		$F = 1.8 * $F+32;
		echo " Temperature en °F : ", $F, "\n";
?>
