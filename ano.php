<?php 

function SeculoAno($ano) {

	$verificar = 100;

	for ($i = 1; $i <= $ano; $i++) { 
		if ($ano <= $verificar) {
			return "Ano ".$ano." = Século ".$i;
			break;
		}
		$verificar += 100;
	}

}
