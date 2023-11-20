<?php
echo "<pre>";
//como obter o tamanho de um arquivo em bytes

$tam = filesize('irineu.txt');
echo "tamanho do arquivo é $tam";

//obter informações sobre um determinado ficheiro

$info = pathinfo('irineu.txt');
echo "<br>";
print_r($info);