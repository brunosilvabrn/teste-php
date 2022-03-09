<?php


function SequenciaCrescente($array) {

	$chances = 0;

	for ($i = 0; $i < count($array); $i++) { 
		$verificar = $array[$i];
		for ($j = 0; $j < count($array); $j++) { 
			if($verificar == $array[$j] && $i > $j) {
				$chances++;
				break;
			}
		}
	}

	$array = array_unique($array);
	$arr = [];

	foreach ($array as $value) {
		array_push($arr, $value);
	}


	for ($i = 0; $i < count($array) - 1; $i++) { 
		$numeroAtual = $arr[$i];
		for ($j = 0; $j < count($arr); $j++) {
			if ($numeroAtual > $arr[$j] && $j > $i || $numeroAtual == $arr[$j] && $j > $i) {
				$chances++;
				break;
			}
		}

	}

	if($chances < 2) {
		echo "true";
	}else {
		echo "false";
	}
}
