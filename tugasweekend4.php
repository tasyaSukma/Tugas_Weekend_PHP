<?php
	function luasTabung($jari, $tinggi){
		$luasPermukaan = 2 * pi() * $jari * ($jari + $tinggi);
		return round($luasPermukaan);
	}

	echo "Jadi luasnya adalah ...", luasTabung(14,10);
?>