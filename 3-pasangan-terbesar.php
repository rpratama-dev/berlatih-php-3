<?php
	// Code function di sini 
	function pasangan_terbesar($angka){
		// kode di sini 
		$i = 0; $terbesar = 0;
		$nWords = strlen($angka);
		while ($i < $nWords){
			$num1 = intval(substr($angka, $i, 2)) ; 
			if($num1 > $terbesar){
				$terbesar = $num1;
			}
			$i++;
		}
		return $terbesar . "<br>";
	}

	// TEST CASES
	echo pasangan_terbesar(641573); // 73
	echo pasangan_terbesar(12783456); // 83
	echo pasangan_terbesar(910233); // 91
	echo pasangan_terbesar(71856421); // 85
	echo pasangan_terbesar(79918293); // 99

?>