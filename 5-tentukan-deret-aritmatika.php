<?php
	function tentukan_deret_aritmatika($arr) {
		//kode di sini
		$n1 = 1; //suku ke 2
		$n2 = 2; //suku ke 3
		$un1 = $arr[$n1];//nilai suku ke 2 = 4
		$un2 = $arr[$n2];//nilai suku ke 3 = 6
		$b = ($un2 - $un1)/(($n2+1) - ($n1+1)); //mencari beda
		$count = count($arr);
		$temp = 0;
		for($i=0;$i<$count;$i++){
			if (($temp + $b)==$arr[$i]){
				$temp = $arr[$i];
			}else{
				return "false<br>";
			}
		}
		return "true<br>"; 
	}

	// TEST CASES
	echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
	echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
	echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
	echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
	echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>