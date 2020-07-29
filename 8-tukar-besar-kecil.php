<?php
	function tukar_besar_kecil($string){
		//kode di sini
		//kode di sini
		//$alpha = array_merge(range('A','Z'),range('a','z')); 
		$newWord = "";
		//*
		for ($i=0;$i < strlen($string);$i++){
			//$newAlpha = array_search($string[$i],$alpha);
			$char = $string[$i];
			if(ctype_upper($char)){
				$newWord .= strtolower($char);
			}else{
				$newWord .= strtoupper($char);
			}
		}
		return $string. " => ". $newWord."<br>";
		//*/print_r ($alpha);
	}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>