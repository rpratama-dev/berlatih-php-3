<?php
function tentukan_deret_geometri($arr) {
// kode di sini
	$n = count($arr);  
	$a = $arr[0];
	$b = $arr[1];
	$rasio = $b / $a;
	$un = $a * pow($rasio, $n-1); 
	if($un == $arr[$n-1]){
		return "true <br>";  
	}
	return "false<br>";
	
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>