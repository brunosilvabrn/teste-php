<?php

function Primos($inicial,$final) {

	$primos = [];

	for ($i = $inicial; $i <= $final ; $i++) { 
		$verificar = true;
		for ($j = 2; $j < $i; $j++) {
			if ($i % $j == 0) {
				$verificar = false;
			}
		}
		if ($verificar && $i != 1) {
			array_push($primos, $i);
		}
	}

	return $primos;

}

