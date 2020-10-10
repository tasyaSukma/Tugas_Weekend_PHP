<?php
	function luasLingkaran ($jari){
		$luas = pi() * pow($jari,2);
		return round($luas);
	}

	echo "Luasnya adalah ... ", luasLingkaran(14);
?>