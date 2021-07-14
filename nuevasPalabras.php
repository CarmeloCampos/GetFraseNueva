<?php

$NewPalabras = file_get_contents("https://random-word-api.herokuapp.com/word?number=999999999");

$PalabrasNuevasArray = json_decode($NewPalabras, true);


$file = fopen("common_passwords.txt", "w");

foreach ($PalabrasNuevasArray as $key => $value) {
    //echo $value . "\n";
    fwrite($file, $value . PHP_EOL);
}


fclose($file);
