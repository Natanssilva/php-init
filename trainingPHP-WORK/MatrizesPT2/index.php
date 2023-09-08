<?php
//Funções para manipular arrays e matrizes

$vetor = array(1,2,3,4,5); // um array com uma só linha que inicia no indice 0 com 1

//posso fazer a mesma coisa só que especificando onde cada valor vai estar nos indices

$vetor = array(0=>1,1=>2,2=>3,3=>4,4=>5);

foreach($vetor as $valor){ // para cada item do vetor considerado como $valor , mostre o valor
    echo " $valor";  // vai mostrar como 1,2,3,4,5
}

print_r($vetor); //mostra na tela qualquer coleção q seja
echo "<br>";
var_dump($vetor); //funciona da mesma maneira q a print r só q é mais completo, mostra quantos valores tem dentro do vetor
//e o tipo de dado em cada indice

array_push($vetor,6); //array push serve pra colocar um valor no final do array
//pode fazer d outra maneira tbm
//$vetor[] = 6;   assim tbm funcionaria

array_pop($vetor); //elimina o ultimo valor de um vetor(array)

array_unshift($vetor,10); //inclui o valor 10 como primeiro valor do vetor
array_shift($vetor); //elimina o primeiro valor do vetor

//ordenando vetores

sort($vetor); //ordena os valores sem mudar os indices então [2,9,5,8] -> [2,5,8,9] em ordem crescente

rsort($vetor); //faz a mesma coisa q o sort mas ordena em ordem decrescente

//ordem associativa

asort($vetor); //ordena os valores em crescente mas não organiza os indices e mantem na organização padrao do vetor
arsort($vetor); //ordena os valores em DECRESCENTE mas não organiza os indices e mantem na organização padrao do vetor

//ORDENANDO POR CHAVES(KEY -> INDICES DE UM VETOR)
ksort($vetor); //organiza apenas os indices d um vetor em ordem crescente
krsort($vetor); //organiza apenas os indices d um vetor em ordem DECRESCENTE