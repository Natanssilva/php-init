<?php

//funções de strings

$frase = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";

//comprimento de uma string LENGTH

strlen($frase);

//string em maiusculo

strtoupper($frase);

//string em minusculo

strtolower($frase);

//apresentar apenas uma parte da frase, do indice X ate o Y escolhido

substr($frase,0,20);

//verifica se uma frase existe dentro da string

//echo str_contains($frase, 'ipsum dolor');    Essa função só está disponivel no PHP 8


