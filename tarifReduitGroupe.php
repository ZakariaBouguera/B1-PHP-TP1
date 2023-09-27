<?php
	
			echo " saisir le nombre d'adultes: ";
			$nombre = fgets(STDIN);
			$reste = $nombre % 7;
			$quotien = $nombre / 7;
			$quotien = intval ($quotien);
			$pt = $reste * 18;
			$mt = $quotien * 7 * 15;
			$total = $pt + $mt ; 
			echo " montant à régler : ", $total, "€";

?>
