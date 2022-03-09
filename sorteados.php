<?php

$sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1];

$repetidos = [];
$naoRepetidos = [];

for ($i = 0; $i < count($sorteado); $i++) { 
	$numero = $sorteado[$i];
	
	for ($j = 0; $j < count($sorteado); $j++) { 
		$verificar = $sorteado[$j];

		if ($numero == $verificar && $i != $j) {
			array_push($repetidos, $numero);
		}
	}
}

for ($i = 0; $i < count($sorteado); $i++) { 

	$num = $sorteado[$i];
	$mostrar = true;

	for ($j = 0; $j < count($repetidos); $j++) {
		if ($num == $repetidos[$j]) {
			$mostrar = false;
		}
	}

	if ($mostrar) {
		array_push($naoRepetidos, $num);
	}
}

foreach ($naoRepetidos as $value) {
	echo $value.' ';
}