<?php


//funções

//podemos passar valores(argumentos) para o interior dessa função se essa função aceitar parametros

/*

    Parametros sao variaveis indicadas dentro do () da função e estarão disponiveis para
    serem usadas dentro da função

    Argumentos sao valores que passamos

    ex:
*/

function soma ($valor1, $valor2){  //valor1 e valor 2 sao parametros
    return $valor1 + $valor2;
}

echo soma(24,42);  // 66
//24 e 42 sao argumentos


//Parametros opcionais

/*
SAO PARAMETROS que ja possuem um valor atribuido 
se passarmos um argumento para esse parametro, o valor passado sera usado

IMPORTANTE
 parametros opcionais devem ser sempre declarados depois de parametros nao opcionais

*/

function multiplicar($a, $b = 5){
    return $a * $b;
}

echo multiplicar(10);  // 50 pq o b ja vale 5
echo "<br>";

echo multiplicar(10,3); //30 pq como foi passado argumento o valor foi reescrevido

echo "<br>";
echo "<hr>";

/*
O PHP 8 trouxe a possibilidade de laterar a ordem dos argumentos quando chamamos uma função


um conceito chamado NAMED ARGUMENTS
*/

function apresentar($num1, $num2 , $num3 = 15){
    return "$num1 | $num2 | $num3";
}

echo apresentar(42,2121);
echo "<br>";
echo apresentar(num1:50, num2:30); //poderia definir num3 tbm
//se alterar a ordem dos parametros nao mudara a ordem do return

echo "<br>";
echo "<hr>";

/*
    O php vai sempre tentar determianr o data type dos parametros e do return
    podemos reforçar o tipo de valores que serão retornados
*/

function teste ($teste1, $teste2) : int{
    return $teste1 * $teste2;
}

function teste2 ($teste1, $teste2) : string {
    return $teste1 * $teste2;
}

//vai estar mostrando o resultado normal, por que?

/*
    EXiste um mecanismo no php designado por strict types
    se esse mecanismo nao estiver ativo, o php vai sempre tentar fazer a conversao
    implicita dos valores
*/
echo "<br>";
echo "<hr>";

declare(strict_types=1);

function testeFinal($numero1, $numero2): int{
    return $numero1 * $numero2;
}

//isso significa que deve ser seguido a declaração de ser um valor int, caso seja
//string por exemplo, daria erro
//strict_type deve ser a primeira declaração em um script, por isso o erro

function testeFinal($numero1, $numero2): int|float{
    return $numero1 * $numero2;
}

//usando | significa que tambem pode ser devolvido um valor float e int