<?php

function GetFraseNueva()
{
	$file = file('common_passwords.txt');
	$wCount = count($file);

	$arrayPalabras = array();
	$stringReturn = "";
	for ($i = 0; $i < 17;) {

		$PalabraNueva = $file[rand(0, $wCount - 1)];
		$PalabraNueva = trim(preg_replace('/\s\s+/', ' ', $PalabraNueva));

		if (isset($arrayPalabras[$PalabraNueva])) {
			$i = $i - 1;
		} else {
			$i++;
			$arrayPalabras[$PalabraNueva] = true;
			$stringReturn .= $PalabraNueva . " ";
		}
	}

	return rtrim($stringReturn);
}


echo GetFraseNueva();
