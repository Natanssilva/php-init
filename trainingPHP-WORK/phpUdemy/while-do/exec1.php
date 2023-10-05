<?php

//ciclo permitem repetição de códigos enquanto a condição for verdadeira

//variavel num começa em 0, e ENQUANTO for menor ou igual a 10, vai mostrar na tela e incrementar 
//assim q passar de 10, o codigo n será mais executada
$num = 0;
while ($num <= 10) {   //teste lógico no começo
    echo "<br>Valor: $num";
    $num++;  //se remover essa linha, o codigo ficaria em looping infinito pq nao teria como sair da condição
}



// DO WHILE

/*
    A diferença entre DO WHILE e WHILE é que neste caso, o bloco é executado pelo menos 1 unica vez
    e só depois é avaliado a condição ou teste lógico

*/
echo  "<hr>";

$num = 0;  //mesmo se aqui for 11 ele iria executar uma unica vez 
do {
    echo "<br> Valor: $num";
    $num++;
} while ($num <= 10);