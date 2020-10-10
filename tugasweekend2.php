<?php
	function hitungPanjang($luas){
		$sisi = sqrt($luas/6);
		return $sisi;
	}

	echo "Jadi panjang sisi kota kayu tersebut adalah akar dari ... ", hitungPanjang(3750),"<br>";
?>