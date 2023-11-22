<?php


/*

os arquivos CSV podem conter diferentes tipos de formatação 
essas configurações de formatação podemos passar nos argumentos da function fputcsv()

*/

// fputcsv(
//     'resource/arquivo',
//     'array com dados',
//     'caracter de separação dos dados',
//     'delimitação no caso de valores do tipo string',
//     'string de marcação do final de linha',
// );

//exemplo

// fputcsv();

//a leitura é feita apenas usando fgetcsv


echo "<pre>";

$file = fopen('new.csv','r'); //abrir o arquivo mas o R indica que só será lido

while (!feof($file)) { //enquanto nao existir o final do arquivo
    $linha = fgetcsv($file);
    print_r($linha);
}

fclose($file);