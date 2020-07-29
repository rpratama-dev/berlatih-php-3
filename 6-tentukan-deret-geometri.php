<?php
function tentukan_deret_geometri($arr) {
// kode di sini
	$n = count($arr);  
	$a = $arr[0];
	$b = $arr[1];
	$rasio = $b / $a;
	$temp = 1;
	echo $rasio."<br>";
	for($i=0;$i<$n;$i++){
		if (($arr[$i])==$arr[$i-1]){
			$temp = $arr[$i];
		}else{
			return "false<br>";
		}
	}
	return "true<br>";
	
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>