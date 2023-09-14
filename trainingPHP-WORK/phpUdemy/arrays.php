<?php

//ARRAYS  == variaveis que funcionam como coleção de dados

//maneiras de criar um array

$teste1 = array(10,'natan',9,88);
//ou
$teste2 = [10,'natan',9,88];

//acessando cada valor do array pelo indice de forma simples

$teste1[0]; //primeiro valor do array

// é possivel criar o array e ja atribuir valores a respectivos indices

$teste3 = [
    10 => 'natan no indice 10',
    12 => 'irineu no indice 12'
];

//echo "o array é " . $teste3[10];

//é possivel alterar valores de um array depois de criado

$teste4 = [3,1,4,5,'natan'];
$teste4[0] = 'natan no primeiro indice';

//visualizando o array com var_dump()

//uma maneira melhor de visualizar arrays

//echo "<pre>";
//echo var_dump($teste4);
//echo "<pre>";

//Como adicionar e remover elementos dentro de ARRAYS

//ADICIONAR (PUSH)

$teste4[] = 'novo nome'; //adicionando dessa maneira sempre adiciona como ultimo valor
//echo var_dump($teste4) ;  

// OU

array_push($teste4,'teste1'); //pode colocar mais de um valor entre VIRGULAS
echo var_dump($teste4) ;

 //REMOVAR elementos (a chave vai desaparecer)

 unset($teste4[5]); //remove o elemento no indice 5

 // ARRAYS

 //Eles podem ser arrays associativos:
 // Tem indices alfanuméricos


 $empresa = [
    'ceo' => 'fulano1',
    'administrador' => 'fulano2',
    'desenvolvedor' => 'fulano3',
    'faxineiro' => 'fulano4'
 ];

 echo "<pre>";
echo var_dump($empresa);
 echo "</pre>";

 //para apresentar um valor, usamos a key, indice

 echo $empresa['ceo'];

 //para adicionar é da mesma forma

 $empresa['operario'] = 'eu'; //adiciona no final
 echo $empresa['operario'];