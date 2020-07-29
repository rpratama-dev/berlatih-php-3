<?php
	function skor_terbesar($datas){
		//kode di sini
		$jml = count($datas); $key =""; $terbesar = []; $tempKelas = [];
		$kelas = array("Laravel","React Native","React JS"); // list daftar kelas
		
		for($i=0;$i < count($kelas);$i++){ //perulangan untuk kelas
			$temp = 0; 
			foreach($datas as $k => $val){ //perulangan untuk cek data skor sesuai kelas 
				if(in_array($kelas[$i], $val)){ //mencari kelas dalam array
					if($val["nilai"] > $temp){ // jika kelas di temukan, maka bandingkan nilai untuk mengambil nilai terbesar.
						$temp = $val["nilai"]; //nilai terbesar sementara
						$key = $k; //mengembalikan key array
					}
				}
			}
			$terbesar += array(
			$kelas[$i] => $datas[$key]); //gabungkan array jadi 1 array.
		} 
		return $terbesar;
	}

	// TEST CASES
	$skor = [
	  [
		"nama" => "Bobby",
		"kelas" => "Laravel",
		"nilai" => 78
	  ],
	  [
		"nama" => "Regi",
		"kelas" => "React Native",
		"nilai" => 86
	  ],
	  [
		"nama" => "Aghnat",
		"kelas" => "Laravel",
		"nilai" => 90
	  ], 
	  [
		"nama" => "Indra",
		"kelas" => "React JS",
		"nilai" => 85
	  ],
	  [
		"nama" => "Yoga",
		"kelas" => "React Native",
		"nilai" => 77
	  ],
	];
	
	echo "<pre>";
	print_r(skor_terbesar($skor));
	echo "</pre>"; 
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>