<?php
	function ubah_huruf($string){
		//kode di sini
		$alpha = array_merge(range('a','z'));
		array_push($alpha, "aa"); //untuk mengambil karakter setelah z
		$newWord = "";
		for ($i=0;$i < strlen($string);$i++){
			$newAlpha = array_search($string[$i],$alpha);
			$newWord .= $alpha[$newAlpha+1];
		}
		return $string. " => ". $newWord."<br>";
	}

	// TEST CASES
	echo ubah_huruf('wow'); // xpx
	echo ubah_huruf('developer'); // efwfmpqfs
	echo ubah_huruf('laravel'); // mbsbwfm
	echo ubah_huruf('keren'); // lfsfo
	echo ubah_huruf('semangat'); // tfnbohbu */

?>