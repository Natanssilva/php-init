<?php

//funções associadas a arrays

$cliente = [
    "nome" => "natan",
    "cpf" => 214141,
    "idade" => 20
];

//apresentar um valor de um array associativo
echo $cliente['idade'];

//verificar se existe uma determinada key no array
var_dump(key_exists("cpf",$cliente)); // vai retornar booelan, no caso true
//a chave cpf existe dentro do array cliente

//array para string
$resultado = implode(",",$cliente);
var_dump($resultado); // "natan,214141,20"  converte isso tudo pra um texto unico, uma string

//criar um novo array a partir de uma parte de um array ja existente

$nomes = [1,2,3,4,5,6];
$part_nomes = array_slice($nomes,2); // ele seleciona a partir do elemento no indice 2 incluindo indice 2 entao = $part_nomes =3,4,5,6
echo var_dump($part_nomes);
