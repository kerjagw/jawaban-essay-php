<?php
// Buatlah sebuah function perolehan_medali() yang menerima satu parameter berupa array multidimensi yang berisi nama negara dan perolehan medali. function akan menghitung jumlah medali emas, perak dan perunggu per negara. function akan me-return sebuah array berisi array asosiatif per-negara disertai jumlah masing-masing perolehan medal. jika tidak ada data pada array yang diinputkan di parameter, maka function me-return "no data"


function perolehan_mendali($arr){
	if (empty($arr))
		return "no data";
	
	$return = [];
	foreach($arr as $in) {
		if(!in_array($in[0], array_column($return, 'negara'))){
			$return[] = [
				'negara' => $in[0],
				'emas' => 0,
				'perak' => 0,
				'perunggu' => 0,
			];
		}
		$key = array_search($in[0], array_column($return, 'negara'));
		$return[$key][$in[1]] = $return[$key][$in[1]] + 1;
	}
	
	return $return;	
}
?>
