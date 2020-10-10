<?php
	function jarakTempuh($jari, $putar){
		$jarak = 2 * $jari * $putar;
		return $jarak/100;
	}

	echo "Jarak tempuhnya adalah ... ", jarakTempuh(21,200), " meter";
?>