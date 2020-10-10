<?php
	function keliling($jari){
		$kel = 2 * pi() * $jari;
		return round($kel);
	}

	echo "Kelilingnya adalah ...", keliling(14);
?>