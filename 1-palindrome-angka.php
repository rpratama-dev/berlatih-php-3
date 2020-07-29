<?php

	function palindrome_angka($num) {
	  // tulis kode di sini
		/*
		$temp = $angka;   
		$new = 0;   
		while (floor($temp)) {   
			$d = $temp % 10;   
			$new = $new * 10 + $d;   
			$temp = $temp/10;  
			$angka++;
		} */ 
		$i = 0;$angka = $num;
		$ket = "Palindrome Angka ";
		if (reverseNum($angka) == $angka){
			if($angka < 9 or $angka >= 0){
				return $angka = $ket. $num ." : ". ($angka + 1)."<br>"; 
			}if($angka > 9){
				while($i<10){
					$angka +=1;
					if (reverseNum($angka) == $angka){
						return  $ket. $num ." : ". $angka."<br>";
					}
				}
			}
		} 
		else{ 
			$i = 0;
			while($i<10){
				$angka +=1;
				if (reverseNum($angka) == $angka){
					return $ket. $num ." : ".$angka."<br>";
				}
			}
		} 
	}

	// Code function di sini 
	function reverseNum($num){
		$num = strval($num);
		$i = 0;
		$result = "";
		$nWords = strlen($num)-1;
		while ($i < strlen($num)){
			$result .= $num[$nWords];
			$nWords--; $i++;
		}
		return $result;
	}

// TEST CASES
//echo palindrome_angka(1441); 
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11 
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>