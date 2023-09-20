<?php

//operadores de comparação


//==   ===  !=   !==  <>  <   >  <=   >=   <=>   ??   ?:

//sõa valores pra comparar variaveis ou expressões
//os resultados dessas comparações são booleanos
//pode ser verdadeira ou falsa (true or false)

//verificar se valores são iguais

var_dump(10 == 20);  //bool(false)
var_dump(20 == 20);  //bool(true )
var_dump("joao" == "Joao");  //bool(false)
var_dump("joao ribeiro" == "joao" . " " . "ribeiro");  //bool(true)

var_dump(10 == "10"); //bool(true) true pq são valores iguais e nao compara o tipo de dado

// comparar o valor e o tipo de dado

var_dump(10 === "10"); //bolean(false) pq eles são mesmos valores mas não são identicos === pq um é string e o outro um int

//verificar se os valores são diferentes

var_dump(10 != 20); //true pq são valores diferentes
var_dump(10 != 10); //false pq são valores iguais e nao diferentes
var_dump(10 != "10"); //false pq são valores iguais 

var_dump(10 !== "10");  //true pq eles NÃO sao identicos ja q sao tipo de dados diferentes

var_dump(20 <> 20); //true. é a mesma coisa que !=

//spaceship operator

var_dump(20 <=> 10); // int(1)  1 no caso do valor da esquerda > que o da direita

var_dump(10 <=> 10); // int(0) se for igual retorna 0

var_dump(10 <=> 20);  //int(-1)  se o valor da esquerda for inferior ao da direita, retorna -1
//<=> só pode retornar 1, 0 -1


//operadores condicionais:  ??     ?:

//operador ternário

$valor1 = "joao";

echo $valor1 == "joao"? "é igual" : "nao é igual" ; // se valor1 for igual a joao, executa é igual SE NÃO executa não é igual

//null coalescing operator

$valorTESTE = null;
$aTESTE = $valorTESTE ?? "OK"; //$aTESTE = OK
//isso é basicamente um operador que ve se essa variavel for NULL ela atribui o valor que vc colocou apos ??, no caso ok

