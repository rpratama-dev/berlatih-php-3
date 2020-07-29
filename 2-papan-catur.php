<?php

function papan_catur($angka) {
// tulis kode di sini
	$result = "";
	$n = $angka;
	for($i = 0; $i < $n; $i++){
		if(($i % 2)==0){
			for($x = 1; $x <= $n; $x++){
				$result .= "# &nbsp; ";  
			} 
		}else{//*
			for($x = 1; $x <= $n-1; $x++){
				$result .= " &nbsp; #";  
			} //*/
		}
		
		$result .= "<br>";
	}
	return $result."<br>";
}

// TEST CASES
echo papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/

?>