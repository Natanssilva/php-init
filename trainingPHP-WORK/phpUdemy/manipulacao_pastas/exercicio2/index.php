<?php
echo "<pre>";
/*

GUARDAR DENTRO DE UM FICHEIRO DE TEXTO A TABUADA DOS 3 ATÉ MIL

*/
$tabuada = 3;

for ($i = 1; $i <= 1000; $i++) {
    $resultado = "3x $i = " . ($tabuada * $i) . PHP_EOL;


   
        file_put_contents('tabuada.txt', $resultado, FILE_APPEND);
   
}
