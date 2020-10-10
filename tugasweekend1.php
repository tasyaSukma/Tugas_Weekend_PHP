<?php
	function luasKubus($nilai){
		$luas = 6 * pow($nilai,2);
		return $luas;
	}

	echo "Luas dengan panjang rusuk 4  : ", luasKubus(4), "<br>";
	echo "Luas dengan panjang rusuk 7  : ", luasKubus(7), "<br>";
	echo "Luas dengan panjang rusuk 10 : ", luasKubus(10), "<br>";
	echo "Luas dengan panjang rusuk 12 : ", luasKubus(12), "<br>";
?>
