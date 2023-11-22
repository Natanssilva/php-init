<?php


//CSV - significa Comma Separated Values, é um arquivo com estrutura particular que permite
//aplicações tipo excel e etc

//criar um ficheiro CSV

$file = fopen('new.csv', 'w');

//header das colunas

$header = ['coluna A', 'coluna B','coluna C'] ;
fputcsv($file, $header);

//linhas

for ($i=1; $i <= 100; $i++) { 
    $linha = [rand(100,99),rand(100,99),rand(100,99)];
    fputcsv($file, $linha);
}

fclose($file);