<?php

/*

    Existem várias formas de leitura de dados 

    file_get_contents(), le o conteudo e carrega o arquivo

*/

$dados = file_get_contents('dados.txt');
echo nl2br($dados);

echo "<hr>";

//podemos ler uma parte desse ficheiro

$dados = file_get_contents('dados.txt', offset:2,length:2);
echo nl2br($dados);
