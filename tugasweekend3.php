<?php
	function volumeTabung($jari,$tinggi){
		$volume = pi()*pow($jari,2)*$tinggi;
		return round($volume);
	}

	echo "Volume dari tabung tersebut adalah ...", volumeTabung(10,30);
?>