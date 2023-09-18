<?php

//adicionando e removendo valores

$vetor1 = [
    "natan","luis","rubia","matheus","diogo"
];


function showArray($array){
    echo "<pre>";

    print_r($array);

    echo "</pre>";
}

showArray($vetor1);

//adicionando PUSH)

$vetor1[] = "utlimo nome";

showArray($vetor1);

//OU

array_push($vetor1,"adicionando mais um valor");
showArray($vetor1);


array_push($vetor1,"adicionando mais de um valor", "valor 2", "valor 3");
showArray($vetor1);

//removendo valores junto a CHAVE(indice) do array

unset($vetor1[0]); //apaga o valor e a chave 0, no exemplo some [0] = "natan" 
showArray($vetor1);


